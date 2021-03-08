<?php
namespace App\Controller;

use App\Model\MealModel;
use Vendor\Controller\Controller;

class MealController extends Controller{

    public function home()
    {
        $mealModel = new MealModel();
        $meals = $mealModel->findAll();

        $this->render("home", [
            "meals" => $meals
        ]);
    }
}