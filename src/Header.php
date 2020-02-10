<?php

declare( strict_types = 1 );
namespace WaughJ\Portfolio;

class Header
{
    public function __construct()
    {
        $this->logo = new Image( 'jaimeson-waugh-logo.svg', 'Jaimeson Waugh' );
    }

    public function getLogo() : Image
    {
        return $this->logo;
    }

    public function getNav() : array
    {
        return array_map( fn( array $dataEntry ) => Link::generateFromData( $dataEntry ), self::NAV_DATA );
    }

    private Image $logo;
    private const NAV_DATA =
    [
        [
            'url' => '',
            'title' => 'Portfolio'
        ],
        [
            'url' => 'resume',
            'title' => 'Rèsumè'
        ],
        [
            'url' => 'contact',
            'title' => 'Contact'
        ]
    ];
}