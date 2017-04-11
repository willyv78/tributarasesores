		<p>
			<label for="<?php echo TLThemeHelper::esc_attr($this->data['option']['title']['id']); ?>"><?php TLThemeTranslator::esc_html_e('Title'); ?>:</label>
			<input class="widefat" id="<?php echo TLThemeHelper::esc_attr($this->data['option']['title']['id']); ?>" name="<?php echo TLThemeHelper::esc_attr($this->data['option']['title']['name']); ?>" type="text" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['title']['value']); ?>" />
		</p>
		<p>
			<label for="<?php echo TLThemeHelper::esc_attr($this->data['option']['count']['id']); ?>"><?php TLThemeTranslator::esc_html_e('Number of posts to show'); ?>:</label>
			<input class="widefat" id="<?php echo TLThemeHelper::esc_attr($this->data['option']['count']['id']); ?>" name="<?php echo TLThemeHelper::esc_attr($this->data['option']['count']['name']); ?>" type="text" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['count']['value']); ?>" />
		</p>
