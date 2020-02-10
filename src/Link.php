<?php

declare( strict_types = 1 );
namespace WaughJ\Portfolio;

class Link
{
    public static function init( string $root ) : void
    {
        self::$root = $root;
    }

    public static function generateFromData( array $data ) : Link
    {
        return new Link( $data[ 'url' ], $data[ 'title' ] );
    }

    public function __construct( string $url, string $title )
    {
        if ( $url !== '' )
        {
            if ( !Text::startsWith( '/', $url ) )
            {
                $url = '/' . $url;
            }

            if ( !Text::endsWith( '/', $url ) )
            {
                $url .= '/';
            }
        }
        $this->url = self::$root . $url;
        $this->title = $title;
    }

    public function getUrl() : string
    {
        return $this->url;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    private string $url;
    private string $title;

    private static string $root;
}