<?php

declare( strict_types = 1 );
namespace Waugh\Portfolio;

require_once( __DIR__ . '/vendor/autoload.php' );

use WaughJ\WPAdminMenuManager\WPAdminMenuManager;
WPAdminMenuManager::createHeaderMenu();

use WaughJ\WPThemeImage\WPThemeImage;
WPThemeImage::setDefaultSharedDirectory( "images" );

ProjectPostType::init();