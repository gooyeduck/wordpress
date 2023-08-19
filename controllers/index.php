<?php
$books = array(
	array(
		'name'         => 'Book1',
		'author'       => 'author1',
		'releasedYear' => 2001,
		'purchseUrl'   => 'https://example.com',
	),
	array(
		'name'         => 'Book2',
		'author'       => 'author3',
		'releasedYear' => 2001,
		'purchseUrl'   => 'https://example.com',
	),
	array(
		'name'         => 'Book3',
		'author'       => 'author3',
		'releasedYear' => 2003,
		'purchseUrl'   => 'https://example.com',
	),
	array(
		'name'         => 'Book4',
		'author'       => 'author4',
		'releasedYear' => 2002,
		'purchseUrl'   => 'https://example.com',
	),
);

function filter( $items, $func ) {
	$filtered_items = array();
	foreach ( $items as $item ) {
		if ( $func( $item ) ) {
			$filtered_items[] = $item;
		}
	}
	return $filtered_items;
}

$filtered_books = array_filter(
	$books,
	function( $book ) {
		return $book['releasedYear'] === 2001;
	}
);
$heading        = 'Home Page';
require './pages/index.page.php';
