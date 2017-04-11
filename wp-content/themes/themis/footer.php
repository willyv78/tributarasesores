<?php
		global $parentPost;

		$WidgetArea=new TLThemeWidgetArea();
		$Validation=new TLThemeValidation();

		if(TLThemeOption::getOption('footer_enable')==1)
		{
			if(TLThemeOption::getOption('footer_top_enable')==1)
			{
?>
					<div class="footer clear-fix">
						
						<div class="footer-inner">
<?php 
				$widgetAreaData=$WidgetArea->getWidgetAreaByPost($parentPost->post,false,true);
				$WidgetArea->create($widgetAreaData);
?>
						</div>
					
					</div>	
<?php
			}
		}
?>
				</div>
<?php
		if((TLThemeOption::getOption('footer_enable')==1) && (TLThemeOption::getOption('footer_bottom_enable')==1))
		{
			$content=TLThemeOption::getOption('footer_bottom_content');
			if($Validation->isNotEmpty($content))
			{
?>
				<div class="footer-bottom clear-fix">
					<div class="main box-center"><div class="paragraph"><?php echo do_shortcode($content); ?></div></div>
				</div>
<?php
			}
		}

		wp_footer(); 

		if($Validation->isNotEmpty(TLThemeOption::getOption('google_analytics_code')))
		{
?>
				<script type="text/javascript">
					<?php echo TLThemeOption::getOption('google_analytics_code'); ?>
				</script>
<?php
		}

		if(TLThemeOption::getOption('recaptcha_enable')==1)
		{
?>
				<div id="recaptcha-source">
					
					<script type="text/javascript">
						var RecaptchaOptions={theme:'<?php echo TLThemeOption::getOption('recaptcha_skin'); ?>'};
					</script>
<?php 
			echo recaptcha_get_html(TLThemeOption::getOption('recaptcha_public_key')); 
?>
				</div>
<?php
		}
?>
			</body>
			
		</html>
<?php 
		ob_end_flush(); 
?>