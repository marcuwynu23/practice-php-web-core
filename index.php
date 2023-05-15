<?php

require __DIR__ . "/constants/constants.php";
require_once __DIR__ . "/controllers/HomeController.php";
require_once __DIR__ . "/controllers/AboutController.php";
require_once __DIR__ . "/controllers/ContactController.php";
require_once __DIR__ . "/controllers/ActivityController.php";



$request_uri = $_SERVER['REQUEST_URI'];



switch ($request_uri) {
	case "/":
		$homeController = new HomeController();
		$homeController->index();
		break;
	case "/about":
		$aboutController = new AboutController();
		$aboutController->index();
		break;

	case "/contact":
		$contactController = new ContactController();
		$contactController->index();
		break;

	case "/activities":
		$activityController = new ActivityController();
		$activityController->index();
		break;

	default:
		http_response_code(404);
		echo "404 Not Found.";
		break;
}
