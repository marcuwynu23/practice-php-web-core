<?php


require_once __DIR__ . "/../lib/libs.php";
class AboutController extends Controller
{
	function index()
	{
		$this->view('about.view', []);
	}
}
