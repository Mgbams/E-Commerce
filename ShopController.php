<?php

class ShopController
{
    
    private $titrepage;
    private $msgAlert;
    private $msgSucces;
    private $shopProducts;
    private $pagination;
    private $conn;
    private $total_page;

    public function __construct()
    {
        $this->titrepage  = "";
        $this->msgAlert = "";
        $this->msgSucces = "";
        $this->conn = new Model();
    }

    public function shoppingCart()
    {
        // Check if add to cart button has been clicked
        if(isset($_POST['add_to_cart'])){
            if(isset($_SESSION["cart"])){
                $products_array_id = array_column($_SESSION['cart'], "product_id");
                if(in_array($_POST['id'], $products_array_id)){
                    echo "Le produit est deja dans le panier";
                } else {
                    $count = count($_SESSION['cart']);
                    $products_array = array(
                        'product_id' => $_POST['id']
                    );
                    $products_array = $_SESSION['cart'][$count];
                    var_dump($_SESSION['cart']);
                }
            } else {
                $products_array = array(
                    'product_id' => $_POST['id']
                );
                // Create new session variable
                 $_SESSION['cart'][0] = $products_array;
            }
            
        }
       
    }

    public function displayProducts()
    { //products pagination
        $this->shopProducts =  $this->conn->getAllProducts(); // used to select all products to get a count of how many products we have in database
        if (isset($_GET['pageLinks'])) {
            $pageLinks = $_GET['pageLinks'];
        } else {
            $pageLinks = 1;
        }
        $num_per_page = 4;
        $start_row = ($pageLinks - 1) * $num_per_page;
        $this->pagination = $this->conn->getProductsPagination($start_row, $num_per_page);// used to state how many products should be displayed per page
    }


    public function manage()
    {
        $this->titrepage  = "Bienvenue sur KingsBay";
        $this->displayProducts();
        $this->shoppingCart();
        include(__DIR__ . "./../view/shop.php");
    }
}
