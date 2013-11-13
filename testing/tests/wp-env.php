<?php
/**
 * Test the WordPress Enviroment
 */

$testing->header('WordPess Enviroment');


// Using normal cron jobs
if (defined('DISABLE_WP_CRON') && DISABLE_WP_CRON == 1) {
	$testing->title('Using true cron jobs');
} else {
	$testing->title('Using WP style cron jobs');
}
