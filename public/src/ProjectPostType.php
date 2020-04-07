<?php

declare( strict_types = 1 );
namespace Waugh\Portfolio;

use WaughJ\WPPostType\WPPostType;

class ProjectPostType
{
    public static function init() : void
    {
        self::$postType = new WPPostType
        (
            "project",
            "Projects",
            [
                "singular_name" => "Project",
                "taxonomies" => [ "project_tool" ],
                'supports' => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
                "meta_boxes" =>
                [
                    [
                        "slug" => "source",
                        "name" => "Source"
                    ],
                    [
                        "slug" => "order",
                        "name" => "Order",
                        "input-type" => "number"
                    ]
                ],
                "custom_toc" =>
                [
                    [
                        "name" => "Order",
                        "slug" => "order"
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
                        ],
                        'rewrite' => [ 'slug' => 'tool' ]
                    ]
                );
            }
        );
    }

    public static function getProjectSource( int $id ) : string
    {
        return ( string )( self::$postType->getMetaBox( "source" )->getValue( $id ) );
    }

    public static function getAllProjects() : array
    {
        return WPQuery::getPosts
        ([
            'post_type' => 'project',
            'number_of_posts' => -1,
            'orderby' => 'meta_value',
            'meta_key' => 'project-order',
            'order' => 'ASC'
        ]);
    }

    static WPPostType $postType;
}