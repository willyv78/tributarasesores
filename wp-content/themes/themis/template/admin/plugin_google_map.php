		<ul class="to-form-field-list">

			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Google Map enable'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable or disable google map.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('google_map_enable'); ?>" id="<?php TLThemeHelper::getFormName('google_map_enable_1'); ?>" value="1" <?php echo ($this->data['option']['google_map_enable']==1 ? 'checked' : ''); ?>/>
					<label for="<?php echo THEME_OPTION_PREFIX.'_google_map_enable_1'; ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('google_map_enable'); ?>" id="<?php TLThemeHelper::getFormName('google_map_enable_0'); ?>" value="0" <?php echo ($this->data['option']['google_map_enable']==0 ? 'checked' : ''); ?>/>
					<label for="<?php echo THEME_OPTION_PREFIX.'_google_map_enable_0'; ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>				
			</li>	
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Map type'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Map type.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('google_map_map_type_id'); ?>" id="<?php TLThemeHelper::getFormName('google_map_map_type_id'); ?>">
<?php
						foreach($this->data['dictionary']['googleMapMapTypeId'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['google_map_map_type_id'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Point coordinates'); ?></h5>
				<span class="to-legend">
					<?php TLThemeTranslator::esc_html_e('Coordinates, in order: latitude, longitude.'); ?><br/>
					<?php TLThemeTranslator::esc_html_e('You can define  coordinates using this tool:'); ?> <a href="http://www.birdtheme.org/useful/v3tool.html">http://www.birdtheme.org/useful/v3tool.html</a>
				</span>
				<div>
					<label for="<?php echo THEME_OPTION_PREFIX.'_google_map_coordinate_lat'; ?>" class="to-infield"><?php TLThemeTranslator::esc_html_e('Latitude'); ?></label>
					<input type="text" name="<?php TLThemeHelper::getFormName('google_map_coordinate_lat'); ?>" id="<?php TLThemeHelper::getFormName('google_map_coordinate_lat'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['google_map_coordinate_lat']); ?>" maxlength="255"/>
				</div>
				<div>
					<label for="<?php echo THEME_OPTION_PREFIX.'_google_map_coordinate_lng'; ?>" class="to-infield"><?php TLThemeTranslator::esc_html_e('Longitude'); ?></label>
					<input type="text" name="<?php TLThemeHelper::getFormName('google_map_coordinate_lng'); ?>" id="<?php TLThemeHelper::getFormName('google_map_coordinate_lng'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['google_map_coordinate_lng']); ?>" maxlength="255"/>
				</div>	
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Marker coordinates'); ?></h5>
				<span class="to-legend">
					<?php TLThemeTranslator::esc_html_e('Coordinates of marker, in order: latitude, longitude.'); ?><br/>
					<?php TLThemeTranslator::esc_html_e('You can define coordinates using this tool:'); ?> <a href="http://www.birdtheme.org/useful/v3tool.html">http://www.birdtheme.org/useful/v3tool.html</a>
				</span>
				<div>
					<label for="<?php echo THEME_OPTION_PREFIX.'_google_map_coordinate_marker_lat'; ?>" class="to-infield"><?php TLThemeTranslator::esc_html_e('Latitude'); ?></label>
					<input type="text" name="<?php TLThemeHelper::getFormName('google_map_coordinate_marker_lat'); ?>" id="<?php TLThemeHelper::getFormName('google_map_coordinate_marker_lat'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['google_map_coordinate_marker_lat']); ?>" maxlength="255"/>
				</div>
				<div>
					<label for="<?php echo THEME_OPTION_PREFIX.'_google_map_coordinate_marker_lng'; ?>" class="to-infield"><?php TLThemeTranslator::esc_html_e('Longitude'); ?></label>
					<input type="text" name="<?php TLThemeHelper::getFormName('google_map_coordinate_marker_lng'); ?>" id="<?php TLThemeHelper::getFormName('google_map_coordinate_marker_lng'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['google_map_coordinate_marker_lng']); ?>" maxlength="255"/>
				</div>	
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Width'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Width of the map (in % of the parent selector).'); ?></span>
				<div>
					<div id="<?php TLThemeHelper::getFormName('google_map_width_slider'); ?>"></div>
					<input type="text" name="<?php TLThemeHelper::getFormName('google_map_width'); ?>" id="<?php TLThemeHelper::getFormName('google_map_width'); ?>" class="to-slider-range" readonly/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Height'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Height of the map (in px).'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('google_map_height'); ?>" id="<?php TLThemeHelper::getFormName('google_map_height'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['google_map_height']); ?>" maxlength="3"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Map type control'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable or disable map type control.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('google_map_map_type_control_enable'); ?>" id="<?php TLThemeHelper::getFormName('google_map_map_type_control_enable_1'); ?>" value="1" <?php echo ($this->data['option']['google_map_map_type_control_enable']==1 ? 'checked' : ''); ?>/>
					<label for="<?php echo THEME_OPTION_PREFIX.'_google_map_map_type_control_enable_1'; ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('google_map_map_type_control_enable'); ?>" id="<?php TLThemeHelper::getFormName('google_map_map_type_control_enable_0'); ?>" value="0" <?php echo ($this->data['option']['google_map_map_type_control_enable']==0 ? 'checked' : ''); ?>/>
					<label for="<?php echo THEME_OPTION_PREFIX.'_google_map_map_type_control_enable_0'; ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>				
			</li>						
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Map type control style'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Map type control style.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('google_map_map_type_control_style'); ?>" id="<?php TLThemeHelper::getFormName('google_map_map_type_control_style'); ?>">
<?php
						foreach($this->data['dictionary']['googleMapMapTypeControlStyle'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['google_map_map_type_control_style'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>							
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Map type control position'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Map type control position.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('google_map_map_type_control_position'); ?>" id="<?php TLThemeHelper::getFormName('google_map_map_type_control_position'); ?>">
<?php
						foreach($this->data['dictionary']['googleMapPosition'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['google_map_map_type_control_position'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>							
			</li>						
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Zoom control'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable or disable zoom control.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('google_map_zoom_control_enable'); ?>" id="<?php TLThemeHelper::getFormName('google_map_zoom_control_enable_1'); ?>" value="1" <?php echo ($this->data['option']['google_map_zoom_control_enable']==1 ? 'checked' : ''); ?>/>
					<label for="<?php echo THEME_OPTION_PREFIX.'_google_map_zoom_control_enable_1'; ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('google_map_zoom_control_enable'); ?>" id="<?php TLThemeHelper::getFormName('google_map_zoom_control_enable_0'); ?>" value="0" <?php echo ($this->data['option']['google_map_zoom_control_enable']==0 ? 'checked' : ''); ?>/>
					<label for="<?php echo THEME_OPTION_PREFIX.'_google_map_zoom_control_enable_0'; ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>				
			</li>						
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Zoom level'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Zoom level.'); ?></span>
				<div>
					<div id="<?php TLThemeHelper::getFormName('google_map_zoom_level_slider'); ?>"></div>
					<input type="text" name="<?php TLThemeHelper::getFormName('google_map_zoom_level'); ?>" id="<?php TLThemeHelper::getFormName('google_map_zoom_level'); ?>" class="to-slider-range" readonly/>
				</div>
			</li>	
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Zoom style'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Zoom style.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('google_map_zoom_style'); ?>" id="<?php TLThemeHelper::getFormName('google_map_zoom_style'); ?>">
<?php
						foreach($this->data['dictionary']['googleMapZoomControlStyle'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['google_map_zoom_style'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>							
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Zoom position'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Zoom position.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('google_map_zoom_position'); ?>" id="<?php TLThemeHelper::getFormName('google_map_zoom_position'); ?>">
<?php
						foreach($this->data['dictionary']['googleMapPosition'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['google_map_zoom_position'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>							
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Pan control'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable or disable pan control.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('google_map_pan_control_enable'); ?>" id="<?php TLThemeHelper::getFormName('google_map_pan_control_enable_1'); ?>" value="1" <?php echo ($this->data['option']['google_map_pan_control_enable']==1 ? 'checked' : ''); ?>/>
					<label for="<?php echo THEME_OPTION_PREFIX.'_google_map_pan_control_enable_1'; ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('google_map_pan_control_enable'); ?>" id="<?php TLThemeHelper::getFormName('google_map_pan_control_enable_0'); ?>" value="0" <?php echo ($this->data['option']['google_map_pan_control_enable']==0 ? 'checked' : ''); ?>/>
					<label for="<?php echo THEME_OPTION_PREFIX.'_google_map_pan_control_enable_0'; ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>				
			</li>				
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Pan control position'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Pan control position.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('google_map_pan_control_position'); ?>" id="<?php TLThemeHelper::getFormName('google_map_pan_control_position'); ?>">
<?php
						foreach($this->data['dictionary']['googleMapPosition'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['google_map_pan_control_position'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>							
			</li>	
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Scale control'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable or disable scale control.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('google_map_scale_control_enable'); ?>" id="<?php TLThemeHelper::getFormName('google_map_scale_control_enable_1'); ?>" value="1" <?php echo ($this->data['option']['google_map_scale_control_enable']==1 ? 'checked' : ''); ?>/>
					<label for="<?php echo THEME_OPTION_PREFIX.'_google_map_scale_control_enable_1'; ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('google_map_scale_control_enable'); ?>" id="<?php TLThemeHelper::getFormName('google_map_scale_control_enable_0'); ?>" value="0" <?php echo ($this->data['option']['google_map_scale_control_enable']==0 ? 'checked' : ''); ?>/>
					<label for="<?php echo THEME_OPTION_PREFIX.'_google_map_scale_control_enable_0'; ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>				
			</li>				
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Scale control position'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Scale control position.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('google_map_scale_control_position'); ?>" id="<?php TLThemeHelper::getFormName('google_map_scale_control_position'); ?>">
<?php
						foreach($this->data['dictionary']['googleMapPosition'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['google_map_pan_control_position'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>							
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Street View control'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable or disable street view control.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('google_map_street_view_enable'); ?>" id="<?php TLThemeHelper::getFormName('google_map_street_view_enable_1'); ?>" value="1" <?php echo ($this->data['option']['google_map_street_view_enable']==1 ? 'checked' : ''); ?>/>
					<label for="<?php echo THEME_OPTION_PREFIX.'_google_map_street_view_enable_1'; ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('google_map_street_view_enable'); ?>" id="<?php TLThemeHelper::getFormName('google_map_street_view_enable_0'); ?>" value="0" <?php echo ($this->data['option']['google_map_street_view_enable']==0 ? 'checked' : ''); ?>/>
					<label for="<?php echo THEME_OPTION_PREFIX.'_google_map_street_view_enable_0'; ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>				
			</li>				
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Street View position'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Street View position.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('google_map_street_view_position'); ?>" id="<?php TLThemeHelper::getFormName('google_map_street_view_position'); ?>">
<?php
						foreach($this->data['dictionary']['googleMapPosition'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['google_map_street_view_position'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>							
			</li>	
		</li>

		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				var optionElement=$('.to').themeOptionElement();
				optionElement.createSlider('#<?php echo THEME_OPTION_PREFIX.'_google_map_width_slider'; ?>',0,100,<?php echo (int)$this->data['option']['google_map_width']; ?>);
				optionElement.createSlider('#<?php echo THEME_OPTION_PREFIX.'_google_map_zoom_level_slider'; ?>',0,21,<?php echo (int)$this->data['option']['google_map_zoom_level']; ?>);
			});
		</script>