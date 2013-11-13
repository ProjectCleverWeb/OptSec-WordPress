<?php

/**
 * This function just helps with adding tests
 */
function tget($relpath, $use_wp = FALSE){
	global $testing;
	if ((bool) $use_wp) {
		global $post ;
		global $authordata;
		global $currentday;
		global $currentmonth;
		global $page;
		global $pages;
		global $multipage;
		global $more;
		global $numpages;
		global $is_iphone;
		global $is_chrome;
		global $is_safari;
		global $is_NS4;
		global $is_opera;
		global $is_macIE;
		global $is_winIE;
		global $is_gecko;
		global $is_lynx;
		global $is_IE;
		global $is_apache;
		global $is_IIS;
		global $is_iis7;
		global $wp_version;
		global $wp_db_version;
		global $tinymce_version;
		global $manifest_version;
		global $required_php_version;
		global $required_mysql_version;
		global $wp_query;
		global $wp_rewrite;
		global $wp;
		global $wpdb;
		global $wp_locale;
		global $pagenow;
		global $post_type;
		global $allowedposttags;
		global $allowedtags;
	}
	return require_once realpath(__DIR__.'/../tests/'.ltrim($relpath, '\\/').'.php');
}
