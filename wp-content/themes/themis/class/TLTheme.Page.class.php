<?php

/******************************************************************************/
/******************************************************************************/

class TLThemePage
{
	/**************************************************************************/

	function TLThemePage()
	{
		$this->menuIcon=array
		(
			'addressbook'		=>	array(TLThemeTranslator::__('Addressbook')),
			'agenda'			=>	array(TLThemeTranslator::__('Agenda')),
			'balance'			=>	array(TLThemeTranslator::__('Balance')),
			'binders'			=>	array(TLThemeTranslator::__('Binders')),
			'book'				=>	array(TLThemeTranslator::__('Book')),
			'box'				=>	array(TLThemeTranslator::__('Box')),
			'briefcase'			=>	array(TLThemeTranslator::__('Briefcase')),
			'calc'				=>	array(TLThemeTranslator::__('Calc')),
			'calendar'			=>	array(TLThemeTranslator::__('Calendar')),
			'cart'				=>	array(TLThemeTranslator::__('Cart')),
			'cash'				=>	array(TLThemeTranslator::__('Cash')),
			'chart'				=>	array(TLThemeTranslator::__('Chart')),
			'chat'				=>	array(TLThemeTranslator::__('Chat')),
			'computer'			=>	array(TLThemeTranslator::__('Computer')),
			'contract'			=>	array(TLThemeTranslator::__('Contract')),
			'couple'			=>	array(TLThemeTranslator::__('Couple')),
			'court'				=>	array(TLThemeTranslator::__('Court')),
			'database'			=>	array(TLThemeTranslator::__('Database')),
			'document'			=>	array(TLThemeTranslator::__('Document')),
			'envelope'			=>	array(TLThemeTranslator::__('Envelope')),
			'family'			=>	array(TLThemeTranslator::__('Family')),
			'faq'				=>	array(TLThemeTranslator::__('Faq')),
			'folder'			=>	array(TLThemeTranslator::__('Folder')),
			'gavel'				=>	array(TLThemeTranslator::__('Gavel')),
			'home'				=>	array(TLThemeTranslator::__('Home')),
			'hourglass'			=>	array(TLThemeTranslator::__('Hourglass')),
			'id'				=>	array(TLThemeTranslator::__('Id')),
			'images'			=>	array(TLThemeTranslator::__('Images')),
			'info'				=>	array(TLThemeTranslator::__('Info')),
			'laptop'			=>	array(TLThemeTranslator::__('Laptop')),
			'map'				=>	array(TLThemeTranslator::__('Map')),
			'mobile'			=>	array(TLThemeTranslator::__('Mobile')),
			'movie'				=>	array(TLThemeTranslator::__('Movie')),
			'pen'				=>	array(TLThemeTranslator::__('Pen')),
			'phone'				=>	array(TLThemeTranslator::__('Phone')),
			'script'			=>	array(TLThemeTranslator::__('Script')),
			'shield'			=>	array(TLThemeTranslator::__('Shield')),
			'tags'				=>	array(TLThemeTranslator::__('Tags')),
			'thumb'				=>	array(TLThemeTranslator::__('Thumb')),
			'wallet'			=>	array(TLThemeTranslator::__('Wallet'))
		);

		$this->menuBoxImage=array
		(
			'business'				=>	array(TLThemeTranslator::__('Business')),
			'fountain_pen'			=>	array(TLThemeTranslator::__('Fountain pen')),
			'gavel'					=>	array(TLThemeTranslator::__('Gavel')),
			'handshake'				=>	array(TLThemeTranslator::__('Handshake')),
			'idea'					=>	array(TLThemeTranslator::__('Idea')),
			'man_with_briefcase'	=>	array(TLThemeTranslator::__('Man with briefcase')),
			'mobile'				=>	array(TLThemeTranslator::__('Mobile')),
			'suit_man_1'			=>	array(TLThemeTranslator::__('Suit man #1')),
			'suit_man_2'			=>	array(TLThemeTranslator::__('Suit man #2')),
			'wristwatch'			=>	array(TLThemeTranslator::__('Wristwatch'))
		);
	}
	
	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		add_meta_box('page',TLThemeTranslator::__('Options'),array($this,'adminCreateMetaBox'),'page','normal','high');	
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBox()
	{
		global $post;
		
		$Theme=new TLTheme();
		$Menu=new TLThemeMenu();
		$WidgetArea=new TLThemeWidgetArea();
		
		$data=array();
	
		$data['option']=TLThemeOption::getPostMeta($post);
		$data['nonce']=wp_nonce_field('adminSaveMetaBox',THEME_OPTION_PREFIX.'_page_noncename',false,false);
		
		$data['dictionary']['menuIcon']=$this->menuIcon;
		$data['dictionary']['menuBoxImage']=$this->menuBoxImage;
		
		$data['dictionary']['windowTarget']=$Theme->windowTarget;
		
		$data['dictionary']['widgetArea']=$WidgetArea->getWidgetAreaDictionary();
		$data['dictionary']['widgetAreaLocation']=$WidgetArea->getWidgetAreaLocationDictionary(false);
		
		$data['dictionary']['menu']=$Menu->getMenuDictionary(true,true,false);
		
		$data['dictionary']['postCategory']=TLThemeHelper::createTermDictionary('category',array(),array(),array(),'id');
		
		TLThemeHelper::setDeafultOption($data['option'],'page_header_visible',-1);
		TLThemeHelper::setDeafultOption($data['option'],'page_menu_top',-1);
		TLThemeHelper::setDeafultOption($data['option'],'page_menu_header',null);
		TLThemeHelper::setDeafultOption($data['option'],'page_menu_subheader',null);
		TLThemeHelper::setDeafultOption($data['option'],'page_menu_box_visible',0);
		TLThemeHelper::setDeafultOption($data['option'],'page_menu_box_image_defined',null);
		TLThemeHelper::setDeafultOption($data['option'],'page_menu_box_image_custom',null);
		TLThemeHelper::setDeafultOption($data['option'],'page_menu_icon',null);
	
		TLThemeHelper::setDeafultOption($data['option'],'page_content_widget_area',-1);
		TLThemeHelper::setDeafultOption($data['option'],'page_content_widget_area_location',-1);
		TLThemeHelper::setDeafultOption($data['option'],'page_footer_widget_area',-1);
		
		TLThemeHelper::setDeafultOption($data['option'],'page_url',null);
		TLThemeHelper::setDeafultOption($data['option'],'page_url_window_target','_self');
		
		TLThemeHelper::setDeafultOption($data['option'],'page_post_category',array());
		
		$Template=new TLThemeTemplate($data,THEME_PATH_TEMPLATE.'admin/page_meta_box.php');
		echo $Template->output();			
	}
	
	/**************************************************************************/
	
	function adminSaveMetaBox($post_id)
	{
		if($_POST)
		{
			if(TLThemeHelper::checkSavePost($post_id,THEME_OPTION_PREFIX.'_page_noncename','adminSaveMetaBox')===false) return(false);

			$option=TLThemeHelper::getPostOption('page');
			update_post_meta($post_id,THEME_OPTION_PREFIX,$option);
		}		
	}
	
	/**************************************************************************/

	function getImageClass($sidebar)
	{
		if($sidebar==0) return('image-990-300');
		else return('image-650-240');
	}
	
	/**************************************************************************/
	
	function bulk($data)
	{
		if(!count($data)) return;
		
		$posts=get_posts(array('numberposts'=>-1,'post_type'=>'page','suppress_filters'=>false));
		
		foreach($posts as $post)
		{
			$option=TLThemeOption::getPostMeta($post);
			$option=array_merge((array)$option,$data);
			update_post_meta($post->ID,THEME_OPTION_PREFIX,$option);
		}
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>