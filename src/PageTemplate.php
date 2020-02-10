<?php

declare( strict_types = 1 );
namespace WaughJ\Portfolio;

class PageTemplate
{
    public static function generate( string $template, array $data = [] ) : string
    {
        return Template::generate( $template, array_merge( self::generateDefaultData(), $data ) );
    }

    private static function generateDefaultData() : array
    {
        return
        [
            'header' => new Header(),
            'footer' => new Footer(),
            'stylesheets' => [ new Stylesheet( 'main' ) ]
        ];
    }
}