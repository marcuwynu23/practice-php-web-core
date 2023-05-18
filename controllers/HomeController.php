<?php
require_once __DIR__ . "/../lib/libs.php";
require_once __DIR__ . "/../database/database.php";

class HomeController extends Controller
{

	function index()
	{
		$users = $this->conn->query("SELECT * FROM users")->fetch_all(MYSQLI_ASSOC);
		$this->view("home.view", [
			"test" => "hello world!",
			"users" => $users
		]);
	}
}
