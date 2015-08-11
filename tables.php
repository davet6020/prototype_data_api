<?php

class Tables 	{

	public function __construct()	{
		$string = file_get_contents(DATA_PATH . "/tablelist.json");
		$Tables = json_decode($string, true);
		echo json_encode($Tables);
	}

} // End Tables class
