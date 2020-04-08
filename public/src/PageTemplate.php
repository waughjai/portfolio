<?php

declare( strict_types = 1 );
namespace Waugh\Portfolio;

use Timber\Timber;

class PageTemplate
{
    public static function print( string $template, array $data = [] ) : void
    {
        $context = array_merge( array_merge( Timber::context(), self::getPageContext() ), $data );
        Timber::render( "{$template}.html.twig", $context );
    }

    private static function getPageContext() : array
    {
        return
        [
            "posts" => Timber::get_posts(),
            "header" => new Header(),
            "footer" => new Footer(),
            "path" => new Path(),
            "social" => array_map
            (
                fn( array $item ) => new SocialItem( $item ),
                [
                    [
                        'url' => 'https://www.linkedin.com/in/waughjai/',
                        'title' => 'My LinkedIn',
                        'image' => 'linkedin-icon.svg'
                    ],
                    [
                        'url' => 'https://github.com/waughjai/',
                        'title' => 'GitHub',
                        'image' => 'github-icon.svg'
                    ]
                ]
            )
        ];
    }
}