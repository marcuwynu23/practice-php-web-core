<?php
//implement imports here...
require_once __DIR__ . "/services/auth.php";
require_once __DIR__ . "/controllers/auth/AuthController.php";

//implements features or page controllers imports.
require_once __DIR__ . "/controllers/HomeController.php";
require_once __DIR__ . "/controllers/AboutController.php";
require_once __DIR__ . "/controllers/ContactController.php";
require_once __DIR__ . "/controllers/ActivityController.php";


/// set request uri or client requested route here in a request_uri variable
$request_uri = $_SERVER['REQUEST_URI'];

// check if what route or request_uri client needed
switch ($request_uri) {
	case "/":
		//auth guard here for authentication protection		
		// if (!is_authenticated()) header("Location: /auth/login");
		//implement home Controller here...
		$homeController = new HomeController();
		$homeController->index();
		break;
	case "/about":
		//auth guard here for authentication protection		
		if (!is_authenticated()) header("Location: /auth/login");
		//implement about Controller here...
		$aboutController = new AboutController();
		$aboutController->index();
		break;

	case "/contact":
		//auth guard here for authentication protection		
		if (!is_authenticated()) header("Location: /auth/login");
		//implement contact Controller here...
		$contactController = new ContactController();
		$contactController->index();
		break;

	case "/activities":
		//auth guard here for authentication protection		
		if (!is_authenticated()) header("Location: /auth/login");

		//implement activity Controller here...
		$activityController = new ActivityController();
		$activityController->index();
		break;

		//public routes
	case "/auth/login":
		//implement login Controller here...
		$auth = new AuthController();
		//set action 
		$action = $_SERVER["REQUEST_METHOD"];
		//check if post action
		if ($action == 'POST') {
			$auth->handleLogin();
		} else {
			//otherwise show login view
			$auth->renderLogin();
		}
		break;


	default:
		//implement not found route here...
		http_response_code(404);
		echo "404 Routes Not Found.";
		break;
}
