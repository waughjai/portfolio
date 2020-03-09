<?php

declare( strict_types = 1 );
namespace Waugh\Portfolio;

use WaughJ\WPAdminMenuManager\WPAdminMenuManager;
use WaughJ\WPThemeImage\WPThemeImage;

class Header
{
    public function getNavigation() : array
    {
        return WPAdminMenuManager::getHeaderMenuList();
    }

    public function getLogo() : WPThemeImage
    {
        return new WPThemeImage( "jaimeson-waugh-logo.svg" );
    }
}