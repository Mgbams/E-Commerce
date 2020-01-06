<?php

class ContactController
{
    private $titrepage;
    private $conn;
    private $products;

    public function __construct()
    {
        $this->titrepage  = "";
        $this->conn = new Model();
    }


    public function manage()
    {
        $this->titrepage  = "Bienvenue sur le page de contact de KingsBay";
       
        include(__DIR__ . "./../view/contact.php");
    }
}