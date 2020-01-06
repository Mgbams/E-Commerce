<?php

class HomeController
{
    private $titrepage;
    private $msgAlert;
    private $msgSucces;
    private $conn;
    private $products;

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
        $this->products =  $this->conn->selectProducts();
        include(__DIR__ . "./../view/home.php");
    }
}
