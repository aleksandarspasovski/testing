<?php 

class Database
{
	public $db;
	function __construct()
	{
        $db = new mysqli('localhost', 'root', 'homosapiens', 'testBoolean', '3308');
		$this->db = $db;
    }
}
