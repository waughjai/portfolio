<?php

declare( strict_types = 1 );
namespace WaughJ\Portfolio;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require_once( __DIR__ . '/vendor/autoload.php' );

Template::init( __DIR__ . '/views' );

$request = Request::createFromGlobals();
Assets::init( $request->server );

$response = new Response();
$response->setStatusCode( 200 );
$response->headers->set( 'Content-Type', 'text/html' );
$response->setMaxAge( 10 );
$response->setContent( PageTemplate::generate( 'index', [ 'portfolio' => new Portfolio() ] ) );
$response->send();