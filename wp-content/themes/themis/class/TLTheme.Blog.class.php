<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeBlog
{
	/**************************************************************************/
	
	function TLThemeBlog()
	{
		$this->sortPostBlogField=array
		(
			'post_id'		=>	array(TLThemeTranslator::__('Post ID')),
			'post_date'		=>	array(TLThemeTranslator::__('Post date')),
			'title'			=>	array(TLThemeTranslator::__('Post title'))
		);

		$this->sortDirection=array
		(
			'asc'			=>	array(TLThemeTranslator::__('Ascending')),
			'desc'			=>	array(TLThemeTranslator::__('Descending'))
		);		
	}
	
	/**************************************************************************/
	
	function getPost()
	{
		global $parentPost;
		
		$Validation=new TLThemeValidation();
		
		$argument=array();
		
		$s=get_query_var('s');
		$tag=get_query_var('tag');
		
		$year=(int)get_query_var('year');
		$month=(int)get_query_var('monthnum');
		
		$categoryId=(int)get_query_var('cat');
		$authorId=(int)get_query_var('author');
		
		if($Validation->isNotEmpty($s))
		{
			$argument['s']=$s;
			$argument['post_type']=array('post','page');
		}
		if($Validation->isNotEmpty($tag))
			$argument['tag']=$tag;
		if($categoryId>0)
			$argument['cat']=(int)$categoryId;
		if($authorId>0)
			$argument['author']=(int)$authorId;
		if(($year>0) && ($month>0))
		{
			$argument['year']=$year;
			$argument['monthnum']=$month;
		}
		
		if(!($categoryId>0))
		{
			$option=TLThemeOption::getPostMeta($parentPost->post);
			TLThemeHelper::removeUIndex($option,'page_post_category');

			if(is_array($option['page_post_category']))
			{
				if(count($option['page_post_category']))
					$argument['cat']=implode(',',array_map('intval',$option['page_post_category']));
			}
		}
		
		$default=array
		(
			'post_type'			=>	'post',
			'post_status'		=>	'publish',
			'posts_per_page'	=>	(int)get_option('posts_per_page'),
			'paged'				=>	(int)TLThemeHelper::getPageNumber(),
			'orderby'			=>	TLThemeOption::getOption('blog_post_sort_field'),
			'order'				=>	TLThemeOption::getOption('blog_post_sort_direction')		
		);

		$query=new WP_Query(array_merge($default,$argument));
		return($query);
	}
	
	/**************************************************************************/
	
	function createLatestPost($attr)
	{
		$output=null;
		
		$default=array
		(
			'category'					=>	'',
			'css_class'					=>	'',
			'numberposts'				=>	'5',
			'show_read_more'			=>	'1',
			'post_excerpt_word_limit'	=>	'30',
			'post_excerpt_char_limit'	=>	'0'
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$Validation=new TLThemeValidation();
		if(!$Validation->isNumber($attribute['post_excerpt_word_limit'],0,9999)) 
			$attribute['post_excerpt_word_limit']=$default['post_excerpt_word_limit'];
		if(!$Validation->isNumber($attribute['post_excerpt_char_limit'],0,9999)) 
			$attribute['post_excerpt_char_limit']=$default['post_excerpt_char_limit'];
		
		$argument=array
		(
			'post_type'					=>	'post',
			'category_name'				=>	$attribute['category'],
			'posts_per_page'			=>	$attribute['numberposts'],
			'orderby'					=>	'post_date',
			'order'						=>	'desc'
		);
		
		$query=new WP_Query($argument);
		if($query===false) return;		

		$data=new stdClass();
		
		$data->post=array();
		$data->meta=new stdClass();
		
		foreach($query->posts as $value)
		{
			$data->post[$value->ID]=new stdClass();
			
			if((int)$attribute['post_excerpt_char_limit']>0)
			{
				$data->post[$value->ID]->post_excerpt=TLThemeHelper::limitChar($value->post_excerpt,$attribute['post_excerpt_char_limit']);
			}
			elseif((int)$attribute['post_excerpt_word_limit']>0)
			{
				$data->post[$value->ID]->post_excerpt=TLThemeHelper::limitWord($value->post_excerpt,$attribute['post_excerpt_word_limit']);
			}
			else 
			{
				$data->post[$value->ID]->post_excerpt=$value->post_excerpt;
			}
		}
		
		$count=count($query->posts);
			
		if($count)
		{
			$data->query=$query;
			
			$data->meta->css_class=$attribute['css_class'];
			$data->meta->show_read_more=$attribute['show_read_more'];
	
			$Template=new TLThemeTemplate($data,THEME_TEMPLATE_DIR.'latest_post.php');
			return($Template->outputWP(true));			
		}
		
		return($output);
	}

	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>