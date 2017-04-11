		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Default theme options'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Click to restore default theme options.'); ?></span>
				<input type="button" name="<?php TLThemeHelper::getFormName('theme_option_restore'); ?>" id="<?php TLThemeHelper::getFormName('theme_option_restore'); ?>" class="to-button margin-0" value="<?php TLThemeTranslator::esc_attr_e('Restore'); ?>"/>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Export theme options'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Click to export theme options to file.'); ?></span>
				<input type="button" name="<?php TLThemeHelper::getFormName('theme_option_export'); ?>" id="<?php TLThemeHelper::getFormName('theme_option_export'); ?>" class="to-button margin-0" value="<?php TLThemeTranslator::esc_attr_e('Export'); ?>"/>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Import theme options'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Click to import theme options from selected file.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('theme_option_import_url'); ?>" id="<?php TLThemeHelper::getFormName('theme_option_import_url'); ?>" class="to-float-left" value=""/>
					<input type="button" name="<?php TLThemeHelper::getFormName('theme_option_import_browse'); ?>" id="<?php TLThemeHelper::getFormName('theme_option_import_browse'); ?>" class="to-button-browse to-button" value="<?php TLThemeTranslator::esc_attr_e('Browse'); ?>"/>
					<input type="button" name="<?php TLThemeHelper::getFormName('theme_option_import'); ?>" id="<?php TLThemeHelper::getFormName('theme_option_import'); ?>" class="to-button margin-0" value="<?php TLThemeTranslator::esc_attr_e('Import'); ?>"/>
				</div>
			</li>
		</ul>

		<script type="text/javascript">
			jQuery(document).ready(function($) 
			{
				jQuery('#<?php TLThemeHelper::getFormName('theme_option_restore'); ?>').bind('click',function(e) 
				{
					if(confirm('<?php TLThemeTranslator::_e('Are you sure that you want to restore all theme options?'); ?>'))
					{
						e.preventDefault();
						jQuery('#action').val('theme_admin_option_page_restore');
						jQuery('#to_form').submit();
						jQuery('#action').val('theme_admin_option_page_save');
					}
				});

				jQuery('#<?php TLThemeHelper::getFormName('theme_option_export'); ?>').bind('click',function(e) 
				{
					e.preventDefault();
					window.location.href='<?php echo THEME_URL; ?>export_theme_option.php';
				});

				jQuery('#<?php TLThemeHelper::getFormName('theme_option_import'); ?>').bind('click',function(e) 
				{
					if(confirm('<?php TLThemeTranslator::_e('Are you sure that you want to import theme options?'); ?>'))
					{
						e.preventDefault();
						jQuery('#action').val('theme_admin_option_page_import');
						jQuery('#to_form').submit();
						jQuery('#action').val('theme_admin_option_page_save');
					}
				});

				var optionElement=$('.to').themeOptionElement();
				optionElement.bindBrowseMedia('#<?php TLThemeHelper::getFormName('theme_option_import_browse'); ?>');
			});
		</script>

