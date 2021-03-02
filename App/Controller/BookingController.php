<?php
namespace App\Controller;

use App\Model\BookingModel;
use Vendor\Controller\Controller;

class BookingController extends Controller{

    public function __construct()
    {
        $this->bookingModel = new BookingModel();
    }

}