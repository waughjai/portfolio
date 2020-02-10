<?php

declare( strict_types = 1 );
namespace WaughJ\Portfolio;

class Text
{
    public static function startsWith( string $needle, string $haystack ) : bool
    {
        return substr( $haystack, 0, strlen( $needle ) ) === $needle;
    }

    public static function endsWith( string $needle, string $haystack ) : bool
    {
        return substr( $haystack, -strlen( $needle ) ) === $needle;
    }
}