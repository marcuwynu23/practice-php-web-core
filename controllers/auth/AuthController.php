<?php
require_once __DIR__ . "/../../lib/libs.php";
require_once __DIR__ . "/../../constants/constants.php";
require_once __DIR__ . "/../../services/auth.php";
require_once __DIR__ . "/../../database/database.php";




class AuthController extends Controller
{
	function renderLogin()
	{
		$this->view("auth/login.view", [
			"status" => null
		]);
	}
	function handleLogin()
	{
		try {
			//get username and password from client request
			$username = $_POST['username'];
			$password = $_POST['password'];

			$stmt = $this->conn->prepare_query("SELECT username,password FROM  users WHERE username = ? AND password = ?");
			$stmt->bind_param("s", $username, $password);
			$stmt->execute();


			echo $stmt->get_result();
		} catch (Exception $ex) {
			$this->view("error.view", [
				"status" => "Internal Server Error.Something to do with Exception."
			]);
		} catch (Error $ex) {
			$this->view("error.view", [
				"status" => "Internal Server Error.Something to do with Error."
			]);
		}
	}
}
