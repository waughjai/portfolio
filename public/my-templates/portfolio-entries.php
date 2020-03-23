<?php

/* Template Name: Portfolio Entries */

declare( strict_types = 1 );
namespace Waugh\Portfolio;

use Timber\Timber;
use WaughJ\WPScripts\WPStylesheets;

WPStylesheets::register( 'archive-project' );

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