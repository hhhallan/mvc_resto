<?php
namespace App\Model;

use Vendor\Model\DbInterface;
use Vendor\Model\Query;

class UserModel extends Query
{
    public function saveUser($data)
    {
        try {
            $save = new DbInterface();
            $save->save($data, "user");
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}