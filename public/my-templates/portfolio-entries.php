<?php

/* Template Name: Portfolio Entries */

declare( strict_types = 1 );
namespace Waugh\Portfolio;

use Timber\Timber;
use WaughJ\WPScripts\WPStylesheets;
use WaughJ\WPScripts\WPScripts;

WPStylesheets::register( 'archive-project' );
WPScripts::register( 'archive-project' );

PageTemplate::print
(
    "archive-project",
    [
        "projects" => array_map
        (
            fn( \Timber\Post $post ) => new Project( $post->id ),
            ProjectPostType::getAllProjects()
        )
    ]
);