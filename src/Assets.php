<?php

declare( strict_types = 1 );
namespace WaughJ\Portfolio;

use Symfony\Component\HttpFoundation\ServerBag;

class Assets
{
    public static function init( ServerBag $serverData ) : void
    {
        $scheme = ( $serverData->get( 'SERVER_PROTOCOL' ) === 'HTTP/1.1' ) ? 'http' : 'https';
        $domain = $serverData->get( 'HTTP_HOST' );
        $root_uri = "{$scheme}://{$domain}";
        $root_directory = $_SERVER[ 'DOCUMENT_ROOT' ];
        Image::init( $root_uri, $root_directory );
        Link::init( $root_uri );
        Stylesheet::init( $root_uri, $root_directory );
    }
}