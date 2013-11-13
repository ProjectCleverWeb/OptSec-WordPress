<?php
/**
 * This file is resposible for ensureing the the deployed app is stable. It runs via
 * the "before_deploy" hook.
 * 
 * Please only add, modify, or comment-out things.
 */


/*** Configuration ***/
error_reporting(-1);
ini_set('display_errors', 1);
define('WP_USE_THEMES', false);
defined('PATH') or define('PATH', realpath(__DIR__.'/..'),1);
defined('APP_PATH') or define('APP_PATH', PATH.'/public', 1);



/*** Dependencies ***/
require_once __DIR__.'/../public/wp-blog-header.php';
require_once __DIR__.'/testing.class.php';



/*** Class Instances ***/
$testing = new testing;



/*** Custom Functions ***/
require_once __DIR__.'/functions/tget.php';




/*** Tests ***/
tget('php-env');
tget('wp-config');
tget('writable-dirs');
tget('files');
tget('wp-env',1);



/*** Output ***/
$testing->output();


