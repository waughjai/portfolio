<?php

declare( strict_types = 1 );
namespace Waugh\Portfolio;

class Tool
{
    public function __construct( \WP_Term $term )
    {
        $this->name = $term->name;
        $this->url = get_term_link( $term, 'project_tool' );
    }

    public function getTitle() : string
    {
        return $this->name;
    }

    public function getUrl() : string
    {
        return $this->url;
    }

    private $name;
    private $url;
}