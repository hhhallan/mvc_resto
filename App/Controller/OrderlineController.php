<?php
namespace App\Controller;

use App\Model\OrderlineModel;
use Vendor\Controller\Controller;

class OrderlineController extends Controller{

    public function __construct()
    {
        $this->orderlineModel = new OrderlineModel();
    }

}