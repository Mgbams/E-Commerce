<?php

class AccessoiresController
{
    private $titrepage;
    private $msgAlert;
    private $msgSucces;
    private $accessoires;
    private $conn;
    private $shopAccessoires;
    private $accessoiresPagination;

    public function __construct()
    {
        $this->titrepage  = "";
        $this->msgAlert = "";
        $this->msgSucces = "";
        $this->conn = new Model();
    }
    public function displayProducts()
    { //products pagination
        $this->shopAccessoires =  $this->conn->getAllAccessoires(); // used to select all products with category as ACCESSOIRES to get a count of how many products we have in database
        if (isset($_GET['pageLinks'])) {
            $pageLinks = $_GET['pageLinks'];
        } else {
            $pageLinks = 1;
        }
        $num_per_page = 4;
        $start_row = ($pageLinks - 1) * $num_per_page;
        $this->accessoiresPagination = $this->conn->getAccessoiresPagination($start_row, $num_per_page); // used to state how many products should be displayed per page
    }





    public function manage()
    {
        $this->titrepage  = "Bienvenue sur KingsBay";
       
        $this->displayProducts();
        include(__DIR__ . "./../view/accessoires.php");
    }
}
