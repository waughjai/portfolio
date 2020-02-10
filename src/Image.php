<?php

declare( strict_types = 1 );
namespace WaughJ\Portfolio;

use WaughJ\FileLoader\FileLoader;

class Image
{
    public function __construct( string $localSource, string $altText )
    {
        $this->localSource = $localSource;
        $this->altText = $altText;
    }

    public function getSource() : string
    {
        return self::$loader->getSourceWithVersion( $this->localSource );
    }

    public function getAlt() : string
    {
        return $this->altText;
    }

    public static function init( string $rootUri, string $rootDirectory ) : void
    {
        self::$loader = new FileLoader
        ([
            'directory-url' => $rootUri,
            'directory-server' => $rootDirectory,
            'shared-directory' => 'images'
        ]);
    }

    private string $localSource;
    private string $altText;

    private static FileLoader $loader;
}