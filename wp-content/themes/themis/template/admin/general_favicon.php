		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Favicon'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enter URL of favicon.'); ?><br/></span>
				<div class="to-clear-fix">
					<input type="text" name="<?php TLThemeHelper::getFormName('favicon_url'); ?>" id="<?php TLThemeHelper::getFormName('favicon_url'); ?>" class="to-float-left" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['favicon_url']); ?>" />
					<input type="button" name="<?php TLThemeHelper::getFormName('favicon_url_browse'); ?>" id="<?php TLThemeHelper::getFormName('favicon_url_browse'); ?>" class="to-button-browse to-button" value="<?php TLThemeTranslator::esc_attr_e('Browse'); ?>"/>
				</div>
			</li>
		</ul>

		<script type="text/javascript">
			jQuery(document).ready(function($) 
			{
				var optionElement=$('.to').themeOptionElement();
				optionElement.bindBrowseMedia('#<?php TLThemeHelper::getFormName('favicon_url_browse'); ?>');
			});
		</script>