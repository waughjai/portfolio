<?php

declare( strict_types = 1 );
namespace WaughJ\Portfolio;

class PortfolioEntry
{
    public static function generateEntryFromData( array $entryData ) : PortfolioEntry
    {
        return new PortfolioEntry( $entryData[ 'slug' ], $entryData[ 'name' ], $entryData[ 'url' ], $entryData[ 'description' ] );
    }

    public function __construct( string $slug, string $name, string $url, string $description )
    {
        $this->slug = $slug;
        $this->name = $name;
        $this->url = $url;
        $this->description = $description;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getUrl() : string
    {
        return $this->url;
    }

    public function getDescription() : string
    {
        return $this->description;
    }

    private string $slug;
    private string $name;
    private string $url;
    private string $description;
}