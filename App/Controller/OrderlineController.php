<?php
namespace App\Controller;

use App\Model\OrderlineModel;
use Core\Controller\Controller;

class OrderlineController extends Controller{

    public function __construct()
    {
        $this->orderlineModel = new OrderlineModel();
    }

}