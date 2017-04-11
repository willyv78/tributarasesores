<?php

/******************************************************************************/
/******************************************************************************/

class TLThemePost
{
	/**************************************************************************/
	
	function TLThemePost()
	{
		$this->theme=new TLTheme();
	}
	
	/**************************************************************************/
	
	function formatPostDate($date,&$day,&$month,&$year)
	{
		$day=null;
		$month=null;
		$year=null;
		
		list($day,$month,$year)=explode(' ',date_i18n('d M y',strtotime($date)));
		$year="'".$year;
	}
	
	/**************************************************************************/
	
	function setPostView($post_id)
	{
		$key=THEME_CONTEXT.'_post_view_count';
		$count=get_post_meta($post_id,$key,true);
		update_post_meta($post_id,$key,(int)$count+1);
	}
	
	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		add_meta_box('post',TLThemeTranslator::__('Options'),array($this,'adminCreateMetaBox'),'post','normal','high');	
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBox() 
	{
		global $post;
		
		$data=array();
		
		$Menu=new TLThemeMenu();
		$WidgetArea=new TLThemeWidgetArea();

		$data['option']=TLThemeOption::getPostMeta($post);
		$data['nonce']=wp_nonce_field('adminSaveMetaBox',THEME_OPTION_PREFIX.'_post_noncename',false,false);

		$data['dictionary']['widgetArea']=$WidgetArea->getWidgetAreaDictionary();
		$data['dictionary']['widgetAreaLocation']=$WidgetArea->getWidgetAreaLocationDictionary(false);
		
		$data['dictionary']['menu']=$Menu->getMenuDictionary(true,true,false);
		
		TLThemeHelper::setDeafultOption($data['option'],'post_content_widget_area',-1);
		TLThemeHelper::setDeafultOption($data['option'],'post_content_widget_area_location',-1);
		TLThemeHelper::setDeafultOption($data['option'],'post_footer_widget_area',-1);
		TLThemeHelper::setDeafultOption($data['option'],'post_menu_top',-1);
		
		TLThemeHelper::setDeafultOption($data['option'],'post_header_visible',-1);
		TLThemeHelper::setDeafultOption($data['option'],'post_tag_visible',-1);
		TLThemeHelper::setDeafultOption($data['option'],'post_author_visible',-1);
		TLThemeHelper::setDeafultOption($data['option'],'post_category_visible',-1);
		TLThemeHelper::setDeafultOption($data['option'],'post_comment_count_visible',-1);
		
		$Template=new TLThemeTemplate($data,THEME_PATH_TEMPLATE.'admin/post_meta_box.php');
		echo $Template->output();		
	}
	
	/**************************************************************************/
	
	function adminSaveMetaBox($post_id) 
	{
		if($_POST)
		{
			if(TLThemeHelper::checkSavePost($post_id,THEME_OPTION_PREFIX.'_post_noncename','adminSaveMetaBox')===false) return(false);
			
			$option=TLThemeHelper::getPostOption('post');
			update_post_meta($post_id,THEME_OPTION_PREFIX,$option);
		}
	}
	
	/**************************************************************************/
	
	function bulk($data)
	{
		if(!count($data)) return;
		
		$posts=get_posts(array('numberposts'=>-1,'post_type'=>'post','suppress_filters'=>false));
		
		foreach($posts as $post)
		{
			$option=TLThemeOption::getPostMeta($post);
			$option=array_merge((array)$option,$data);
			update_post_meta($post->ID,THEME_OPTION_PREFIX,$option);
		}
	}
	
	/**************************************************************************/
	
	function getPost()
	{
		$data=new stdClass();

		$categoryId=(int)get_query_var('cat');

		if(is_tag()) 
		{
			$data->post=get_post(TLThemeOption::getOption('blog_search_setting_post_id'));
			$data->post->post_title=sprintf(TLThemeTranslator::__('Search result for phrase %s','search_form_header'),TLThemeHelper::esc_html(get_query_var('tag')));
		}
		elseif(is_author())
		{
			$author=get_userdata(get_query_var('author'));
			$data->post=get_post(TLThemeOption::getOption('blog_author_setting_post_id'));
			$data->post->post_title=sprintf(TLThemeTranslator::__('All posts from %s','blog_posts_from_the_author'),TLThemeHelper::esc_html($author->data->user_nicename));			
		}
		elseif(is_category($categoryId)) 
		{			
			$category=get_category($categoryId);
			$data->post=get_post(TLThemeOption::getOption('blog_category_setting_post_id'));	
			$data->post->post_title=TLThemeHelper::esc_html($category->name);	
		}
		elseif(is_archive()) 
		{
			$data->post=get_post(TLThemeOption::getOption('blog_archive_setting_post_id'));
			$data->post->post_title=single_month_title(' ',false);
		}
		elseif(is_search())
		{
			$data->post=get_post(TLThemeOption::getOption('blog_search_setting_post_id'));
			$data->post->post_title=sprintf(TLThemeTranslator::__('Search result for phrase %s','search_form_header'),TLThemeHelper::esc_html(get_query_var('s')));
		}
		elseif(is_404())
		{
			$data->post=get_post(TLThemeOption::getOption('page_404_setting_page_id'));
			$data->post->post_title=$data->post->post_title;
		}
		else return(false);

		return($data);
	}
	
	/**************************************************************************/
	
	function wpTitleFilter($title)
	{
		$Validation=new TLThemeValidation();
		
		if(($data=$this->getPost())!==false) 
		{
			if(!$Validation->isEmpty($title)) $title=' | ';
			$title.=$data->post->post_title;
		}
		return($title);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>