<?php

declare( strict_types = 1 );
namespace WaughJ\Portfolio;

class PortfolioSection
{
    public static function generateBasicSection( string $slug, string $name, array $entries ) : PortfolioSection
    {
        return new PortfolioSection( $slug, $name, $entries );
    }

    public function __construct( string $slug, string $name, array $entryData )
    {
        $this->slug = $slug;
        $this->name = $name;
        $this->entries = self::generateEntries( $entryData );
    }

    public function getContent() : string
    {
        return Template::generate( 'partials/basic-section', [ 'section' => $this ] );
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getEntries() : array
    {

    }

    private static function generateEntries( array $entryData ) : array
    {
        return array_map
        (
            fn( array $entry ) => PortfolioEntry::generateEntryFromData( $entry ),
            $entryData
        );
    }

    private string $slug;
    private string $name;
}