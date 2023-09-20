<?php

function guidelines_child_get_manifest() {
	$manifest = file_get_contents(GUIDELINES_CHILD_BUILD_DIR_PATH . '/manifest.json');
	$manifest = $manifest ? json_decode($manifest) : null;

	return $manifest;
}
