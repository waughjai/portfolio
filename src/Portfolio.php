<?php

declare( strict_types = 1 );
namespace WaughJ\Portfolio;

class Portfolio
{
    public function __construct()
    {

    }

    public function getSections() : array
    {
        return array_map
        (
            fn( string $key, array $value ) => PortfolioSection::generateBasicSection( $key, self::TYPES[ $key ], $value ),
            array_keys( self::ENTRIES ),
            self::ENTRIES
        );
    }

    private const TYPES =
    [
        'web-design' => 'Web Design',
        'programming' => 'Programming'
    ];

    private const ENTRIES =
    [
        'web-design' =>
        [
            [
                'slug' => 'daily-dote',
                'name' => 'Daily Dote',
                'url' => 'https://www.dailydote.com',
                'description' => '<p>Website made for store that sells chocolate and coffee. Includes shopping system for selling products online, based on WooCommerce with custom-programmed price calculator to allow for more complex shipping calculations than regular WooCommerce allows.</p><p>The owner and designer wanted the home page image to always cover the screen, no matter what size the screen, and keep the text from obscuring the image, and we still wanted to use responsive image loading to keep website loading times down, so I created custom JavaScript to load an image just big enough to cover the screen based on varying widths and heights and created positioning code to keep the text from going over the image on different screen sizes.</p>'
            ]
        ],
        'programming' =>
        [
            [
                'slug' => 'boskeopolis-land',
                'name' => 'Boskeopolis Land',
                'url' => 'https://www.boskeopolis-land.com',
                'description' => '<p>Computer game made in C++ and SDL2. Uses RapidJSON for loading configuration files for easy creation of levels, maps, tiles, and more.</p>'
            ]
        ]
    ];
}