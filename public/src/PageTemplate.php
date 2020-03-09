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
            "header" => new Header(),
            "footer" => new Footer(),
            "path" => new Path()
        ];
    }
}