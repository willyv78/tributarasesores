<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeGalleryPost
{
	
	/**************************************************************************/

	function TLThemeGalleryPost()
	{
		$Image=new TLThemeImage();
		$this->galleryImageSize=$Image->image;
		
		unset($this->galleryImageSize['image-100-100']);
		
		$this->galleryLayout=array
		(
			0	=>	array(TLThemeTranslator::__('One column with image of 100% page width'),'100'),
			1	=>	array(TLThemeTranslator::__('One column with image of 66% page width'),'100'),
			2	=>	array(TLThemeTranslator::__('Two columns with images of 50% page width each'),'50x50'),
			3	=>	array(TLThemeTranslator::__('Three columns with images of 33% page width each'),'33x33x33'),
			4	=>	array(TLThemeTranslator::__('Fourth columns with images of 25% page width each'),'25x25x25x25'),
			5	=>	array(TLThemeTranslator::__('Five columns with images of 20% page width each'),'20x20x20x20x20')
		);

		$this->actionOpen=array
		(
			'open-image'				=>	array(TLThemeTranslator::__('Open image in lightbox')),
			'open-page'					=>	array(TLThemeTranslator::__('Open page in the new window')),
			'open-page-self'			=>	array(TLThemeTranslator::__('Open page in the same window')),
			'open-video-vimeo'			=>	array(TLThemeTranslator::__('Open video from Vimeo in lighbox')),
			'open-video-youtube'		=>	array(TLThemeTranslator::__('Open video from Youtube in lighbox')),
			'open-video-metacafe'		=>	array(TLThemeTranslator::__('Open video from Metacafe in lighbox')),
			'open-video-dailymotion'	=>	array(TLThemeTranslator::__('Open video from Dailymotion in lighbox'))
		);
	}
	
	/**************************************************************************/
	
	function adminInit()
	{
		register_post_type
		(
			THEME_CONTEXT.'_gallery',
			array
			(  
				'labels'							=> array
				(
					'name'							=>	TLThemeTranslator::__('Gallery'),
					'singular_name'					=>	TLThemeTranslator::__('Gallery Item'),
					'add_new'						=>	TLThemeTranslator::__('Add New'),
					'add_new_item'					=>	TLThemeTranslator::__('Add New Gallery'),
					'edit_item'						=>	TLThemeTranslator::__('Edit Gallery Item'),
					'new_item'						=>	TLThemeTranslator::__('New Gallery Item'),
					'all_items'						=>	TLThemeTranslator::__('All Gallery Items'),
					'view_item'						=>	TLThemeTranslator::__('View Gallery Item'),
					'search_items'					=>	TLThemeTranslator::__('Search Gallery Item'),
					'not_found'						=>	TLThemeTranslator::__('No Gallery items found'),
					'not_found_in_trash'			=>	TLThemeTranslator::__('No Gallery items found in Trash'), 
					'parent_item_colon'				=>	'',
					'menu_name'						=>	TLThemeTranslator::__('Gallery')
				), 
				'public'							=>	false,  
				'show_ui'							=>	true,  
				'capability_type'					=>	'post',  
				'menu_position'						=>	25,
				'hierarchical'						=>	false,  
				'rewrite'							=>	true,  
				'supports'							=>	array('title','excerpt','page-attributes','thumbnail')  
			)				
		);  
		
		register_taxonomy
		(
			THEME_CONTEXT.'_gallery_category',
			array(THEME_CONTEXT.'_gallery'),
			array
			(
				'label'								=>	TLThemeTranslator::__('Categories'),
				'labels'							=>	array
				(
					'name'							=>	TLThemeTranslator::__('Gallery categories'),		 
					'singular_name'					=>	TLThemeTranslator::__('Gallery category'),		 
					'menu_name'						=>	TLThemeTranslator::__('Categories'),	
					'all_items'						=>	TLThemeTranslator::__('All Categories'),	
					'edit_item'						=>	TLThemeTranslator::__('Edit Category'),	
					'view_item'						=>	TLThemeTranslator::__('View Category'),	
					'update_item'					=>	TLThemeTranslator::__('Update Category'),	
					'add_new_item'					=>	TLThemeTranslator::__('Add New Category'),	
					'new_item_name'					=>	TLThemeTranslator::__('New Category Name'),	
					'parent_item'					=>	TLThemeTranslator::__('Parent Category'),	
					'parent_item_colon'				=>	TLThemeTranslator::__('Parent Category:'),	
					'search_items'					=>	TLThemeTranslator::__('Search Categories'),	
					'popular_items'					=>	TLThemeTranslator::__('Popular Categories'),	
					'separate_items_with_commas'	=>	TLThemeTranslator::__('Separate categories with commas'),	
					'add_or_remove_items'			=>	TLThemeTranslator::__('Add or remove categories'),	
					'choose_from_most_used'			=>	TLThemeTranslator::__('Choose from the most used categories')
				)
			)
		);
	}
	
	/**************************************************************************/
	
	function adminManageEditColumn($column)
	{
		$column=array
		(  
			'cb'			=> '<input type="checkbox"/>',
			'image'			=> TLThemeTranslator::__('Image'),
			'title'			=> TLThemeTranslator::__('Title'),   
			'date'			=> TLThemeTranslator::__('Date')
		);    

		return $column;  
	}  
	
	/**************************************************************************/
	
	function adminManageEditSortableColumn($column)
	{
		$column['image']='title';
		
		return($column);
	}
	
	/**************************************************************************/

	function adminManageColumn($column)
	{
		global $post;
		switch($column)  
		{
			case 'image':   
				echo '<a href="'.get_edit_post_link($post->ID).'">'.get_the_post_thumbnail($post->ID,'image-225-200').'</a>'; 
			break;
		}  
	}
	
	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		add_meta_box(THEME_CONTEXT.'_gallery',TLThemeTranslator::__('Options'),array($this,'adminCreateMetaBox'),THEME_CONTEXT.'_gallery','normal','low');	
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBox() 
	{
		global $post;
		
		$data=array();

		$data['option']=TLThemeOption::getPostMeta($post);;
		$data['nonce']=wp_nonce_field('adminSaveMetaBox',THEME_OPTION_PREFIX.'_gallery_noncename',false,false);
		
		$data['postId']=$post->ID;
		
		$data['dictionary']['actionOpen']=$this->actionOpen;
		$data['dictionary']['imageSize']=$this->galleryImageSize;
		
		TLThemeHelper::setDeafultOption($data['option'],'gallery_action_open',null);
		
		TLThemeHelper::setDeafultOption($data['option'],'gallery_url_page',null);
		TLThemeHelper::setDeafultOption($data['option'],'gallery_url_video_vimeo',null);
		TLThemeHelper::setDeafultOption($data['option'],'gallery_url_video_youtube',null);
		TLThemeHelper::setDeafultOption($data['option'],'gallery_url_video_metacafe',null);
		TLThemeHelper::setDeafultOption($data['option'],'gallery_url_video_dailymotion',null);
		
		$Template=new TLThemeTemplate($data,THEME_PATH_TEMPLATE.'admin/gallery_meta_box.php');
		echo $Template->output();	
	}
	
	/**************************************************************************/
	
	function adminSaveMetaBox($post_id) 
	{
		if($_POST)
		{
			if(TLThemeHelper::checkSavePost($post_id,THEME_OPTION_PREFIX.'_gallery_noncename','adminSaveMetaBox')===false) return(false);
		
			$option=TLThemeHelper::getPostOption('gallery');
			update_post_meta($post_id,THEME_OPTION_PREFIX,$option);
		}		
	}
	
	/**************************************************************************/
	
	function createGallery($attr)
	{
		$default=array
		(
			'layout'					=>	TLThemeOption::getOption('gallery_layout_default'),
			'filter'					=>	TLThemeOption::getOption('gallery_filter_menu_show_default'),
			'selected'					=>	'0',
			'category'					=>	'',
			'css_class'					=>	'',
			'show_info_box'				=>	TLThemeOption::getOption('gallery_info_box_show_default'),
			'show_all_items_button'		=>	'1'
		);

		$attribute=shortcode_atts($default,$attr);
		
		if(!isset($this->galleryLayout[$attribute['layout']])) 
			$attribute['layout']=$default['layout'];
		if(!in_array($attribute['filter'],array(0,1))) 
			$attribute['filter']=$default['filter'];
		if(!in_array($attribute['show_info_box'],array(0,1))) 
			$attribute['show_info_box']=$default['show_info_box'];
		if(!in_array($attribute['show_all_items_button'],array(0,1))) 
			$attribute['show_all_items_button']=$default['show_all_items_button'];
		
		$argument=array
		(
			'post_type'							=>	THEME_CONTEXT.'_gallery',
			THEME_CONTEXT.'_gallery_category'	=>	$attribute['category'],
			'posts_per_page'					=>	-1,
			'orderby'							=>	'menu_order',
			'order'								=>	'asc'
		);
		
		$query=new WP_Query($argument);
		if($query===false) return;		
		
		$output=null;
		$data=new stdClass();
		$data->meta=new stdClass();
		
		$data->post=array();
		$data->exclude=array();
		$data->category=array();
		
		$id=TLThemeHelper::createId();

		$Layout=new TLThemeLayout();
		$Validation=new TLThemeValidation();

		foreach($query->posts as $value)
		{
			$full=wp_get_attachment_image_src(get_post_thumbnail_id($value->ID),'full');
			$thumbnail=wp_get_attachment_image_src(get_post_thumbnail_id($value->ID),in_array($attribute['layout'],array(0,1)) ? 'image-990-300' : 'image-480-240');
			
			if(($thumbnail===false) || ($full===false))
			{
				$data->exclude[]=$value->ID;
				continue;
			}
			
			$url=null;
			$class=null;
			$option=TLThemeOption::getPostMeta($value);
			
			$this->getImageMeta($option,$full,$url,$class);

			$data->post[$value->ID]=new stdClass();
			
			$data->post[$value->ID]->option=$option;
			$data->post[$value->ID]->thumbnail=$thumbnail[0];
			
			$data->post[$value->ID]->url=$url;
			$data->post[$value->ID]->class=$class;
			
			$data->post[$value->ID]->rel=null;
	
			if($option['gallery_action_open']=='open-image') 
				$data->post[$value->ID]->rel='gallery_'.$id;
			
			$data->post[$value->ID]->post_excerpt_limit=$this->getImageExcerptLimit($value->post_excerpt);
			
			$data->post[$value->ID]->show_info_box=(bool)$attribute['show_info_box'] && ($Validation->isNotEmpty($value->post_title) || ($Validation->isNotEmpty($value->post_excerpt_limit)));
			
			$category=get_the_terms($value->ID,THEME_CONTEXT.'_gallery_category');
			
			if(is_array($category))
			{
				$data->post[$value->ID]->categoryFilter='';
				
				foreach($category as $categoryIndex=>$categoryValue)
				{
					$data->post[$value->ID]->category[]=$categoryIndex;
					$data->post[$value->ID]->categoryFilter.=' filter-'.$categoryIndex;
					$data->category[$categoryIndex]=array($category[$categoryIndex]->name);
				}
			}
		}

		$count=count($query->posts);
		
		if(($count) && ($count!=count($data->exclude)))
		{
			$data->query=$query;
			
			$data->meta->id=$id;
			
			$data->meta->layout=$this->galleryLayout[$attribute['layout']][1];
			
			$data->meta->layout_shortcode=$attribute['layout'];
			
			$data->meta->css_class=$attribute['css_class'];
			
			$data->meta->filter=(int)($attribute['filter']==1 && count($data->category));
			
			$data->meta->show_all_items_button=(int)$attribute['show_all_items_button'];
			
			$data->meta->selected=(int)$attribute['selected'];
			
			$data->meta->column_count=(int)$Layout->getLayoutCoulumnCount($data->meta->layout);

			$data->meta->is_rtl=is_rtl();
			
			$Template=new TLThemeTemplate($data,THEME_TEMPLATE_DIR.'gallery.php');
			$output=$Template->outputWP(true);
		}

		return($output);			
	}
	
	/**************************************************************************/
	
	function createImage($attr)
	{
		$Image=new TLThemeImage();
		
		$default=array
		(
			'id'				=>	'0',
			'image_type'		=>	'image-480x240',
			'show_info_box'		=>	'1',
			'css_class'			=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		if(!$Image->itemExist($attribute['image_type'])) $attribute['image_type']=$default['image_type'];
		if(!in_array($attribute['show_info_box'],array(0,1))) $attribute['show_info_box']=$default['show_info_box'];
		
		$post=get_post($attribute['id']);
		
		if(is_null($post)) return(null);
		if($post->post_type!=THEME_CONTEXT.'_gallery') return(null);
		
		$option=TLThemeOption::getPostMeta($attribute['id']);;
		
		$full=wp_get_attachment_image_src(get_post_thumbnail_id($attribute['id']),'full');
		$thumbnail=wp_get_attachment_image_src(get_post_thumbnail_id($attribute['id']),$attribute['image_type']);
			
		if(($thumbnail===false) || ($full===false)) return(null);
		
		$this->getImageMeta($option,$full,$url,$class);
		
		$data=new stdClass();
		
		$data->meta=new stdClass();
		
		$data->post=$post;
		$data->option=$option;
		
		$data->meta->url=$url;
		$data->meta->class=$class;
		$data->meta->thumbnail=$thumbnail[0];
		$data->meta->show_info_box=$attribute['show_info_box'];
		$data->meta->post_excerpt_limit=$this->getImageExcerptLimit($post->post_excerpt);
		
		$data->meta->css_class=$attribute['css_class'];
		$data->meta->image_type=$attribute['image_type'];

		$Template=new TLThemeTemplate($data,THEME_TEMPLATE_DIR.'single_image.php');
		$output=$Template->outputWP(true);

		return($output);		
	}
	
	/**************************************************************************/
	
	function getImageExcerptLimit($excerpt)
	{
		$Validation=new TLThemeValidation();
		
		$excerptLimit=null;
		
		if($Validation->isNotEmpty($excerpt))
		{
			$excerptLimit=mb_substr($excerpt,0,TLThemeOption::getOption('gallery_excerpt_limit'));
			if(mb_strlen($excerpt)>TLThemeOption::getOption('gallery_excerpt_limit')) 
				$excerptLimit.=TLThemeOption::getOption('gallery_excerpt_limit_character');
		}		
		
		return($excerptLimit);
	}
	
	/**************************************************************************/
	
	function getImageMeta($option,$image,&$url,&$class)
	{
		$url=null;
		$class=null;

		switch($option['gallery_action_open'])
		{
			case 'open-image':

				$class='overlay-image theme-fancybox-image';
				$url=$image[0];

			break;
			case 'open-video-vimeo':

				$class='overlay-video theme-fancybox-video';
				$url=$option['gallery_url_video_vimeo'];

			break;
			case 'open-video-youtube':

				$class='overlay-video theme-fancybox-video';
				$url=$option['gallery_url_video_youtube'];

			break;	
			case 'open-video-dailymotion':

				$class='overlay-video theme-fancybox-video';
				$url=$option['gallery_url_video_dailymotion'];

			break;
			case 'open-video-metacafe':

				$class='overlay-video theme-fancybox-video';
				$url=$option['gallery_url_video_metacafe'];

			break;
			case 'open-page':

				$class='overlay-url target-blank';
				$url=$option['gallery_url_page'];

			break;	
			case 'open-page-self':

				$class='overlay-url';
				$url=$option['gallery_url_page'];

			break;		
		}

		$Validation=new TLThemeValidation();
		if($Validation->isEmpty($url)) $url='#';		
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>