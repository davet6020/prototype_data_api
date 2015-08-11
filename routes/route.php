<?php

class Route 	{

	private $_uri = [];
	private $_method = [];

	/** Builds the urls for the collection
	*/
	public function add($uri, $method = null)	{
		$this->_uri[] = '/' . trim($uri, '/');

		if($method != null)	{
			$this->_method[] = $method;
		}
	}

	public function submit()	{
		$data = new Datainfo();

		// if there is a GET uri set it, otherwise use doc root.
		// $uriGetParam = isset($_GET['uri']) ? '/' . $_GET['uri'] : '/';
		$uriGetParam = isset($_GET['uri']) ? $_GET['uri'] : '/';

		if($uriGetParam == '/')	{
				$result = $data::allData();
		} else 	{
				$result = $data::getData($uriGetParam);	
		}
		
		echo json_encode($result);
	}


}	// End of class Route
