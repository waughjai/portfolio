<?php

declare( strict_types = 1 );
namespace Waugh\Portfolio;

require_once( __DIR__ . '/vendor/autoload.php' );

use WaughJ\WPAdminMenuManager\WPAdminMenuManager;
WPAdminMenuManager::createHeaderMenu();

use WaughJ\WPThemeImage\WPThemeImage;
WPThemeImage::setDefaultSharedDirectory( "images" );

add_theme_support( 'post-thumbnails' );

ProjectPostType::init();

use WaughJ\WPMediaSizes\WPMediaSizes;
WPMediaSizes::set
([
    [
        'name' => 'thumbnail',
        'width' => 800,
        'height' => 800,
        'crop' => true
    ],
    [
        'name' => 'small',
        'width' => 1200,
        'height' => 1200,
        'crop' => false
    ],
    [
        'name' => 'medium',
        'width' => 1600,
        'height' => 1600,
        'crop' => false
    ],
    [
        'name' => 'medium_large',
        'width' => 1920,
        'height' => 1920,
        'crop' => false
    ],
    [
        'name' => 'large',
        'width' => 2560,
        'height' => 2560,
        'crop' => false
    ]
]);