<?php

require_once __DIR__ . "/../lib/libs.php";



class ContactController extends Controller
{
	function index()
	{
		$this->view("contact.view", []);
	}
}
