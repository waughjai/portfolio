<?php

declare( strict_types = 1 );
namespace WaughJ\Portfolio;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Template
{
    public static function generate( string $template, array $data = [] ) : string
    {
        return self::$engine->render( "{$template}.html.twig", $data );
    }

    public static function init( string $views_directory ) : void
    {
        $loader = new FilesystemLoader( $views_directory );
        self::$engine = new Environment
        (
            $loader,
            []//[ 'cache' => '/path/to/compilation_cache' ]
        );
    }

    private static Environment $engine;
}