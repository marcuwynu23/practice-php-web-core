<?php

function is_authenticated()
{
	session_start();
	if (!isset($_SESSION['user'])) {
		return false;
	}
	return true;
}



class AuthHandler
{
	private $conn;
	function __construct($conn)
	{
		if ($conn != null) {
			$this->conn = $conn;
		} else {
			echo "connection null.";
		}
	}
	public function authenticate($username, $password)
	{
		//handle query for users
		$stmt = $this->conn->prepare_query("SELECT username,password FROM test.users WHERE username = ? AND password = ?");
		//bind username and password to the statements
		$stmt->bindValue(1, $username);
		$stmt->bindValue(2, $password);
		//execute the statement
		$stmt->execute();
		//check if user and password matched and found
		$is_authenticated = $stmt->rowCount() > 0;
		//close cursor
		$stmt->closeCursor();
		//return result
		return $is_authenticated;
	}
}
