<?php
	// Sets the path to the data as pwd + /data.
	define('DATA_PATH', realpath(dirname(__FILE__).'/data'));

	try {
		// Grab all params from the GET/POST request.
		$params = $_REQUEST;

		// First letter of the controller should always be capitalized
		$controller = ucfirst(strtolower($params['controller']));

		// get the rest action specified in the GET/POST.
		$action = strtolower($params['action']);

		// Check if the controller exists. if not, throw an exception
		if( file_exists("controllers/{$controller}.php") ) {
			include_once "controllers/{$controller}.php";
		} else {
			throw new Exception('Controller is invalid.');
		}

		// Instantiate the controller, and pass it the params from the request.
		$controller = new $controller($params);

		// Verify the action exists in the controller. if not, throw an exception.
		if( method_exists($controller, $action) === false ) {
			throw new Exception('Action is invalid.');
		}

		// Execute the action
		$result['data'] = $controller->$action();
		$result['success'] = true;

	} catch( Exception $e ) {
			$result = array();
			$result['success'] = false;
			$result['errormsg'] = $e->getMessage();
	}

	// JSON encode the result of the API call.
	echo json_encode($result);
	exit();
