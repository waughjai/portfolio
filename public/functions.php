<?php

declare( strict_types = 1 );
namespace Waugh\Portfolio;

require_once( __DIR__ . '/vendor/autoload.php' );

use WaughJ\WPAdminMenuManager\WPAdminMenuManager;
WPAdminMenuManager::createHeaderMenu();

use WaughJ\WPThemeImage\WPThemeImage;
WPThemeImage::setDefaultSharedDirectory( "images" );

use WaughJ\WPPostType\WPPostType;
new WPPostType
(
    "project",
    "Projects",
    [
        "singular_name" => "Project",
        "taxonomies" => [ "project_tool" ],
        "meta_boxes" =>
        [
            [
                "slug" => "source",
                "name" => "Source"
            ]
        ]
    ]
);

add_action
(
    'init',
    function()
    {
        register_taxonomy
        (
            'project_tool',
            'project',
            [
                "label" => "Tools",
                "labels" =>
                [
                    "singular_name" => "Tool",
                    'menu_name' => "Tools",
                    'all_items' => __( 'All Tools' ),
                    'edit_item' => __( 'Edit Tool' ),
                    'view_item' => __( 'View Tool' ),
                    'update_item' => __( 'Update Tool' ),
                    'add_new_item' => __( 'Add New Tool' ),
                    'new_item_name' => __( 'New Tool Name' ),
                    'search_items' => __( 'Search Tools' ),
                    'popular_items' => __( 'Popular Tools' ),
                    'separate_items_with_commas' => __( 'Separate tools with commas' ),
                    'add_or_remove_items' => __( 'Add or remove tools' ),
                    'choose_from_most_used' => __( 'Choose from the most used tools' ),
                    'not_found' => __( 'No tools found.' ),
                    'back_to_items' => __( '← Back to tools' )
                ]
            ]
        );
    }
);