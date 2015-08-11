<?php

	// Sets the path to the data as pwd + /data.
	define('DATA_PATH', realpath(dirname(__FILE__).'/data'));

	include 'routes/route.php';
	include 'controllers/Datainfo.php';
	
	$route = new Route();
	
	// Add in additional routes other than the .json files.
	$route->add('/about', 'About');
	$route->add('/contact', 'Contact');

	echo '<pre>';
	$route->submit();

	exit();
