<?php
namespace App\Controller;

use App\Model\UserModel;
use Core\Controller\Controller;

class UserController extends Controller{

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function signup($data)
    {
        if (isset($data["email"])) {
            $user = $this->encodeChars($data);
            $user["password"] = password_hash($data["password"], PASSWORD_DEFAULT);
            $this->userModel->create($user);

            header("Location:index.php?page=login");
        }

        $this->render("auth.signupView");

    }

    public function login($data)
    {
        if (isset($data["email"])) {

            $user = $this->userModel->getUserByEmail($data["email"]);

            if ($user && password_verify($data["password"], $user->password)) {
                $_SESSION["user"] = $user;
                header("Location:index.php");
            } else {
                $error = "Utilisateur ou mot de passe incorrect.";
            }

        }
        $this->render("auth.loginView");

    }
}