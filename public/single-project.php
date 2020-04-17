<?php

declare( strict_types = 1 );
namespace Waugh\Portfolio;

use Timber\Timber;
use WaughJ\WPScripts\WPStylesheets;

WPStylesheets::register( 'single-project' );

PageTemplate::print
(
    "single-project",
    [
        "projects" => array_map( function( \Timber\Post $post ) { return new Project( $post->id ); }, Timber::get_posts() )
    ]
);