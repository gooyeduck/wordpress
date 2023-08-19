<?php
require 'functions.php';

$url = parse_url( $_SERVER['REQUEST_URI'] )['path'];
// var_dump( parse_url( $_SERVER['REQUEST_URI'] ) );
$routes = array(

	'/'            => 'controllers/index.php',
	'/about.php'   => 'controllers/about.php',
	'/contact.php' => 'controllers/contact.php',
);

function abort( $code = 404 ) {
	http_response_code( $code );
	require "controllers/{$code}.php";
	die();
}

function router_to_url( $url, $routes ) {
	if ( array_key_exists( $url, $routes ) ) {
		require $routes[ $url ];
	} else {
		abort();
	}
}

router_to_url( $url, $routes );
