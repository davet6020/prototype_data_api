<?php
class Datainfo  {
	private $_params;

	public function __construct($params)    {
		$this->_params = $params;
	}
	
	public function getTablesList()    {
		// http://localhost:8888/?controller=datainfo&action=getTablesList
		$string = file_get_contents(DATA_PATH . "/tablelist.json");
		$Tables = json_decode($string, true);
		return $Tables;
	}

	public function getAuthorsSchema()  {
		// http://localhost:8888/?controller=datainfo&action=getAuthorsSchema
		$string = file_get_contents(DATA_PATH . "/authors_tbl.json");
		$Authors = json_decode($string, true);
		return $Authors;
	}

	public function getBooksSchema()  {
		// http://localhost:8888/?controller=datainfo&action=getBooksSchema
		$string = file_get_contents(DATA_PATH . "/books_tbl.json");
		$Books = json_decode($string, true);
		return $Books;
	}

	public function getPublishersSchema()  {
		// http://localhost:8888/?controller=datainfo&action=getPublishersSchema
		$string = file_get_contents(DATA_PATH . "/publishers_tbl.json");
		$Publishers = json_decode($string, true);
		return $Publishers;
	}

	public function getJoins()  {
		// http://localhost:8888/?controller=datainfo&action=getJoins
		$string = file_get_contents(DATA_PATH . "/joins.json");
		$Joins = json_decode($string, true);
		return $Joins;
	}

	public function getWhereComparisons()	{
		// http://localhost:8888/?controller=datainfo&action=getWhereComparisons
		$string = file_get_contents(DATA_PATH . "/comparisons.json");
		$Comparisons = $Joins = json_decode($string, true);
		return $Comparisons;
	}

}	// End of class Datainfo