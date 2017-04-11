<?php
		if(is_404())
		{
			global $parentPost;
			echo apply_filters('the_content',do_shortcode($parentPost->post->post_content));
		}
		else
		{
			if(have_posts())
			{
				while(have_posts())
				{
					the_post();
					echo apply_filters('the_content',do_shortcode($post->post_content));
				}
			}
		}
?>