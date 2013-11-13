<?php
/**
 * Checks wp-config.php for issues
 */

$testing->header('WordPress Config File');

/*** wp-config multi-location check ***/
if (is_file(APP_PATH.'/wp-config.php') && is_file(APP_PATH.'/../wp-config.php')) {
	$testing->warn('wp-config file is in 2 locations!');
} else {
	$testing->passed('wp-config multi-location');
}

/*** wp-config read/write check ***/
if (is_file(APP_PATH.'/wp-config.php')) {
	$wp_config = APP_PATH.'/wp-config.php';
	$testing->warn('wp-config IS in a publicly accessible location!');
	if (is_writable($wp_config)) {
		$testing->fail('wp-config file IS writable');
	} else {
		$testing->passed('wp-config IS NOT writable');
	}
} elseif (is_file(APP_PATH.'/../wp-config.php')) {
	$wp_config = APP_PATH.'/../wp-config.php';
	$testing->awesome('wp-config IS NOT in a publicly accessible location!');
	if (is_writable($wp_config)) {
		$testing->fail('wp-config file IS writable');
	} else {
		$testing->passed('wp-config IS NOT writable');
	}
} else {
	$testing->warn('wp-config is not in a common location');
}

