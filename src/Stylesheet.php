<?php

declare( strict_types = 1 );
namespace WaughJ\Portfolio;

use WaughJ\FileLoader\FileLoader;

class Stylesheet
{
    public function __construct( string $localSource )
    {
        $this->localSource = $localSource;
    }

    public function getSource() : string
    {
        return self::$loader->getSourceWithVersion( $this->localSource );
    }

    public static function init( string $rootUri, string $rootDirectory ) : void
    {
        self::$loader = new FileLoader
        ([
            'directory-url' => $rootUri,
            'directory-server' => $rootDirectory,
            'shared-directory' => 'css',
            'extension' => 'css'
        ]);
    }

    private string $localSource;

    private static FileLoader $loader;
}