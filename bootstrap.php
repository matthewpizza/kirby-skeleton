<?php

if ( ! defined('KIRBY') ) define( 'KIRBY', true );
if ( ! defined('DS') )    define( 'DS', DIRECTORY_SEPARATOR );

$vendor = __DIR__ . DS . 'vendor' . DS . 'getkirby';

// load the kirby toolkit
require_once( $vendor . DS . 'toolkit' . DS . 'bootstrap.php' );

// start a session
s::start();

// load all core classes
load(array(

  // all core abstracts
  'childrenabstract'  => $vendor . DS . 'kirby' . DS . 'core' . DS . 'children.php',
  'contentabstract'   => $vendor . DS . 'kirby' . DS . 'core' . DS . 'content.php',
  'fieldabstract'     => $vendor . DS . 'kirby' . DS . 'core' . DS . 'field.php',
  'fileabstract'      => $vendor . DS . 'kirby' . DS . 'core' . DS . 'file.php',
  'filesabstract'     => $vendor . DS . 'kirby' . DS . 'core' . DS . 'files.php',
  'kirbytextabstract' => $vendor . DS . 'kirby' . DS . 'core' . DS . 'kirbytext.php',
  'kirbytagabstract'  => $vendor . DS . 'kirby' . DS . 'core' . DS . 'kirbytag.php',
  'pageabstract'      => $vendor . DS . 'kirby' . DS . 'core' . DS . 'page.php',
  'siteabstract'      => $vendor . DS . 'kirby' . DS . 'core' . DS . 'site.php',
  'usersabstract'     => $vendor . DS . 'kirby' . DS . 'core' . DS . 'users.php',
  'userabstract'      => $vendor . DS . 'kirby' . DS . 'core' . DS . 'user.php',

  // lib
  'pageextension'     => $vendor . DS . 'kirby' . DS . 'lib' . DS . 'pageextension.php',

  // vendors
  'parsedown'         => $vendor . DS . 'kirby' . DS . 'vendors' . DS . 'parsedown.php',
  'parsedownextra'    => $vendor . DS . 'kirby' . DS . 'vendors' . DS . 'parsedownextra.php'

));

// load all helper functions
require_once( $vendor . DS . 'kirby' . DS . 'helpers.php' );

// load the main kirby class
require_once( $vendor . DS . 'kirby' . DS .  'kirby.php' );