<?php

function active_url( $value ) {
	if ( $_SERVER['REQUEST_URI'] === $value ) {
		echo 'bg-gray-900 text-white';
	} else {
		echo 'text-gray-300 hover:bg-gray-700 hover:text-white';
	}
}

// < ? php echo active_url( '/' ) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
