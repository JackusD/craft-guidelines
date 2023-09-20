<?php

/**
 * Enqueue scripts and styles.
 */
function guidelines_child_styles() {
	$manifest = guidelines_child_get_manifest();

	if ($manifest && !empty($manifest->{'main.css'})) {
		wp_register_style('guidelines-child-theme-main-css', GUIDELINES_CHILD_BUILD_URI . $manifest->{'main.css'}, []);
		wp_enqueue_style('guidelines-child-theme-main-css');
	}
}
add_action('wp_enqueue_scripts', 'guidelines_child_styles', 20);

function guidelines_child_scripts() {
	$manifest = guidelines_child_get_manifest();

	if ($manifest && !empty($manifest->{'main.js'})) {
		wp_register_script('guidelines-child-theme-main-js', GUIDELINES_CHILD_BUILD_URI . $manifest->{'main.js'}, [], null, true);
		wp_enqueue_script('guidelines-child-theme-main-js');
	}

	$globals = [
		'AJAX_URL'           => admin_url('admin-ajax.php'),
		'TEMPLATE_DIRECTORY' => get_stylesheet_directory_uri(),
	];

	wp_add_inline_script('guidelines-child-theme-main-js', 'var CHILD_GLOBALS = ' . json_encode($globals), 'before');
}
add_action('wp_enqueue_scripts', 'guidelines_child_scripts', 2);
