<?php

class DetailsController
{
    private $titrepage;
    private $msgAlert;
    private $msgSucces;
    private $productDetails;
    private $conn;
    private $product_suggestions;
    private $product_complete_info;

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
        if (isset($_GET["detailsID"])) {
            $this->productDetails = $this->conn->getDetailsProducts($_GET["detailsID"]);
            $this->product_complete_info = $this->conn->getProductsBeforeSuggesting($_GET["detailsID"]); //select the clicked products details and use the informations obtained from it as parameters for the query below
            //var_dump($this->product_complete_info);
            $this->product_suggestions = $this->conn->getProductsSuggestions($_GET["detailsID"], $this->product_complete_info["p_cat_title"], $this->product_complete_info["cat_title"]);// used to display three similar products to the one selected by the customer
        }

        include(__DIR__ . "./../view/details.php");
    }
}
