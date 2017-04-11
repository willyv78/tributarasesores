		<?php echo $this->data['nonce']; ?>

		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Icon'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Select icon.'); ?></span>
					<div class="to-clear-fix">
						<select name="<?php TLThemeHelper::getFormName('feature_icon'); ?>" id="<?php TLThemeHelper::getFormName('feature_icon'); ?>">
<?php
							foreach($this->data['dictionary']['icon'] as $index=>$value)
								echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['feature_icon'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('URL'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enter URL of feature.'); ?></span>
					<div>
						<input type="text" name="<?php TLThemeHelper::getFormName('feature_url'); ?>" id="<?php TLThemeHelper::getFormName('feature_url'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['feature_url']); ?>" maxlength="255" />
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Target of a URL'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Target of a URL.'); ?></span>
					<div class="to-clear-fix">
						<select name="<?php TLThemeHelper::getFormName('feature_url_window_target'); ?>" id="<?php TLThemeHelper::getFormName('feature_url_window_target'); ?>">
<?php
							foreach($this->data['dictionary']['windowTarget'] as $index=>$value)
								echo '<option value="'.TLThemeHelper::esc_attr($index).'"'.(TLThemeHelper::selectedIf($this->data['option']['feature_url_window_target'],$index,false)).'>'. TLThemeHelper::esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>
			</ul>
		</div>

		<script type="text/javascript">
			jQuery(document).ready(function($)
			{	
				$('.to').themeOptionElement({init:true});
			});
		</script>