<?php

declare( strict_types = 1 );
namespace Waugh\Portfolio;

use Timber\Timber;

PageTemplate::print
(
    "single-project",
    [
        "projects" => array_map( fn( \Timber\Post $post ) => new Project( $post->id ), Timber::get_posts() )
    ]
);