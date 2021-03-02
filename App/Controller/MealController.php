<?php
namespace App\Controller;

use App\Model\MealModel;
//use App\Model\UserModel;
use Vendor\Controller\Controller;


class MealController extends Controller{

    public function __construct()
    {
        $this->mealModel = new MealModel();
    }

    /**
     * Enregistre une catégorie dans la BDD
     *
     * @param array $data
     */
    public function createMeal(array $data)
    {
        $mealModel = new mealModel();
        $meal = $this->encodeChars($data);
        $mealModel->create($meal);

        header("location: index.php");
    }
    
}