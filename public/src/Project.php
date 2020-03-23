<?php

declare( strict_types = 1 );
namespace Waugh\Portfolio;

use WaughJ\WPPostThumbnail\WPPostThumbnail;
use WaughJ\WPPostThumbnail\WPPostThumbnailType;
use WaughJ\WPPostThumbnail\WPMissingPostThumbnailException;

class Project
{
    public function __construct( int $id )
    {
        $this->id = $id;
    }

    public function getTitle() : string
    {
        return get_the_title( $this->id );
    }

    public function getContent() : string
    {
        return get_the_content( null, false, $this->id );
    }

    public function getSource() : string
    {
        return ProjectPostType::getProjectSource( $this->id );
    }

    public function getThumbnail() : ?WPPostThumbnail
    {
        try
        {
            return new WPPostThumbnail( $this->id, [ 'class' => 'project-thumb-img', 'size' => 'thumbnail' ], WPPostThumbnailType::image() );
        }
        catch ( WPMissingPostThumbnailException $e )
        {
            return null;
        }
    }

    public function getPicture() : ?WPPostThumbnail
    {
        try
        {
            return new WPPostThumbnail( $this->id, [ 'img-attributes' => [ 'class' => 'project-thumb-img' ] ] );
        }
        catch ( WPMissingPostThumbnailException $e )
        {
            return null;
        }
    }

    public function getExcerpt() : string
    {
        return get_the_excerpt( $this->id );
    }

    public function getTools() : array
    {
        return array_map
        (
            fn( \WP_Term $term ) => new Tool( $term ),
            wp_get_object_terms( $this->id, 'project_tool', [ 'p' => $this->id, 'post_type' => 'project' ] )
        );
    }

    public function getUrl() : string
    {
        return get_permalink( $this->id );
    }

    private int $id;
}