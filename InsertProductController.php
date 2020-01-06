<?php

class InsertProductController
{
    private $titrepage;
    private $msgAlert;
    private $formulaire;

    public function __construct()
    {
        $this->titrepage  = "";
        $this->msgAlert = "";
        $this->formulaire = "";
    }


    public function manage()
    {
        $this->titrepage  = "Bienvenue sur KingsBay";
        include(__DIR__ . "./../view/insert_product.php");
    }
}