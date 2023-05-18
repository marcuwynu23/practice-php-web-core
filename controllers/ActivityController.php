<?php
require_once __DIR__ . "/../lib/libs.php";


class ActivityController extends Controller
{
	function index()
	{
		$this->view("activity.view", []);
	}
}
