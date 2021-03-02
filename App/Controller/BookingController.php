<?php
namespace App\Controller;

use App\Model\BookingModel;
use Core\Controller\Controller;

class BookingController extends Controller{

    public function __construct()
    {
        $this->bookingModel = new BookingModel();
    }

}