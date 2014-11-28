<?php

/**
 * Start Kirby CMS
 */

if ( ! defined('DS') ) define( 'DS', DIRECTORY_SEPARATOR );

require_once( __DIR__ . '/bootstrap.php' );

$kirby = kirby();

$kirby->roots->kirby   = __DIR__ . DS . 'vendor' . DS . 'getkirby' . DS . 'kirby';
$kirby->roots->content = __DIR__ . DS . 'content';
$kirby->roots->site    = __DIR__ . DS . 'site';
$kirby->roots->assets  = __DIR__ . DS . 'assets';

echo $kirby->launch();