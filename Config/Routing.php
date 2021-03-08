<?php

use App\Controller\MealController;
use App\Controller\UserController;

$page ="home";
if (isset($_GET["page"])) {
    $page = $_GET["page"];
}

switch ($page) {
    case 'home':
        $controller = new MealController();
        $controller->home();
        break;
    case 'signup':
        $controller = new UserController();
        $controller->signup();
        break;
    case 'login':
        $controller = new UserController();
        $controller->login();
        break;
    case 'logout':
        $controller = new UserController();
        $controller->logout();
        break;
}