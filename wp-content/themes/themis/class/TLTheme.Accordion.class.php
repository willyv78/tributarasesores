<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeAccordion
{
	/**************************************************************************/
	
	function TLThemeAccordion()
	{
		
		
	}
	
	/**************************************************************************/
	
	function createAccordion($attr,$content)
	{
		$default=array
		(
			'active'		=>	'0',
			'css_class'		=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$id='accordion_'.TLThemeHelper::createId();
		
		$output=
		'
			<ul class="theme-accordion '.TLThemeHelper::esc_attr($attribute['css_class']).'" id="'.$id.'">
				'.do_shortcode($content).'
			</ul>
			<div class="hidden">
				<script type="text/javascript">
					jQuery(document).ready(function() 
					{
						var theme=new TLTheme();
						theme.createAccordion(\'#'.$id.'\',{active:'.($attribute['active']=='false' ? 'false' : (int)$attribute['active']).'});
					});
				</script>
			</div>
		';
		
		return($output);		
	}
	
	/**************************************************************************/
	
	function createAccordionItem($attr,$content)
	{
		$attribute=shortcode_atts(array('header'=>'Header'),$attr);
		
		$output=
		'
			<li>
				<div><h4><a href="#">'.TLThemeHelper::esc_html($attribute['header']).'</a></h4></div>
				<div class="clear-fix"><div class="clear-fix paragraph">'.do_shortcode($content).'</div></div>
			</li>
		';

		return($output);		
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>