<?php

class AutresController
{
    private $titrepage;
    private $msgAlert;
    private $msgSucces;
    private $autres;
    private $conn;
    private $shopAutres;
    private $autresPagination;    

    public function __construct()
    {
        $this->titrepage  = "";
        $this->msgAlert = "";
        $this->msgSucces = "";
        $this->conn = new Model();
    }

    public function displayProducts()
    { //products pagination
        $this->shopAutres =  $this->conn->getAllAutres(); // used to select all products with category as enfants to get a count of how many products we have in database
        if (isset($_GET['pageLinks'])) {
            $pageLinks = $_GET['pageLinks'];
        } else {
            $pageLinks = 1;
        }
        $num_per_page = 4;
        $start_row = ($pageLinks - 1) * $num_per_page;
        $this->autresPagination = $this->conn->getAutresPagination($start_row, $num_per_page); // used to state how many products should be displayed per page
    }


    public function manage()
    {
        $this->titrepage  = "Bienvenue sur KingsBay";
        $this->displayProducts();
        include(__DIR__ . "./../view/autres.php");
    }
}
