<?php


use App\Controller\HomeController;
use App\Controller\MealController;
use App\Controller\UserController;

if (!empty($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = "home";
}

switch ($page) {
    case 'home':
        $home = new HomeController();
        $home->home();
        break;
    case 'listMeal':
        $meal = new MealController();
        $meal->listMeal($_GET["Id"]);
        break;
    // case 'meal':
    //     $article = new ArticleController();
    //     $article->listArticle($_GET["id"]);
    //     break;
    case "registration":
        $user = new UserController();
        $user->signup($_POST);
        break;
    case "login":
        $user = new UserController();
        $user->login($_POST);
        break;
}