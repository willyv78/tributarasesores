		<?php echo $this->data['nonce']; ?>

		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('On click action'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Select action when user click on thumbnail.'); ?></span>
					<div class="to-clear-fix">
						<select name="<?php TLThemeHelper::getFormName('gallery_action_open'); ?>" id="<?php TLThemeHelper::getFormName('gallery_action_open'); ?>">
<?php
							foreach($this->data['dictionary']['actionOpen'] as $index=>$value)
								echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['gallery_action_open'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Video URL (Youtube)'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enter URL of video from Youtube.'); ?></span>
					<div>
						<input type="text" name="<?php TLThemeHelper::getFormName('gallery_url_video_youtube'); ?>" id="<?php TLThemeHelper::getFormName('gallery_url_video_youtube'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['gallery_url_video_youtube']); ?>" maxlength="255" />
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Video URL (Vimeo)'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enter URL of video from Vimeo.'); ?></span>
					<div>
						<input type="text" name="<?php TLThemeHelper::getFormName('gallery_url_video_vimeo'); ?>" id="<?php TLThemeHelper::getFormName('gallery_url_video_vimeo'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['gallery_url_video_vimeo']); ?>" maxlength="255" />
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Video URL (Metacafe)'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enter URL of video from Metacafe.'); ?></span>
					<div>
						<input type="text" name="<?php TLThemeHelper::getFormName('gallery_url_video_metacafe'); ?>" id="<?php TLThemeHelper::getFormName('gallery_url_video_metacafe'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['gallery_url_video_metacafe']); ?>" maxlength="255" />
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Video URL (Dailymotion)'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enter URL of video from Dailymotion.'); ?></span>
					<div>
						<input type="text" name="<?php TLThemeHelper::getFormName('gallery_url_video_dailymotion'); ?>" id="<?php TLThemeHelper::getFormName('gallery_url_video_dailymotion'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['gallery_url_video_dailymotion']); ?>" maxlength="255" />
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Page URL'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enter URL of which need to open.'); ?></span>
					<div>
						<input type="text" name="<?php TLThemeHelper::getFormName('gallery_url_page'); ?>" id="<?php TLThemeHelper::getFormName('gallery_url_page'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['gallery_url_page']); ?>" maxlength="255" />
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Single image shortcodes'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Single images shortcodes.'); ?></span>
<?php
					foreach($this->data['dictionary']['imageSize'] as $index=>$value)
					{
?>
					<div>
						<?php echo TLThemeTranslator::esc_html__('Image').' '.$value[0].'x'.$value[1].TLThemeTranslator::esc_html__('px').': [tlt_image id="'.$this->data['postId'].'" image_type="image-'.$value[0].'-'.$value[1].'"]'; ?>
					</div>
<?php
					}
?>
				</li>
			</ul>
		</div>

		<script type="text/javascript">
			jQuery(document).ready(function($)
			{	
				$('.to').themeOptionElement({init:true});
			});
		</script>