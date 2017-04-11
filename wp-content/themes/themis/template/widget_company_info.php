<?php 
		echo $this->data['html']['start']; 
		echo do_shortcode('['.THEME_CONTEXT.'_company_info type="shortened-data"]');
		echo do_shortcode('['.THEME_CONTEXT.'_social_profiles css_class="margin-top-20"]');
		echo $this->data['html']['stop']; 
?>