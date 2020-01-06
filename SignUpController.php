<?php

class SignUpController
{
    private $titrepage;
    private $msgAlert;
    private $msgSucces;
    private $conn;
    private $pays;
    private $verifier;
    private $lastnameErr;
    private $firstnameErr;
    private $emailErr;
    private $villeErr;
    private $postalErr;
    private $addrErr;

    public function __construct()
    {
        $this->titrepage  = "";
        $this->msgAlert = "";
        $this->msgSucces = "";
        $this->conn = new Model();
        $this->verifier = new FormVerification();
        $this->lastnameErr = $this->firstnameErr = $this->emailErr = $this->villeErr =  $this->postalErr = $this->addrErr = "";
    }

    public function formNettoyage()
    {
        if (isset($_POST['firstname'])) 
        {
            $this->firstname = $this->verifier->cleaning($_POST['firstname']);
            $this->lastname = $this->verifier->cleaning($_POST['lastname']);
            $this->email =  $this->verifier->cleaning($_POST['email']);
            $this->ville =  $this->verifier->cleaning($_POST['ville']);
            $this->postal =  $this->verifier->cleaning($_POST['postal']);
            $this->address =  $this->verifier->cleaning($_POST['address']);

            if ($this->verifier->customer_name_verification($this->firstname) == false) {
                $this->firstnameErr = "<span style='color:red;'>** </span>Mauvaise format entre pour le prenom";
            } else {
                $this->firstname;
            }
            if ($this->verifier->customer_name_verification($this->lastname) == false) {
                $this->lastnameErr = "<span style='color:red;'>** </span>Mauvaise format entre pour le nom";
            } else {
                $this->lastname;
            }
            if ($this->verifier->email_verification($this->email) == false) {
                $this->emailErr = "<span style='color:red;'>** </span>Mauvaise Email, Essayez d'entrer une valid email";
            } else {
                $this->email;
            }
            if ($this->verifier->city_verification($this->ville) == false) {
                $this->villeErr = "<span style='color:red;'>** </span>Mauvaise Entrer pour la ville";
            } else {
                $this->ville;
            }
            if ($this->verifier->zip_verification($this->postal) == false) {
                $this->postalErr = "<span style='color:red;'>** </span>Corriger le code Postal";
            } else {
                $this->postal;
            }
            if ($this->verifier->address_verification($this->address) == false) {
                $this->addrErr = "<span style='color:red;'>** </span>Mauvaise format d'address";
            } else {
                $this->address;
            }
        }
    }


    public function selectAllUser()
    {
        if (isset($_POST['email'])) {
            return $this->conn->selectUsers($_POST['email']);
        }
    }

    public function insertUser()
    {
        if (isset($_POST['mdp'])) {
            if (
                !empty($_POST['mdp']) and !empty($_POST['mdp2']) and !empty($_POST['firstname']) and !empty($_POST['lastname']) and !empty($_POST['email']) and !empty($_POST['pays']) and !empty($_POST['ville']) and !empty($_POST['postal']) and !empty($_POST['phone']) and !empty($_POST['address']) and !empty($_POST['sex']) and
                !empty($_FILES['signup_img'])
            ) {
                if ($_POST['mdp'] == $_POST['mdp2']) {
                    $hashed_password = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
                    $fileName = $_FILES['signup_img']['name'];
                    $fileTmp = $_FILES['signup_img']['tmp_name'];
                    $fileExt = explode('.', $fileName);
                    $extActual = strtolower(end($fileExt));
                    $allowedExt = array('png', 'jpg', 'jpeg');
                    if (in_array($extActual, $allowedExt)) {
                        move_uploaded_file($fileTmp, 'src/public/profile_images/' . $fileName);
                        $emailresult = $this->selectAllUser();
                        if ($emailresult[0] == 0) { // confirmer s'il y a deja un client avec l'email entre dans le formuilaire
                            $this->conn->insertCustomer($_POST['firstname'], $_POST['lastname'], $_POST['email'], $hashed_password, $_POST['pays'], $_POST['ville'], $_POST['postal'], $_POST['phone'], $_POST['address'], $_POST['sex'], $fileName);
                            header('location:?page=signup');
                            exit();
                        } else {
                            echo "Cette addresse mail existe deja dans la base des donnees";
                        }
                    } else {
                        echo "choisir une bonne format d'image entre 'jpg', 'jpeg' ou png";
                    }
                } else {
                    echo "votre mot de passe ne corresponds pas";
                }
            } else {
                echo "Remplissez tous les champs";
            }
        }
    }

    public function manage()
    {
        $this->titrepage  = "Bienvenue sur KingsBay";
        $this->pays = $this->conn->getAllCountries();
        $this->insertUser(); // appel la function d'insertion des clients
        include(__DIR__ . "./../view/signup.php");
    }
}
