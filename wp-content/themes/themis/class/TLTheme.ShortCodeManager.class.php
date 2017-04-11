<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeShortCodeManager
{
	/**************************************************************************/
	
	var $shortCodeData;
	
	/**************************************************************************/
	
	function TLThemeShortCodeManager()
	{
		
	}
	
	/**************************************************************************/
	
	function setShortCodeData($shortCodeData)
	{
		$this->shortCodeData=$shortCodeData;
	}
	
	/**************************************************************************/
	
	function register()
	{
		add_action('admin_init',array($this,'adminInit'));
	}
	
	/**************************************************************************/
	
	function adminInit()
	{
		if(current_user_can('edit_posts') && current_user_can('edit_pages')) 
		{
			add_filter('mce_buttons',array($this,'filterEditorButton'));
			add_filter('mce_external_plugins',array($this,'filterEditorPlugin'));
		}		
	}
	
	/**************************************************************************/
	
	function filterEditorButton($button)
	{		
		array_push($button,'|','shortcode_manager_button');
		return($button);		
	}
	
	/**************************************************************************/
	
	function filterEditorPlugin($plugin)
	{	
	    $plugin['shortcode_manager']=THEME_URL_SCRIPT.'shortCodeManager.init.js';
		return($plugin);	
	}
	
	/**************************************************************************/
	
	function createManagerSelectShortCodeList()
	{
		$html=null;
		
		$html.='<option value="shortcode">['.TLThemeTranslator::esc_html__('Select shortcode').']</option>';
		
		foreach($this->shortCodeData as $index=>$data)
			$html.='<option value="'.$index.'">'.$data['label']['select-list'].'</option>';
			
		$html=
		'
			<select name="shortcode-manager-select-shortcode" id="shortcode-manager-select-shortcode" class="to-dropkick-disable">
				'.$html.'
			</select>
		';
		
		return($html);
	}
	
	/**************************************************************************/
	
	function createManagerPanel()
	{
		$panel=null;
		
		foreach($this->shortCodeData as $shortCode=>$shortCodeData)
		{
			$sectionHTML=null;
			
			TLThemeHelper::removeUIndex($shortCodeData,'description','hidden_content','section');
			
			if(is_array($shortCodeData['section']))
			{
				foreach($shortCodeData['section'] as $section)
				{
					$element=null;

					foreach($section['field'] as $fieldName=>$fieldData)
					{
						TLThemeHelper::removeUIndex($fieldData,'legend','html_attribute');

						$element.=
						'
							<div>
								'.$this->createFieldLegend($fieldData['legend']).'
								'.$this->createField($shortCode,$fieldName,$fieldData).'
							</div>
						';
					}

					TLThemeHelper::removeUIndex($section,'header','legend');

					$sectionHTML.=
					'
						<li>
							'.$this->createSectionHeader($section['header']).'
							'.$this->createSectionLegend($section['header'],$section['legend']).'
							'.$element.'
						</li>
					';
				}
			}
			
			$panel.=
			'
				<div id="shortcode-panel-'.$shortCode.'" class="shortcode-panel shortcode-panel-close">
					'.$this->createShortCodeDescription($shortCodeData['description']).'
					<ul class="to-form-field-list">
						'.$sectionHTML.'
					</ul>
					'.$this->createHiddenContentField($shortCode,$shortCodeData['hidden_content']).'
				</div>
			';
		}
		
		return($panel);
	}
		
	/**************************************************************************/
	
	function createField($shortCodeName,$argumentName,$data)
	{
		$html=null;
		$name=$this->createFieldName($shortCodeName,$argumentName);
		
		switch($data['type'])
		{
			case 'text'	:
				$html=$this->createFieldText($name,$data);
			break;
			case 'select-one':
				$html=$this->createFieldSelect($name,$data);
			break;
			case 'textarea':
				$html=$this->createFieldTextarea($name,$data);
			break;
			case 'radio':
				$html=$this->createFieldRadio($name,$data);
			break;
			case 'checkbox':
				$html=$this->createFieldCheckbox($name,$data);
			break;
		}
		
		return('<div class="to-clear-fix">'.$html.'</div>');
	}
		
	/**************************************************************************/
	
	function createFieldText($name,$data)
	{
		return('<input type="text" name="'.$name.'" id="'.$name.'"'.$this->createHTMLAttributes($data['html_attribute']).'/>');
	}
	
	/**************************************************************************/
	
	function createFieldTextarea($name,$data)
	{
		return('<textarea cols="0" rows="0"  name="'.$name.'"'.$this->createHTMLAttributes($data['html_attribute']).'></textarea>');
	}
	
	/**************************************************************************/
	
	function createFieldSelect($name,$data)
	{
		$html=null;
		
		foreach($data['data'] as $index=>$value)
		{
			$html.=
			'
				<option value="'.$index.'">'.$value.'</option>
			';
		}
		
		$html=
		'
			<select name="'.$name.'"'.$this->createHTMLAttributes($data['html_attribute']).'>
				'.$html.'
			</select>
		';
		
		return($html);
	}
	
	/**************************************************************************/
	
	function createFieldRadio($name,$data)
	{
		$i=0;
		$html=null;
		
		foreach($data['data'] as $index=>$value)
		{
			$id=$name.'_'.(++$i);
			
			$html.=
			'
				<input type="radio" name="'.$name.'" id="'.$id.'" value="'.$index.'"'.$this->createHTMLAttributes($data['html_attribute']).'/>
				<label for="'.$id.'">'.$value.'</label>
			';
		}		
				
		$html=
		'
			<div class="to-radio-button">
				'.$html.'
			</div>
		';
		
		return($html);
	}
	
	/**************************************************************************/
	
	function createFieldCheckbox($name,$data)
	{
		$i=0;
		$html=null;
		
		foreach($data['data'] as $index=>$value)
		{
			$id=$name.'_'.(++$i);
			
			$html.=
			'
				<input type="checkbox" name="'.$name.'" id="'.$id.'" value="'.$index.'"/>
				<label for="'.$id.'">'.$value.'</label>
			';
		}		
				
		$html=
		'
			<div class="to-checkbox-button">
				'.$html.'
			</div>
		';
		
		return($html);
	}
	
	/**************************************************************************/
	
	function createHTMLAttributes($attribute)
	{
		if(!is_array($attribute)) return;
		
		$html=null;
		foreach($attribute as $name=>$value)
			$html.=' '.$name.'="'.htmlspecialchars($value).'"';
		
		return($html);
	}
	
	/**************************************************************************/
	
	function createHiddenContentField($shortCodeName,$content)
	{
		$Validation=new TLThemeValidation();
		if($Validation->isEmpty($content)) return;

		return('<input name="'.$this->createFieldName($shortCodeName,'content').'" type="hidden" value="'.htmlspecialchars($content).'"/>');
	}
	
	/**************************************************************************/
	
	function createFieldName($shortCodeName,$argumentName)
	{
		return($shortCodeName.'-'.$argumentName);
	}
	
	/**************************************************************************/
	
	function createShortCodeDescription($description)
	{
		$Validation=new TLThemeValidation();
		
		if($Validation->isEmpty($description)) return;
		
		return('<p class="shortcode-panel-description">'.$description.'</p>');
	}
	
	/**************************************************************************/
	
	function createSectionHeader($header)
	{
		return('<h5>'.$header.'</h5>');
	}
	
	/**************************************************************************/
	
	function createSectionLegend($header,$legend)
	{
		$html=null;
		$Validation=new TLThemeValidation();
		
		if(is_array($legend))
		{
			foreach($legend as $value)
			{
				if(!is_null($html)) $html.='<br/>';
				$html.=$value;	
			}
		}
		elseif($Validation->isEmpty($legend))
		{
			if($Validation->isEmpty($header)) return(null);
			$html=$header.'.';
		}
		else $html=$legend;
		
		return('<span class="to-legend">'.$html.'</span>');
	}
	
	/**************************************************************************/
	
	function createFieldLegend($legend)
	{
		$Validation=new TLThemeValidation();
		if($Validation->isEmpty($legend)) return(null);
		
		return('<span class="to-legend-field">'.$legend.'</span>');
	}
	
	/**************************************************************************/
	
	function createShortCode($name,$content,$argument=array(),$breakLine=array('<br/>','<br/>'))
	{
		$shortCode=$breakLine[0].'['.THEME_CONTEXT.'_'.$name;
		
		foreach($argument as $aName=>$aValue)
			$shortCode.=' '.$aName.'="'.$aValue.'"';
		
		$shortCode.=']';
		
		$Validation=new TLThemeValidation();
		if($Validation->isNotEmpty($content))
			$shortCode.=$content.'[/'.THEME_CONTEXT.'_'.$name.']';
		
		$shortCode.=$breakLine[1];
		
		return($shortCode);
	}
	
	/**************************************************************************/
	
	function parseShortcode($shortcode)
	{
		$result=array();
		$pattern=get_shortcode_regex();
		
		$shortcode=preg_replace(array("/\r\n\r\n/","/\n\n/"),array(" "," "),$shortcode);
		
		preg_match_all("/$pattern/s",$shortcode,$result);
		
		$argument=array();
		$shortcode=null;
		
		if(isset($result[3][0]))
			$argument=shortcode_parse_atts($result[3][0]);
		if(isset($result[2][0]))
			$shortcode=preg_replace('/'.THEME_CONTEXT.'_/','',$result[2][0]);

		return(json_encode(array('shortcode'=>$shortcode,'argument'=>$argument)));
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>