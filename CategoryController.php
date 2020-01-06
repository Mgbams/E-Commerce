<?php

class CategoryController
{
    private $titrepage;
    private $conn;

    public function __construct()
    {
        $this->titrepage  = "";
        $this->conn = new Model;
    }

    public function manage()
    {
        var_dump("helloooooooooooo");
        $this->titrepage  = "Bienvenue sur KingsBay";
        
        if(isset($_GET["category_title"])){
            var_dump("helloooooooooooo");
            $title = $_GET["category_title"];
            $description = $_GET["category_desc"];
            $this->conn->insertCategory($_GET["category_title"], $_GET["category_desc"]);
            var_dump("helloooooooooooo");
        }
        include(__DIR__ . "./../view/categories.php");
    }
}