<?php 

class Database
{
	public $db;
	function __construct()
	{
        $db = new mysqli('localhost', 'root', '', 'testBoolean', '3308');
		$this->db = $db;
    }
}
