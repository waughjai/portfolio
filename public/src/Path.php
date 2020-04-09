<?php

declare( strict_types = 1 );
namespace Waugh\Portfolio;

use WaughJ\WPThemeImage\WPThemeImage;

class Path
{
    public function getHome() : string
    {
        return get_home_url();
    }

    public function getThemeImage( string $local ) : string
    {
        return ( new WPThemeImage( $local ) )->getSource();
    }

    public function getUpload( string $local ) : string
    {
        return wp_upload_dir()[ 'url' ] . "/$local";
    }
}