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
		$response = '';

		if (isset($attrs['context'])) {
			$response = __(html_entity_decode($content), $attrs['context']);
		} else {
			$response = __(html_entity_decode($content));
		}

		if (isset($attrs['wrapper'])) {
			$response = sprintf('<%s>%s</%s>', $attrs['wrapper'], $response, $attrs['wrapper']);
		}

		return $response;
	}
	add_shortcode('translate', 'translate_shortcode');
}
