<?php 
		$id=TLThemeHelper::createId();
		echo $this->data['html']['start']; 
?>
		<form name="search_form" id="search_form_<?php echo $id; ?>" class="search-form clear-fix" action="<?php echo trailingslashit(get_home_url()); ?>">
			<div class="search-form-text">
				<div><label for="search_form_s_<?php echo $id; ?>"><?php TLThemeTranslator::esc_html_e('Enter phrase','search_form_label_phrase'); ?></label></div>
				<div class="form-field"><input type="text" name="s" id="search_form_s_<?php echo $id; ?>" value=""/></div>
			</div>
			<input type="submit" value="<?php TLThemeTranslator::esc_html_e('Search','search_form_label_search'); ?>"/>
		</form>

		<div class="hidden">
			<script type="text/javascript">
			jQuery(document).ready(function() 
			{
				jQuery('#search_form_<?php echo $id; ?> label').inFieldLabels();
			});
			</script>	
		</div>
<?php 
		echo $this->data['html']['stop']; 
?>