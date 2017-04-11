		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Import Google fonts'); ?></h5>
				<span class="to-legend">
					<?php TLThemeTranslator::esc_html_e('Click to refresh list of Google fonts.'); ?><br/>
					<?php TLThemeTranslator::esc_html_e('These data are updated automatically every 12 hours. Use this option only when fonts aren\'t visible in theme.'); ?>
				</span>
				<input type="button" name="<?php TLThemeHelper::getFormName('to_import_google_font'); ?>" id="<?php TLThemeHelper::getFormName('to_import_google_font'); ?>" class="to-button margin-0" value="<?php TLThemeTranslator::esc_attr_e('Import'); ?>"/>
			</li>
		</ul>

		<script type="text/javascript">
			jQuery(document).ready(function($) 
			{
				jQuery('#<?php TLThemeHelper::getFormName('to_import_google_font'); ?>').bind('click',function(e) 
				{
					e.preventDefault();
					jQuery('#action').val('theme_admin_option_page_import_google_font');
					jQuery('#to_form').submit();
					jQuery('#action').val('theme_admin_option_page_save');
				});
			});
		</script>