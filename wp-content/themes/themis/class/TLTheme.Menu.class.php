<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeMenu
{
	/**************************************************************************/
	
	function TLThemeMenu()
	{
		
		
	}
	
	/**************************************************************************/
	
	function create()
	{
		global $parentPost;
		
		$menuId=TLThemeOption::getGlobalOption($parentPost->post,'menu_top');
		
		if((int)$menuId>0)
		{
			$class=TLThemeOption::getOption('menu_top_fixed') ? ' menu-fixed-enable' : '';
			
			$attribute=array('menu'=>$menuId,'container_class'=>'clear-fix menu-wrapper-sf'.$class,'menu_class'=>'sf-menu clear-fix','walker'=>new TLThemeMenuWalker());
			wp_nav_menu($attribute);
			
			$attribute=array('menu'=>$menuId,'container_class'=>'clear-fix menu-wrapper-dp'.$class,'menu_class'=>'dp-menu clear-fix','walker'=>new TLThemeMenuDropdownWalker(),'items_wrap'=>'<select id="%1$s" class="%2$s"><option value="-1">'.TLThemeTranslator::esc_html__('[SELECT]','menu_mobile_select').'</option>%3$s</select>');
			wp_nav_menu($attribute);
		}
	}
	
	/**************************************************************************/
	
	function createWidgetMenu($menuId)
	{
		$attribute=array('menu'=>$menuId,'walker'=>new TLThemeMenuWalkerWidget(),'container_class'=>'widget-menu');
		echo wp_nav_menu($attribute);			
	}
	
	/**************************************************************************/
	
	function getMenuDictionary($useNone=true,$useGlobal=true,$useLeftUnchaged=false)
	{
		$menu=get_terms('nav_menu');
		
		$data=array();
		
		if($useNone) $data[0]=array(TLThemeTranslator::__('[None]'));
		if($useGlobal) $data[-1]=array(TLThemeTranslator::__('[Use global settings]'));
		if($useLeftUnchaged) $data[-10]=array(TLThemeTranslator::__('[Left unchaged]'));

		foreach($menu as $singlePost)
			$data[$singlePost->term_id]=array($singlePost->name);
		
		return($data);
	}
		
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>