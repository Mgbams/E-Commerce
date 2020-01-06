<?php

class SignInController
{
    private $titrepage;
    private $msgAlert;
    private $msgSucces;
    private $conn;
    private $loginDetails;

    public function __construct()
    {
        $this->titrepage  = "";
        $this->msgAlert = "";
        $this->msgSucces = "";
        $this->conn = new Model();
    }

    public function signin()
    {
        if (isset($_POST['signin_email'])) {
            if (!empty($_POST['signin_email']) and !empty($_POST['mdp'])) {
                $this->loginDetails = $this->conn->getLogin($_POST['signin_email']);
                if ($this->loginDetails != false) { // That is if there exists a data in the database with the typed in email address
                    if (password_verify($_POST['mdp'], $this->loginDetails['passwords'])) {
                        $_SESSION['email'] = $this->loginDetails['email'];
                        $_SESSION['status'] = $this->loginDetails['status'];
                        $_SESSION['id'] = $this->loginDetails['customer_id'];
                        if($_SESSION['status'] == "Admin"){
                            header('location:?page=admin');
                            exit();
                        } else {
                            header('location:?page=cart');
                            exit();
                        }
                    } else {
                        echo "Mauvais mot de passe. Veuillez vérifier votre mot de passe";
                    }
                } else {
                    echo "Il n'y a aucun utilisateur avec cet e-mail";
                }
            } else if (empty($_POST['mdp']) and empty($_POST['signin_email'])) {// you must first test for both password and email if they are both empty if you want to catch all the errors
                echo "Veuillez saisir un e-mail et un mot de passe pour vous connecter";
            } else if (empty($_POST['signin_email'])) {
                echo "Veuillez entrer un email";
            } else if (empty($_POST['mdp'])) {
                echo "Veuillez entrer un mot de passe";
            }
        }
    }


    public function manage()
    {
        $this->titrepage = "Connectez-vous pour commencer vos achats.";
        $this->signin(); // calling the fuction Login to verify users identity
        include(__DIR__ . "./../view/signin.php");
    }
}
