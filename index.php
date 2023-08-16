<?php

		require_once 'classes/Automobile.php';
		require_once 'classes/AutomobileFactory.php';

		use SGSB\AutomobileFactory;

		$veyron = AutomobileFactory::create( 'Bugatti', 'Veyron' );

		print_r( $veyron->getMakeAndModel() ); // outputs "Bugatti Veyron"

		echo "\nhello";
