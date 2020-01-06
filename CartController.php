<?php
session_destroy();
class CartController
{
    private $titrepage;
    private $msgAlert;
    private $msgSucces;
    private $conn;

    public function __construct()
    {
        $this->titrepage  = "";
        $this->msgAlert = "";
        $this->msgSucces = "";
        $this->conn = new Model();
    }

    

    public function manage()
    {
        $this->titrepage  = "Bienvenue sur KingsBay";
        if(!isset($_SESSION['email'])){
            header('location:?page=home');
            exit();
        }
        include(__DIR__ . "./../view/cart.php");
    }
}
