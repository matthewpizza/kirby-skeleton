<?php

/**
 * Include Kirby CMS
 */

// Root
$root = __DIR__;

// Kirby system folder
$rootKirby = $root . '/vendor/bastianallgeier/kirbycms/kirby';

// Kirby site folder
$rootSite = $root . '/site';

// Kirby content folder
$rootContent = $root . '/content';

// Load Kirby
if( ! file_exists($rootKirby . '/system.php') ) {
	die('The Kirby system could not be loaded');
}

require_once($rootKirby . '/system.php');