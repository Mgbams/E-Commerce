<?php

class AdminController
{
    private $titrepage;
    private $msgAlert;
    private $formulaire;
    private $conn;
    

    public function __construct()
    {
        $this->titrepage  = "";
        $this->msgAlert = "";
        $this->formulaire = "";
        $this->conn = new Model;
    }


    public function manage()
    {
        $this->titrepage  = "Bienvenue sur KingsBay";
        
        include(__DIR__ . "./../view/admin.php");
    }
}