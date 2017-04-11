		<p>
			<label for="<?php echo TLThemeHelper::esc_attr($this->data['option']['title']['id']); ?>"><?php TLThemeTranslator::esc_html_e('Title'); ?>:</label>
			<input class="widefat" id="<?php echo TLThemeHelper::esc_attr($this->data['option']['title']['id']); ?>" name="<?php echo TLThemeHelper::esc_attr($this->data['option']['title']['name']); ?>" type="text" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['title']['value']); ?>" />
		</p>
		<p>
			<label for="<?php echo TLThemeHelper::esc_attr($this->data['option']['name']['id']); ?>"><?php TLThemeTranslator::esc_html_e('Twitter account name'); ?>:</label>
			<input class="widefat" id="<?php echo TLThemeHelper::esc_attr($this->data['option']['name']['id']); ?>" name="<?php echo TLThemeHelper::esc_attr($this->data['option']['name']['name']); ?>" type="text" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['name']['value']); ?>" />
		</p>
		<p>
			<label for="<?php echo TLThemeHelper::esc_attr($this->data['option']['consumer_key']['id']); ?>"><?php TLThemeTranslator::esc_html_e('Consumer key'); ?>:</label>
			<input class="widefat" id="<?php echo TLThemeHelper::esc_attr($this->data['option']['consumer_key']['id']); ?>" name="<?php echo TLThemeHelper::esc_attr($this->data['option']['consumer_key']['name']); ?>" type="text" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['consumer_key']['value']); ?>" />
		</p>
		<p>
			<label for="<?php echo TLThemeHelper::esc_attr($this->data['option']['consumer_key_secret']['id']); ?>"><?php TLThemeTranslator::esc_html_e('Consumer secret'); ?>:</label>
			<input class="widefat" id="<?php echo TLThemeHelper::esc_attr($this->data['option']['consumer_key_secret']['id']); ?>" name="<?php echo TLThemeHelper::esc_attr($this->data['option']['consumer_key_secret']['name']); ?>" type="text" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['consumer_key_secret']['value']); ?>" />
		</p>
		<p>
			<label for="<?php echo TLThemeHelper::esc_attr($this->data['option']['access_token']['id']); ?>"><?php TLThemeTranslator::esc_html_e('Access token'); ?>:</label>
			<input class="widefat" id="<?php echo TLThemeHelper::esc_attr($this->data['option']['access_token']['id']); ?>" name="<?php echo TLThemeHelper::esc_attr($this->data['option']['access_token']['name']); ?>" type="text" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['access_token']['value']); ?>" />
		</p>
		<p>
			<label for="<?php echo TLThemeHelper::esc_attr($this->data['option']['access_token_secret']['id']); ?>"><?php TLThemeTranslator::esc_html_e('Access token secret'); ?>:</label>
			<input class="widefat" id="<?php echo TLThemeHelper::esc_attr($this->data['option']['access_token_secret']['id']); ?>" name="<?php echo TLThemeHelper::esc_attr($this->data['option']['access_token_secret']['name']); ?>" type="text" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['access_token_secret']['value']); ?>" />
		</p>
		<p>
			<label for="<?php echo TLThemeHelper::esc_attr($this->data['option']['count']['id']); ?>"><?php TLThemeTranslator::esc_html_e('Number of tweets to show'); ?>:</label>
			<input class="widefat" id="<?php echo TLThemeHelper::esc_attr($this->data['option']['count']['id']); ?>" name="<?php echo TLThemeHelper::esc_attr($this->data['option']['count']['name']); ?>" type="text" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['count']['value']); ?>" />
		</p>
