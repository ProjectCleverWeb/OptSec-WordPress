<?php
/**
 * Here we test the PHP enviroment.
 * 
 * Things we check/do:
 *   * PHP version is >=5.3.7
 *   * PHP version is >=5.4.0 (awesome)
 *   * If an PHP opcode extension is loaded
 *   * If an RAM cache extension is loaded
 *   * if all recommended PHP extentions are being loaded
 *   * If POST_MAX_SIZE === UPLOAD_MAX_FILESIZE
 *   * Display: POST_MAX_SIZE
 *   * Display: UPLOAD_MAX_FILESIZE
 *   
 *   
 */

$testing->header('PHP Enviroment');

// PHP version recommendation
if (version_compare(PHP_VERSION, '5.3.7') < 0) {
	$testing->warn('PHP version is less than 5.3.7');
} else {
	$testing->passed('PHP version is >= 5.3.7');
}

// PHP version awesome
if (version_compare(PHP_VERSION, '5.4.0') >= 0) {
	$testing->awesome('PHP version is >= 5.4.0');
}

// PHP opcode extensions
if (extension_loaded('apc') || extension_loaded('eaccelerator') || extension_loaded('xcache') || extension_loaded('wincache')) {
	$testing->awesome('1 or more PHP opcode extentions are loaded');
} else {
	$testing->warn('There are no PHP opcode extensions loaded');
}

$testing->nl(
	array(
		'APC'          => (extension_loaded('apc')?'TRUE':'FALSE'),
		'eAccelerator' => (extension_loaded('eaccelerator')?'TRUE':'FALSE'),
		'XCache'       => (extension_loaded('xcache')?'TRUE':'FALSE'),
		'WinCache'     => (extension_loaded('wincache')?'TRUE':'FALSE')
	)
);

// PHP extentions (5.4.14)
$php_exts = array(
	'amqp','apm',
	'bcmath','bz2',
	'calendar','ctype',
	'curl','dba',
	'dom','exif',
	'fileinfo','filter',
	'ftp','gd',
	'gender','geoip',
	'gettext','gmp',
	'gnupg','hash',
	'htscanner','http',
	'iconv','igbinary',
	'imagick','imap',
	'interbase','intl',
	'json','ldap',
	'lzf','magickwand',
	'mbstring','mcrypt',
	'memcached','memcache',
	'mogilefs','mongo',
	'mssql','mysqli',
	'mysql','ncurses',
	'newt','oauth',
	'pcntl','pdo_dblib',
	'pdo_firebird','pdo_mysql',
	'pdo_pgsql','pdo',
	'pdo_sqlite','pgsql',
	'phar','phpwkhtmltox',
	'posix','pspell',
	'radius','rar',
	'readline','recode',
	'redis','session',
	'shmop','simplexml',
	'snmp','soap',
	'sockets','sphinx',
	'sqlite','ssh2',
	'stats','stomp',
	'svn','sysvmsg',
	'sysvsem','sysvshm',
	'tidy','timezonedb',
	'tokenizer','txforward',
	'uploadprogress','wddx',
	'xattr','xhprof',
	'xmlreader','xmlrpc',
	'xml','xmlwriter',
	'xsl','yaml',
	'zip'
);

$exts = array();
foreach ($php_exts as $php_ext) {
	if (extension_loaded($php_ext)) {
		$exts[] = $php_ext;
	}
}

$testing->title('Loaded Extensions:');
$testing->ul($exts);








