		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Text colors'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Groups of text colors.'); ?></span>
<?php
					for($i=1;$i<=$this->data['countTextColor'];$i++)
					{
?>
				<div>
					<span class="to-legend-field"><?php echo TLThemeTranslator::esc_html__('Text color of elements in group #').$i; ?></span>
					<input class="to-color-picker" type="text" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_color_group_'.$i]); ?>" id="<?php TLThemeHelper::getFormName('text_color_group_'.$i); ?>" name="<?php TLThemeHelper::getFormName('text_color_group_'.$i); ?>" maxlength="6"/>
				</div>			
<?php
					}
?>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Background colors'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Groups of background colors.'); ?></span>
<?php
					for($i=1;$i<=$this->data['countBackgroundColor'];$i++)
					{
?>
				<div>
					<span class="to-legend-field"><?php echo TLThemeTranslator::esc_html__('Background color of elements in group #').$i; ?></span>
					<input class="to-color-picker" type="text" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['background_color_group_'.$i]); ?>" id="<?php TLThemeHelper::getFormName('background_color_group_'.$i); ?>" name="<?php TLThemeHelper::getFormName('background_color_group_'.$i); ?>" maxlength="6"/>
				</div>			
<?php
					}
?>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Border colors'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Groups of border colors.'); ?></span>
<?php
					for($i=1;$i<=$this->data['countBorderColor'];$i++)
					{
?>
				<div>
					<span class="to-legend-field"><?php echo TLThemeTranslator::esc_html__('Border color of elements in group #').$i; ?></span>
					<input class="to-color-picker" type="text" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['border_color_group_'.$i]); ?>" id="<?php TLThemeHelper::getFormName('border_color_group_'.$i); ?>" name="<?php TLThemeHelper::getFormName('border_color_group_'.$i); ?>" maxlength="6"/>
				</div>			
<?php
					}
?>
			</li>
		</ul>