<?php
require_once __DIR__ . "/../constants/constants.php";

class DBConnection
{
	private $conn;

	public function __construct()
	{
		try {
			$this->conn = new mysqli("localhost", DB_USERNAME, DB_PASSWORD, "test");
		} catch (Exception $ex) {
			echo $ex;
		} catch (Error $err) {
			echo $err;
		}
	}


	public function query($query_string)
	{
		$stmt =	$this->conn->query($query_string);
		return $stmt;
	}
	public function prepare_query($query_string)
	{
		$stmt = $this->conn->prepare($query_string);
		return $stmt;
	}
}
