<?php
namespace App\Controller;

use App\Model\UserModel;
use Vendor\Controller\Controller;
use Vendor\Manager\PasswordEncoderManager;

class UserController extends Controller{

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->encoder = new PasswordEncoderManager();
    }

    public function signup()
    {
        if (isset($_POST["Email"])) {
            // Hasher le password
            $_POST["Password"] = $this->encoder->passwordEncode($_POST["Password"]);
            // Appeler le userModel
            // Enregistrer les données
            // Encoder les informations
            $this->userModel->saveUser($_POST);
            $this->redirectToRoute("login");
        }
        $this->render("user.signup");
    }

    public function login()
    {
        $error = "";
        // Récupérer les informations avec $_POST
        if(isset($_POST["Email"]) && isset($_POST["Password"])){
            // Recherche un utilisateur dans la BDD
            $user = $this->userModel->findOneBy(["Email" => htmlspecialchars($_POST["Email"])]);
            // S'il y a un utilisateur je vérifie le password
            if ($user) {
                // Si ok, je le connecte
                if($this->encoder->passwordVerify($_POST["Password"], $user->getPassword())){
                    $_SESSION["user"]->FirstName = $user->getFirstName();
                    $_SESSION["user"]->LastName = $user->getLastName();
                    $_SESSION["user"]->Email = $user->getEmail();

                    $this->redirectToRoute("home");
                } else {
                    $error = "Erreur de Password";
                }
            } else {
                $error = "Cet utilisateur n'existe pas.";
            }
        }

        $this->render("user.login", [
            "error" => $error
        ]);
    }

    public function logout()
    {
        session_destroy();
        $this->redirectToRoute("home");
    }
}