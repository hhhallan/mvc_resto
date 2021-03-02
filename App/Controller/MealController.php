<?php
namespace App\Controller;

use App\Model\MealModel;
use Core\Controller\Controller;

class MealController extends Controller{

    public function __construct()
    {
        $this->mealModel = new MealModel();
    }

}