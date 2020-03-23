<?php

declare( strict_types = 1 );
namespace Waugh\Portfolio;

require_once( __DIR__ . '/vendor/autoload.php' );

use WaughJ\WPAdminMenuManager\WPAdminMenuManager;
WPAdminMenuManager::createHeaderMenu();

use WaughJ\WPScripts\WPStylesheets;
WPStylesheets::init();
WPStylesheets::registerRaw( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i,900,900i&display=swap' );
WPStylesheets::register( 'main' );

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