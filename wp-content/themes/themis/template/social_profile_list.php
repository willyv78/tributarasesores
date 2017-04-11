		<ul class="list-0 social-list clear-fix <?php echo TLThemeHelper::esc_attr($this->data['css_class']); ?>">
<?php
		foreach($this->data['profile'] as $index=>$value)
		{
?>
			<li><a href="<?php echo TLThemeHelper::esc_attr($value['url']); ?>" class="social-list-<?php echo TLThemeHelper::esc_attr($index); ?> target-blank"></a></li>
<?php
		}
?>
		</ul>			