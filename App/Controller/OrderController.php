<?php
namespace App\Controller;

use App\Model\OrderModel;
use Vendor\Controller\Controller;

class OrderController extends Controller{

    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }

}