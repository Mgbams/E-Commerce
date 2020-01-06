 <?php 

class AddProductCategoryController
{
    private $titrepage;
    private $msgAlert;
    private $conn;

    public function __construct()
    {
        $this->titrepage  = "";
        $this->msgAlert = "";
        $this->conn = new Model();
    }


    public function manage()
    {
        $this->titrepage  = "Bienvenue sur KingsBay";
        
        
        include(__DIR__ . "./../view/add_product_category.php");
    }
}