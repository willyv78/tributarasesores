<?php
		echo do_shortcode('['.THEME_CONTEXT.'_iframe url="'.TLThemeHelper::escapeShortcodeAttr($this->data->meta->url).'" css_class="'.TLThemeHelper::escapeShortcodeAttr($this->data->meta->css_class).'" width="'.TLThemeHelper::escapeShortcodeAttr($this->data->meta->width).'"]');
?>