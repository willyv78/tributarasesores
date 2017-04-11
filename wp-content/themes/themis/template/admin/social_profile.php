		<ul class="to-form-field-list">
<?php
			foreach($this->data['dictionary']['social'] as $index=>$value)
			{
?>
			<li>
				<h5><?php echo TLThemeHelper::esc_html($value['name']); ?></h5>
				<span class="to-legend"><?php echo TLThemeHelper::esc_html($value['info']); ?>.</span>
				<div>
					<label for="<?php TLThemeHelper::getFormName('social_network_'.$index.'_url'); ?>" class="to-infield"><?php TLThemeTranslator::esc_html_e('Enter URL'); ?></label>
					<input type="text" name="<?php TLThemeHelper::getFormName('social_network_'.$index.'_url'); ?>" id="<?php TLThemeHelper::getFormName('social_network_'.$index.'_url'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['social_network_'.$index.'_url']); ?>"/>
				</div>
				<div>
					<label for="<?php TLThemeHelper::getFormName('social_network_'.$index.'_order'); ?>" class="to-infield"><?php TLThemeTranslator::esc_html_e('Default order'); ?></label>
					<input type="text" name="<?php TLThemeHelper::getFormName('social_network_'.$index.'_order'); ?>" id="<?php TLThemeHelper::getFormName('social_network_'.$index.'_order'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['social_network_'.$index.'_order']); ?>" maxlength="3"/>
				</div>
			</li>
<?php
			}
?>
		</ul>