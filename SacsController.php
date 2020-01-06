<?php

class SacsController
{
    private $titrepage;
    private $msgAlert;
    private $msgSucces;
    private $sacs;
    private $conn;
    private $shopSacs;
    private $sacsPagination;

    public function __construct()
    {
        $this->titrepage  = "";
        $this->msgAlert = "";
        $this->msgSucces = "";
        $this->conn = new Model();
    }

    public function displayProducts()
    { //products pagination
        $this->shopSacs =  $this->conn->getAllSacs(); // used to select all products with category as SACS to get a count of how many products we have in database
        if (isset($_GET['pageLinks'])) {
            $pageLinks = $_GET['pageLinks'];
        } else {
            $pageLinks = 1;
        }
        $num_per_page = 4;
        $start_row = ($pageLinks - 1) * $num_per_page;
        $this->sacsPagination = $this->conn->getSacsPagination($start_row, $num_per_page); // used to state how many products should be displayed per page
    }


    public function manage()
    {
        $this->titrepage  = "Bienvenue sur KingsBay";

        $this->displayProducts();
        include(__DIR__ . "./../view/sacs.php");
    }
}
