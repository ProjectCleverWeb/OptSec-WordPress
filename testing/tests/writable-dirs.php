<?php
/**
 * Makes sure all the wrtiable directories are correctly setup
 */

$testing->header('Writable Directories');

$writables = array(
	'/wp-content/writable/',
	'/wp-content/cache/',
	'/wp-content/w3tc-config/'
);

$not_writables = array(
	'/wp-content/',
	'/wp-content/themes/',
	'/wp-content/plugins/',
	'/wp-admin/',
	'/wp-includes/',
);


foreach ($writables as $writable) {
	if (file_exists(APP_PATH.$writable)){
		if (is_writable(APP_PATH.$writable)) {
			$testing->passed("'$writable' IS writable");
		} else {
			$testing->warn("'$writable' IS NOT writable");
		}
	} else {
		$testing->fail("'".APP_PATH."$writable' does not exist!");
	}
}

foreach ($not_writables as $not_writable) {
	if (file_exists(APP_PATH.$not_writable)){
		if (!is_writable(APP_PATH.$not_writable)) {
			$testing->passed("'$not_writable' IS NOT writable");
		} else {
			$testing->warn("'$not_writable' IS writable");
		}
	} else {
		$testing->fail("'".APP_PATH."$not_writable' does not exist!");
	}
}

