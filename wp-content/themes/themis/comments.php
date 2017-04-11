<?php
		global $post;
		if(comments_open())
		{	
			$count=get_comments_number($post->ID);
			if($count>0)
			{
?>
		<div id="comments-number">
			<span class="number"><?php echo $count; ?></span>
			<span class="text"><?php TLThemeTranslator::_e('Comments','blog_comments'); ?></span>
		</div>
<?php
			}
?>
		<div id="comments_list" class="clear-fix">

			<ul class="list-0 clear-fix">
<?php
				$Comment=new TLThemeComment();
				$Validation=new TLThemeValidation();

				wp_list_comments(array('avatar_size'=>70,'page'=>$Comment->page,'per_page'=>$Comment->comments_per_page,'callback'=>array($Comment,'createComment')));

				$pagination=paginate_comments_links(array
				(  
					'base'				=>	'#cpage-%#%',  
					'format'			=>	'',
					'add_fragment'		=>	'',
					'current'			=>	$Comment->page,
					'next_text'			=>	TLThemeTranslator::__('Next','pagination_label_next_button'),
					'prev_text'			=>	TLThemeTranslator::__('Previous','pagination_label_previous_button'),
					'echo'				=>	false
				));  
?>
			</ul>
<?php
				if($Validation->isNotEmpty($pagination))
				{
?>
			<div class="comment-pagination clear-fix"><?php echo $pagination; ?></div>
<?php
				}
?>
		</div>
<?php
		}
?>