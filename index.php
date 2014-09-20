<?php

/**
 * Start Kirby CMS
 */

if ( ! defined('DS') ) define( 'DS', DIRECTORY_SEPARATOR );

require_once( __DIR__ . '/bootstrap.php' );

echo kirby::start( array(
	'root'         => __DIR__,
	'root.kirby'   => __DIR__ . DS . 'vendor' . DS . 'getkirby' . DS . 'kirby',
	'root.content' => __DIR__ . DS . 'content',
	'root.site'    => __DIR__ . DS . 'site',
) );