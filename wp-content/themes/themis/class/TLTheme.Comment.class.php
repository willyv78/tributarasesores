<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeComment
{
	
	/**************************************************************************/
	
	function TLThemeComment()
	{		
		if(!isset($_GET['cpage'])) $this->page=1;
		else $this->page=(int)$_GET['cpage']<=0 ? 1 : (int)$_GET['cpage'];
		
		$this->thread_comments=(int)get_option('thread_comments');
		$this->comment_moderation=(int)get_option('comment_moderation') ? 0 : 1;
		$this->comments_per_page=(int)get_option('page_comments')==1 ? (int)get_option('comments_per_page') : -1;
	
		$this->recaptchaPrivateKey=TLThemeOption::getOption('recaptcha_private_key');
		$this->recaptchaEnable=(int)((int)TLThemeOption::getOption('comment_recaptcha_enable') && (int)TLThemeOption::getOption('recaptcha_enable'));
	}
	
	/**************************************************************************/
	
	function createAddCommentResponse()
	{
		global $wpdb;
		$Validation=new TLThemeValidation();
		
		$response=array('error'=>0,'info'=>null,'changeURL'=>'');
		$data=array('author'=>null,'email'=>null,'url'=>null,'comment'=>null,'comment_post_ID'=>0,'comment_parent'=>0);

		foreach($data as $index=>$value) 
		{
			if(array_key_exists($index,$_POST))
				$data[$index]=$_POST[$index];
		}
			
		if(!is_user_logged_in())
		{
			if(($Validation->isEmpty($data['author'])) && (get_option('require_name_email')==1))
			{
				$response['error']=1;
				$response['info'][]=array('fieldId'=>'author','message'=>TLThemeTranslator::esc_html__('Please enter your name.','comment_form_notice_name'));
			}

			if((!$Validation->isEmailAddress($data['email'])) && (get_option('require_name_email')==1))
			{
				$response['error']=1;	
				$response['info'][]=array('fieldId'=>'email','message'=>TLThemeTranslator::esc_html__('Please enter valid e-mail address.','comment_form_notice_email'));
			}

			if(!$Validation->isURL($data['url'],true))
			{
				$response['error']=1;	
				$response['info'][]=array('fieldId'=>'url','message'=>TLThemeTranslator::esc_html__('Please enter valid URL address.','comment_form_notice_website'));
			}
		}
	
		if($Validation->isEmpty($data['comment']))
		{
			$response['error']=1;
			$response['info'][]=array('fieldId'=>'comment','message'=>TLThemeTranslator::esc_html__('Please enter your message.','comment_form_notice_comment'));
		}	
		
		if($this->recaptchaEnable==1)
		{
			$recaptchaData=array('recaptcha_challenge_field'=>null,'recaptcha_response_field'=>null);
			foreach($recaptchaData as $index=>$value) $recaptchaData[$index]=$_POST[$index];
	
			$recaptchaResponse=recaptcha_check_answer($this->recaptchaPrivateKey,$_SERVER['REMOTE_ADDR'],$recaptchaData['recaptcha_challenge_field'],$recaptchaData['recaptcha_response_field']);
			if(!$recaptchaResponse->is_valid)
			{
				$response['error']=1;
				$response['info'][]=array('fieldId'=>'submit','message'=>TLThemeTranslator::esc_html__('Entered code is invalid.','comment_form_notice_recaptcha'));
			}
		}
	
		if($response['error']==1) $this->createResponse($response);
		$data=TLThemeHelper::stripslashesPOST($data);
		
		$insertData=array
		(
			'comment_post_ID'		=> (int)$data['comment_post_ID'],
			'comment_content'		=> $data['comment'],
			'comment_parent'		=> (int)$data['comment_parent'],
			'comment_date'			=> current_time('mysql'),
			'comment_approved'		=> $this->comment_moderation
		);

		if(!is_user_logged_in())
		{
			$insertData['comment_author']=$data['author'];
			$insertData['comment_author_url']=TLThemeHelper::addProtocolName($data['url']);
			$insertData['comment_author_email']=$data['email'];
		}
		else
		{
			$user=wp_get_current_user();
			$insertData['comment_author']=$user->display_name;
			$insertData['comment_author_email']=$user->user_email;
		}

		$commentId=wp_insert_comment($insertData);

		if($commentId)	
		{
			query_posts('p='.(int)$data['comment_post_ID'].'&post_type=post');
			if(have_posts())
			{
				the_post();
				
				if((int)$data['comment_parent']==0 || $this->thread_comments==0)
				{
					$query='select count(*) as count from '.$wpdb->comments.' where comment_approved=1 and comment_post_ID='.(int)get_the_ID().($this->thread_comments==1 ? ' and comment_parent=0' : null);
					$parent=$wpdb->get_row($query);
					
					if($this->comments_per_page>0)
						$_GET['cpage']=ceil($parent->count/$this->comments_per_page);
					else $_GET['cpage']=1;
					
					$response['changeURL']='#cpage-'.$_GET['cpage'];
				}
				else $_GET['cpage']=(int)$_POST['cpage'];
				
				$response['cpage']=(int)$_GET['cpage'];
				$response['commentId']=(int)$commentId;
				
				ob_start();
				comments_template();
				$response['html']=ob_get_contents();
				ob_end_clean();
			}
			
			$response['comment_id']=$commentId;
			
			$response['error']=0;
			$response['info'][]=array('fieldId'=>'submit','message'=>TLThemeTranslator::esc_html__('Your comment has been added.','comment_form_notice_success'));
		}
		else
		{
			$response['error']=1;
			$response['info'][]=array('fieldId'=>'submit','message'=>TLThemeTranslator::esc_html__('Your comment could not be added.','comment_form_notice_error'));
		}
		
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
		echo json_encode($response);
        exit;
    }
	
	/**************************************************************************/
	
	function createComment($comment,$args,$depth)
	{
		$ret=null;
		$reply=null;
		
		$GLOBALS['comment']=$comment;
		
		if((int)$comment->comment_parent>0)
		{
			$parent=get_comment($comment->comment_parent);
			
			$reply=
			'
				<a href="#comment-'.(int)$comment->comment_parent.'" class="comment-in-reply">
					'.TLThemeTranslator::esc_html__('In reply to','comment_form_in_reply_to').'&nbsp;'.$parent->comment_author.'
				</a>
			';
		}
		
		$ret.=
		'
			<li '.comment_class('clear-fix',$comment->comment_ID,$comment->comment_post_ID,false).' id="comment-'.$comment->comment_ID.'">

				<div class="comment-avatar">
					'.get_avatar($comment->comment_author_email,$args['avatar_size']).'
				</div>
				
				<div class="comment-infobar">
					'.TLThemeTranslator::esc_html__('Posted by','comment_form_posted_by').'&nbsp;'.get_comment_author_link().'
					'.$reply.'
					'.sprintf(TLThemeTranslator::esc_html__(' %1$s at %2$s'),get_comment_date(),get_comment_time()).'
				</div>
				
				<div class="comment-content clear-fix">
					<p>'.get_comment_text().'</p>
					<a href="#comment-'.(int)$comment->comment_ID.'" class="comment-reply">'.TLThemeTranslator::esc_html__('Reply','comment_form_reply').'</a>
				</div>
		';

		echo $ret;
	}
	
	/**************************************************************************/
	
	function createGetCommentResponse()
	{
		$response=array('html'=>'','cpage'=>$this->page);
		
		query_posts('p='.(int)$_GET['comment_form_post_id'].'&post_type=post');
		if(have_posts())
		{
			the_post();
			ob_start();
			comments_template();
			$response['html']=ob_get_contents();
			ob_end_clean();
		}

		echo @json_encode($response);
		exit;
	}

	/**************************************************************************/
}
	
/******************************************************************************/
/******************************************************************************/

?>