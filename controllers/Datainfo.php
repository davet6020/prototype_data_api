<?php

class Datainfo  {

	private $uriGetParam = null;

	public function getData($uriGetParam)	{
		if(file_exists(DATA_PATH . "/{$uriGetParam}.json"))	{
				$string = file_get_contents(DATA_PATH . "/{$uriGetParam}.json");
				$result = json_decode($string, true);
		}	else 	{
				$result = 'no such file exists.';
		}
		return $result;
	}


	public function allData()	{
		$doclist = [];
		$result = [];

		$files = scandir(DATA_PATH);	// Scan list of files in directory DATA_PATH

		// Strip out . and .. from file listing
		foreach($files as $file)	{
			if ($file != "." && $file != "..") {
				$doclist[] = $file;
			}
		}

		// Build array of contents of all existing files in DATA_PATH
		foreach($doclist as $doc)	{
			if(file_exists(DATA_PATH . "/{$doc}"))	{
					$string = file_get_contents(DATA_PATH . "/{$doc}");
					$result[] = json_decode($string, true);
			}	else 	{
					$result = 'no such file exists.';
			}
		}

		return $result;
	}


}	// End of class Datainfo