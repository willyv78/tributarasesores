<?php
		/**********************************************************************/
		/**********************************************************************/

		$themeContext='tlt';
		$themeOptionPrefix='tlt_option';

		TIData::set('value','dummy_content_file',array
		(
			array('path'=>get_template_directory().'/dummy_content/content.xml')
		));
		
		TIData::set('value','widget_settings_file',array
		(
			array('path'=>get_template_directory().'/dummy_content/widget_settings.json')
		));
		
		TIData::set('post_id',$themeOptionPrefix.'_blog_search_setting_post_id',array('title'=>'Blog With Right Sidebar','postType'=>'page'));
		TIData::set('post_id',$themeOptionPrefix.'_blog_author_setting_post_id',array('title'=>'Blog With Right Sidebar','postType'=>'page'));
		TIData::set('post_id',$themeOptionPrefix.'_blog_archive_setting_post_id',array('title'=>'Blog With Right Sidebar','postType'=>'page'));
		TIData::set('post_id',$themeOptionPrefix.'_blog_category_setting_post_id',array('title'=>'Blog With Right Sidebar ','postType'=>'page'));
		TIData::set('post_id',$themeOptionPrefix.'_blog_post_content_widget_area',array('title'=>'Sidebar Blog','postType'=>$themeContext.'_widget_area'));
		TIData::set('post_id',$themeOptionPrefix.'_blog_post_footer_widget_area',array('title'=>'Sidebar Footer','postType'=>$themeContext.'_widget_area'));
		TIData::set('term_id',$themeOptionPrefix.'_blog_post_menu_top',array('title'=>'Top menu','taxonomy'=>'nav_menu'));
		
		TIData::set('post_id',$themeOptionPrefix.'_page_404_setting_page_id',array('title'=>'Page Not Found','postType'=>'page'));
		TIData::set('post_id',$themeOptionPrefix.'_page_footer_widget_area',array('title'=>'Sidebar Footer','postType'=>$themeContext.'_widget_area'));
		TIData::set('term_id',$themeOptionPrefix.'_page_menu_top',array('title'=>'Top menu','taxonomy'=>'nav_menu'));
		
		TIData::set('value',$themeOptionPrefix.'_header_logo_link_url',array('value'=>home_url()));
		TIData::set('value',$themeOptionPrefix.'_header_logo_alternate_text',array('value'=>'Mark Anthony - Private Lawyers'));
		TIData::set('path',$themeOptionPrefix.'_header_logo_image_url',array('title'=>'logo','postType'=>'attachment'));
		
		TIData::set('path',$themeOptionPrefix.'_background_image',array('title'=>'background','postType'=>'attachment'));
		
		TIData::set('post_id','page_on_front',array('title'=>'Home','postType'=>'page'));
		
		TIData::set('option','show_on_front','page');
		TIData::set('option','posts_per_page',10);
		TIData::set('option','thread_comments',1);
		TIData::set('option','thread_comments_depth',2);
		TIData::set('option','page_comments',1);
		TIData::set('option','comments_per_page',5);
		TIData::set('option','permalink_structure','/%postname%/');
		
		/**********************************************************************/
		/**********************************************************************/
?>