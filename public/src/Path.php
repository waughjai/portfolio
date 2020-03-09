<?php

declare( strict_types = 1 );
namespace Waugh\Portfolio;

class Path
{
    public function getHome() : string
    {
        return get_home_url();
    }
}