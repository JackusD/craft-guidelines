<?php

function guidelines_child_load_parent_theme_acf_fields($paths) {
	$paths[] = get_template_directory() . '/acf-json';
    $paths[] = get_stylesheet_directory() . '/acf-json';

	return $paths;
}
add_filter('acf/settings/load_json', 'guidelines_child_load_parent_theme_acf_fields');
