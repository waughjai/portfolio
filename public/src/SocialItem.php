<?php

declare( strict_types = 1 );
namespace Waugh\Portfolio;

use WaughJ\WPThemeImage\WPThemeImage;

class SocialItem
{
    public function __construct( array $item )
    {
        $this->url = $item[ 'url' ];
        $this->title = $item[ 'title' ];
        $this->image = new WPThemeImage( $item[ 'image' ] );
    }

    public function getUrl() : string
    {
        return $this->url;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function getImageSource() : string
    {
        return $this->image->getSource();
    }

    private string $url;
    private string $title;
    private WPThemeImage $image;
}