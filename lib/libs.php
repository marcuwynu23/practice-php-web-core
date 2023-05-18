<?php

require_once __DIR__ . "/../constants/constants.php";
require_once __DIR__ . "/../database/database.php";

class Controller
{
	public $conn;
	function __construct()
	{
		$this->conn = new DBConnection();
	}
	function view($view_file, $content)
	{
		extract($content);
		ob_start();
		require_once VIEW_DIR . "/" . $view_file . ".php";
	}
}
