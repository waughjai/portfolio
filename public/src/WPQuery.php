<?php

declare( strict_types = 1 );
namespace Waugh\Portfolio;

class WPQuery
{
    public static function getPosts( array $arguments = [] ) : array
    {
        $posts = [];
        if ( empty( $arguments ) )
        {
            while ( have_posts() )
            {
                the_post();
                $posts[] = new \Timber\Post( get_the_ID() );
            }
        }
        else
        {
            $query = new \WP_Query( $arguments );
            if ( $query->have_posts() )
            {
                while ( $query->have_posts() )
                {
                    $query->the_post();
                    $posts[] = new \Timber\Post( get_the_ID() );
                }
                wp_reset_postdata();
            }
        }
        return $posts;
    }
}