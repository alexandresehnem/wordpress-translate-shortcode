<?php
/*
Plugin Name: Translate Shortcode
Description: Shortcode content translation
Author: Alexandre Antonio Sehnem
Version: 1.0
Author URI: http://alexandresehnem.com.br
*/

if (!is_admin()) {

	function translate_shortcode($attrs, $content) {
		if (isset($attrs['context'])) {
			return __($content, $attrs['context']);
		} else {
			return __($content);
		}
	}
	add_shortcode('translate', 'translate_shortcode');
}
