<?php
/**
 * General File Testing
 */

$testing->header('Files');

$exists = array();

// Must Exist
$exists['must'] = array(
	'index.php',
	'wp-load.php',
	'wp-cron.php',
);

// Can Exist
$exists['can'] = array(
	'.htaccess',
	'wp-content/advanced-cache.php',
	'wp-content/db.php',
	'wp-content/object-cache.php'
);

// Cannot Exist (security risks)
$exists['cannot'] = array(
	'wp-config-sample.php',
	'readme.html',
	'license.txt'
);

// Bonus (these can be files or symlinks)
$exists['bonus'] = array(
	'robots.txt',
	'wp-content/writable/sitemap.xml',
	'wp-content/writable/sitemap.xml.gz',
	'sitemap.xml',
	'sitemap.xml.gz'
);


foreach ($exists as $type => $array) {
	if (strtolower($type) == 'bonus') {
		$testing->title('Bonus:');
	} else {
		$testing->title((ucfirst(strtolower($type))).' Exist:');
	}
	foreach ($array as $file) {
		$file = $file;
		if (strtolower($type) == 'bonus') {
			if (is_file(APP_PATH.'/'.$file) || is_link(APP_PATH.'/'.$file)) {
				if (is_link(APP_PATH.'/'.$file)) {
					$testing->awesome('\''.$file.'\' is a link');
				} else {
					$testing->awesome('\''.$file.'\' exists');
				}
			}
			// bonuses should not have a negative effect
		} else {
			if (is_file(APP_PATH.'/'.$file)) {
				if (strtolower($type) == 'cannot') {
					$testing->fail('\''.$file.'\' exists');
				} else {
					$testing->passed('\''.$file.'\' exists');
				}
			} else {
				if (strtolower($type) == 'must') {
					$testing->fail('\''.$file.'\' DOES NOT exist');
				} elseif(strtolower($type) == 'cannot') {
					$testing->passed('\''.$file.'\' DOES NOT exist');
				} else {
					$testing->warn('\''.$file.'\' DOES NOT exist');
				}
			}
		}
	}
}






