<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeButton
{
	/**************************************************************************/
	
	function TLThemeButton()
	{
		$this->buttonIcon=array
		(
			'address'			=>	array(TLThemeTranslator::__('Address')),
			'adjust'			=>	array(TLThemeTranslator::__('Adjust')),
			'administration'	=>	array(TLThemeTranslator::__('Administration')),
			'app'				=>	array(TLThemeTranslator::__('App')),
			'audio'				=>	array(TLThemeTranslator::__('Audio')),
			'award'				=>	array(TLThemeTranslator::__('Award')),
			'balance'			=>	array(TLThemeTranslator::__('Balance')),
			'battery'			=>	array(TLThemeTranslator::__('Battery')),
			'bin'				=>	array(TLThemeTranslator::__('Bin')),
			'binders'			=>	array(TLThemeTranslator::__('Binders')),
			'binoculars'		=>	array(TLThemeTranslator::__('Binoculars')),
			'bookmark'			=>	array(TLThemeTranslator::__('Bookmark')),
			'box'				=>	array(TLThemeTranslator::__('Box')),
			'briefcase'			=>	array(TLThemeTranslator::__('Briefcase')),
			'building'			=>	array(TLThemeTranslator::__('Building')),
			'calendar'			=>	array(TLThemeTranslator::__('Calendar')),
			'cart'				=>	array(TLThemeTranslator::__('Cart')),
			'chart'				=>	array(TLThemeTranslator::__('Chart')),
			'chat'				=>	array(TLThemeTranslator::__('Chat')),
			'clock'				=>	array(TLThemeTranslator::__('Clock')),
			'cloud'				=>	array(TLThemeTranslator::__('Cloud')),
			'config'			=>	array(TLThemeTranslator::__('Config')),
			'creditcard'		=>	array(TLThemeTranslator::__('Creditcard')),
			'cross'				=>	array(TLThemeTranslator::__('Cross')),
			'database'			=>	array(TLThemeTranslator::__('Database')),
			'document'			=>	array(TLThemeTranslator::__('Document')),
			'download'			=>	array(TLThemeTranslator::__('Download')),
			'fail'				=>	array(TLThemeTranslator::__('Fail')),
			'fax'				=>	array(TLThemeTranslator::__('Fax')),
			'firstaid'			=>	array(TLThemeTranslator::__('Firstaid')),
			'folder'			=>	array(TLThemeTranslator::__('Folder')),
			'form'				=>	array(TLThemeTranslator::__('Form')),
			'glasses'			=>	array(TLThemeTranslator::__('Glasses')),
			'graph'				=>	array(TLThemeTranslator::__('Graph')),
			'heart'				=>	array(TLThemeTranslator::__('Heart')),
			'home'				=>	array(TLThemeTranslator::__('Home')),
			'hourglass'			=>	array(TLThemeTranslator::__('Hourglass')),
			'id'				=>	array(TLThemeTranslator::__('Id')),
			'image'				=>	array(TLThemeTranslator::__('Image')),
			'imageslider'		=>	array(TLThemeTranslator::__('Imageslider')),
			'info'				=>	array(TLThemeTranslator::__('Info')),
			'keyboard'			=>	array(TLThemeTranslator::__('Keyboard')),
			'lab'				=>	array(TLThemeTranslator::__('Lab')),
			'laptop'			=>	array(TLThemeTranslator::__('Laptop')),
			'leaf'				=>	array(TLThemeTranslator::__('Leaf')),
			'link'				=>	array(TLThemeTranslator::__('Link')),
			'list'				=>	array(TLThemeTranslator::__('List')),
			'lock'				=>	array(TLThemeTranslator::__('Lock')),
			'luggage'			=>	array(TLThemeTranslator::__('Luggage')),
			'mail'				=>	array(TLThemeTranslator::__('Mail')),
			'mic'				=>	array(TLThemeTranslator::__('Mic')),
			'minus'				=>	array(TLThemeTranslator::__('Minus')),
			'mobile'			=>	array(TLThemeTranslator::__('Mobile')),
			'money'				=>	array(TLThemeTranslator::__('Money')),
			'movie'				=>	array(TLThemeTranslator::__('Movie')),
			'network'			=>	array(TLThemeTranslator::__('Network')),
			'notebook'			=>	array(TLThemeTranslator::__('Notebook')),
			'paintbrush'		=>	array(TLThemeTranslator::__('Paintbrush')),
			'people'			=>	array(TLThemeTranslator::__('People')),
			'phone'				=>	array(TLThemeTranslator::__('Phone')),
			'piano'				=>	array(TLThemeTranslator::__('Piano')),
			'pin'				=>	array(TLThemeTranslator::__('Pin')),
			'plus'				=>	array(TLThemeTranslator::__('Plus')),
			'printer'			=>	array(TLThemeTranslator::__('Printer')),
			'projector'			=>	array(TLThemeTranslator::__('Projector')),
			'questionmark'		=>	array(TLThemeTranslator::__('Questionmark')),
			'quote'				=>	array(TLThemeTranslator::__('Quote')),
			'rss'				=>	array(TLThemeTranslator::__('Rss')),
			'screen'			=>	array(TLThemeTranslator::__('Screen')),
			'signpost'			=>	array(TLThemeTranslator::__('Signpost')),
			'success'			=>	array(TLThemeTranslator::__('Success')),
			'tablet'			=>	array(TLThemeTranslator::__('Tablet')),
			'tags'				=>	array(TLThemeTranslator::__('Tags')),
			'target'			=>	array(TLThemeTranslator::__('Target')),
			'tick'				=>	array(TLThemeTranslator::__('Tick')),
			'upload'			=>	array(TLThemeTranslator::__('Upload')),
			'video'				=>	array(TLThemeTranslator::__('Video')),
			'wall'				=>	array(TLThemeTranslator::__('Wall')),
			'wallet'			=>	array(TLThemeTranslator::__('Wallet')),
			'warning'			=>	array(TLThemeTranslator::__('Warning'))
		);
		
		$this->buttonIconPosition=array
		(
			'left'				=>	array(TLThemeTranslator::__('Left')),
			'right'				=>	array(TLThemeTranslator::__('Right'))			
		);
		
		$this->buttonSize=array
		(
			'tiny'				=>	array(TLThemeTranslator::__('Tiny')),
			'small'				=>	array(TLThemeTranslator::__('Small')),
			'medium'			=>	array(TLThemeTranslator::__('Medium')),
			'large'				=>	array(TLThemeTranslator::__('Large'))
		);
	}
	
	/**************************************************************************/
	
	function createButton($attr)
	{
		$default=array
		(
			'label'				=>	'',
			'href'				=>	'#',
			'target'			=>	'_self',
			'icon'				=>	'',
			'icon_position'		=>	'left',
			'size'				=>	'medium',
			'css_class'			=>	'',
			'bg_color'			=>	'',
			'text_color'		=>	'',
			'bg_color_hover'	=>	'',
			'text_color_hover'	=>	''
		);
		
		$Validation=new TLThemeValidation();
		
		$style=null;
		$class=array('button');
		
		$attribute=shortcode_atts($default,$attr);
		
		if($Validation->isEmpty($attribute['label'])) return;
	
		if(array_key_exists($attribute['icon'],$this->buttonIcon))
		{
			$iconPosition=array_key_exists($attribute['icon_position'],$this->buttonIconPosition) ? $attribute['icon_position'] : $default['icon_position'];
			array_push($class,'button-icon','button-icon-'.$attribute['icon'],'button-icon-position-'.$iconPosition);
		}
		
		$iconSize=array_key_exists($attribute['size'],$this->buttonSize) ? $attribute['size'] : $default['size'];
		
		array_push($class,'button-size-'.$iconSize);
		array_push($class,$attribute['css_class']);

		$style.=$Validation->isHexColor($attribute['text_color'])	? 'color:#'.$attribute['text_color'].';' : null;
		$style.=$Validation->isHexColor($attribute['bg_color'])		? 'background-color:#'.$attribute['bg_color'].';' : null;
		
		$id='button-'.TLThemeHelper::createId();
		
		$output=
		'
			<div class="'.TLThemeHelper::esc_attr(trim(join(' ',$class))).'" id="'.$id.'" '.($Validation->isEmpty($style) ? null : 'style="'.$style.'"').'>
				<a href="'.TLThemeHelper::esc_attr($attribute['href']).'" class="'.($attribute['target']=='_blank' ? 'target-blank' : 'target-self').'">
					<span>'.TLThemeHelper::esc_html($attribute['label']).'</span>
				</a>
			</div>
		';
		
		if($Validation->isHexColor($attribute['bg_color_hover']) || $Validation->isHexColor($attribute['text_color_hover']))
		{
			$bgColorHover=$Validation->isHexColor($attribute['bg_color_hover']) ? '#'.$attribute['bg_color_hover'] : null;
			$textColorHover=$Validation->isHexColor($attribute['text_color_hover']) ? '#'.$attribute['text_color_hover'] : null;

			$bgColor=$Validation->isHexColor($attribute['bg_color']) ? '#'.$attribute['bg_color'] : null;
			$textColor=$Validation->isHexColor($attribute['text_color']) ? '#'.$attribute['text_color'] : null;
			
			$output.=
			'
				<div class="hidden">
				<script type="text/javascript">
					jQuery(document).ready(function() 
					{
						var theme=new TLTheme();
						theme.createButtonHover(\''.$id.'\',\''.$bgColor.'\',\''.$textColor.'\',\''.$bgColorHover.'\',\''.$textColorHover.'\');
					});
				</script>
				</div>
			';
		}
	
		return(TLThemeHelper::formatCode($output));
	}

	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>