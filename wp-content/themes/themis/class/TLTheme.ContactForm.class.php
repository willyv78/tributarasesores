<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeContactForm
{
	/**************************************************************************/
	
	var $debug;
	
	/**************************************************************************/

	function TLThemeContactForm()
	{
		$this->SMTPSecureType=array
		(
			'ssl'				=>	array(TLThemeTranslator::__('SSL')),
			'tls'				=>	array(TLThemeTranslator::__('TLS'))
		);
		
		$this->recaptchaPrivateKey=TLThemeOption::getOption('recaptcha_private_key');
		
		$this->reset=TLThemeOption::getOption('contact_form_reset');
		$this->debug=TLThemeOption::getOption('contact_form_debug');
		$this->recaptchaEnable=(int)((int)TLThemeOption::getOption('contact_form_recaptcha_enable') && (int)TLThemeOption::getOption('recaptcha_enable'));
	}

	/**************************************************************************/

	function createContactForm($attr)
	{
		if(TLThemeOption::getOption('contact_form_enable')!=1) return(null);
		
		$attribute=shortcode_atts(array('css_class'=>''),$attr);

		$data=array();
		
		$data['id']=TLThemeHelper::createId();
		$data['css_class']=$attribute['css_class'];
		
		$data['option']=TLThemeOption::getOptionObject();
		
		$data['recaptchaEnable']=$this->recaptchaEnable;
		
		$Template=new TLThemeTemplate($data,THEME_TEMPLATE_DIR.'contact_form.php');
		return($Template->outputWP(true));
	}

	/**************************************************************************/
	
	function createContactFormResponse()
	{
		ob_clean();
		
		$id=$_POST['id'];
		$response=array('error'=>0,'info'=>null,'reset'=>$this->reset);

		$data=array('contact_form_name'=>null,'contact_form_mail'=>null,'contact_form_subject'=>null,'contact_form_message'=>null);
		
		foreach($data as $index=>$value) $data[$index]=$_POST[$index.'_'.$id];

		$Validation=new TLThemeValidation();
	
		if(TLThemeOption::getOption('contact_form_enable')!=1) return;
		
		if($Validation->isEmpty($data['contact_form_name']))
		{
			$response['error']=1;
			$response['info'][]=array('fieldId'=>'contact_form_name_'.$id,'message'=>TLThemeTranslator::esc_html__('Enter your name.','contact_form_notice_name'));
		}
	
		if(!$Validation->isEmailAddress($data['contact_form_mail']))
		{
			$response['error']=1;	
			$response['info'][]=array('fieldId'=>'contact_form_mail_'.$id,'message'=>TLThemeTranslator::esc_html__('Enter valid e-mail address.','contact_form_notice_email'));
		}
		
		if($Validation->isEmpty($data['contact_form_subject']))
		{
			$response['error']=1;	
			$response['info'][]=array('fieldId'=>'contact_form_subject_'.$id,'message'=>TLThemeTranslator::esc_html__('Enter subject of the message.','contact_form_notice_subject'));
		}
	
		if($Validation->isEmpty($data['contact_form_message']))
		{
			$response['error']=1;
			$response['info'][]=array('fieldId'=>'contact_form_message_'.$id,'message'=>TLThemeTranslator::esc_html__('Enter your message.','contact_form_notice_message'));
		}	
		
		if($this->recaptchaEnable==1)
		{
			$recaptchaData=array('recaptcha_challenge_field'=>null,'recaptcha_response_field'=>null);
			foreach($recaptchaData as $index=>$value) $recaptchaData[$index]=$_POST[$index];
	
			$recaptchaResponse=recaptcha_check_answer($this->recaptchaPrivateKey,$_SERVER['REMOTE_ADDR'],$recaptchaData['recaptcha_challenge_field'],$recaptchaData['recaptcha_response_field']);
			if(!$recaptchaResponse->is_valid)
			{
				$response['error']=1;
				$response['info'][]=array('fieldId'=>'contact_form_submit_'.$id,'message'=>TLThemeTranslator::esc_html__('Entered code is invalid.','contact_form_notice_recaptcha'));
			}
		}
	
		if($response['error']==1) $this->createResponse($response);
		$data=TLThemeHelper::stripslashesPOST($data);
	
		$mail=new PHPMailer();
	
		$mail->CharSet='UTF-8';
	
		$mail->SetFrom($data['contact_form_mail'],$data['contact_form_name']); 
		$mail->AddReplyTo($data['contact_form_mail'],$data['contact_form_name']); 
	
		$mail->AddAddress(TLThemeOption::getOption('contact_form_recipient_address'),TLThemeOption::getOption('contact_form_recipient_name'));

		if($this->debug) $mail->SMTPDebug=true;
		
		if(TLThemeOption::getOption('contact_form_smtp_enable')==1)
		{
			$mail->IsSMTP();

			$mail->SMTPAuth=true; 
			$mail->SMTPSecure=TLThemeOption::getOption('contact_form_smtp_secure_type');

			$mail->Port=TLThemeOption::getOption('contact_form_smtp_port');
			$mail->Host=TLThemeOption::getOption('contact_form_smtp_host');
			$mail->Username=TLThemeOption::getOption('contact_form_smtp_username');
			$mail->Password=TLThemeOption::getOption('contact_form_smtp_password');
		}

		$mail->Subject=TLThemeOption::getOption('contact_form_subject').': '.$data['contact_form_subject'];
		
		$value=array_map('htmlspecialchars',$data);
		
		$body=TLThemeOption::getOption('contact_form_message');
		$body=preg_replace(array('/\[name\]/','/\[address\]/','/\[message\]/'),array($data['contact_form_name'],$data['contact_form_mail'],$data['contact_form_message']),$body);
		
		$mail->MsgHTML($body);

		if(!$mail->Send())
		{
			$response['error']=1;	
			$response['info'][]=array('fieldId'=>'contact_form_submit_'.$id,'message'=>TLThemeTranslator::esc_html__('Sorry, we cannot send this message.','contact_form_notice_error'));			
			$this->createResponse($response);		
		}

		$response['error']=0;
		$response['info'][]=array('fieldId'=>'contact_form_submit_'.$id,'message'=>TLThemeTranslator::esc_html__('Thank you for contacting us','contact_form_notice_success'));
	
		$this->createResponse($response);			
	}
	
    /**************************************************************************/

    function isGPC()
    {
        return((bool)ini_get('magic_quotes_gpc'));
    }

	/**************************************************************************/

    function createResponse($response)
    {
        $json=json_encode($response);
		$buffer=ob_get_clean();
		if(ob_get_contents()) ob_end_clean();
		
		echo $json;
		if($this->debug==1) echo "\n\n".$buffer;
        exit;
    }
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>