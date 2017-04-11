		<p>
			<label for="<?php echo TLThemeHelper::esc_attr($this->data['option']['title']['id']); ?>"><?php TLThemeTranslator::esc_html_e('Title'); ?>:</label>
			<input class="widefat" id="<?php echo TLThemeHelper::esc_attr($this->data['option']['title']['id']); ?>" name="<?php echo TLThemeHelper::esc_attr($this->data['option']['title']['name']); ?>" type="text" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['title']['value']); ?>" />
		</p>
		<p>
			<label for="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_id']['id']); ?>"><?php TLThemeTranslator::esc_html_e('Menu'); ?>:</label>
			<select class="widefat" id="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_id']['id']); ?>" name="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_id']['name']); ?>">
<?php
		$Menu=new TLThemeMenu();
		$dictionary=$Menu->getMenuDictionary(false,false);
		
		foreach($dictionary as $index=>$value)
			echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['menu_id']['value'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
			</select>
		</p>