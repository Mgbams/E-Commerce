<?php
require(__DIR__ . "./../service/bdd.php");

class Model
{
    private $bdd;
    private $accessBdd;

    public function __construct()
    {
        $this->accessBdd = new Bdd();
        $this->bdd = $this->accessBdd->getBdd();
    }

    // selectionner les derniers 8 produits de la table de produit pour afficher sur la page HOME
    public function selectProducts()
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products ORDER BY product_id DESC LIMIT 8");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner tous les produits de la table de produit pour le calcul de COUNT pour pagination sur la page SHOP
    public function getAllProducts()
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner tous les produits de la table de produit pour afficher sur la page SHOP
    public function getProductsPagination($startrow, $num_products)
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products LIMIT $startrow, $num_products");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner les pays pour afficher sur page de SIGNUP
    public function getAllCountries()
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM countries");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner un produit avec son ID pour afficher sur la page DETAILS
    public function getDetailsProducts($id)
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products WHERE product_id = ?");
            $request->execute(array(
                $id
            ));
            return $solution = $request->fetch();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner TOUS des suggestions des produit qui pourrait aussi plaire le client sur DETAILs page
    public function getProductsBeforeSuggesting($id)
    {
        try { // Joining the three tables so as to select all info about a given product
            $request = $this->bdd->prepare("SELECT * FROM products 
            LEFT JOIN categories ON products.cat_id = categories.cat_id
            LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id 
            WHERE product_id = ?");
            $request->execute(array(
                $id
            ));
            return $solution = $request->fetch();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner des suggestions des produit qui pourrait aussi plaire le client sur DETAILs page
    public function getProductsSuggestions($id, $product_category, $cat_title)
    {
        try { // Joining the three tables so as to select category titles and product category titles
            $request = $this->bdd->prepare("SELECT * FROM products 
            LEFT JOIN categories ON products.cat_id = categories.cat_id
            LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id 
            WHERE NOT product_id = ? AND p_cat_title = ? AND cat_title = ?
            ORDER BY product_id DESC LIMIT 3");
            $request->execute(array(
                $id,
                $product_category,
                $cat_title
            ));
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }


    // Inserer dans la table de categorie
    public function insertCategory($title, $desc)
    {
        try {
            $request = $this->bdd->prepare('INSERT INTO categories(cat_title, cat_desc) VALUES(?, ?)');
            return $request->execute(array(
                $title,
                $desc
            ));
            echo "inserted well with lots of success that i cant see";
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // Inserer dans la table de products_categorie
    public function insertProductCategory($titre, $desc)
    {
        try {
            $request = $this->bdd->prepare('INSERT INTO product_categories(p_cat_title, p_cat_desc) VALUES(?, ?)');
            return $request->execute(array(
                $titre,
                $desc
            ));
            echo "inserted well with lots of success that i cant see";
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // Inserer des clients dans la table de customers
    public function insertCustomer($fname, $lname, $mail, $pass, $country, $city, $zip, $tel, $addr, $sex, $img)
    {
        try {
            $request = $this->bdd->prepare('INSERT INTO customers(firstname, lastname, email, passwords, country, city, zipcode, telephone, adresse, sex, img) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
            return $request->execute(array(
                $fname,
                $lname,
                $mail,
                $pass,
                $country,
                $city,
                $zip,
                $tel,
                $addr,
                $sex,
                $img
            ));
            echo "inserted well with lots of success that i cant see";
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner tous les utilisateurs avec l'email donne
    public function selectUsers($mail)
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM customers WHERE email = ?");
            $request->execute(array(
                $mail
            ));
            return $solution = $request->fetch();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }


    // selectionner des produits avec les categories de produits comme VESTES pour la page vestes.php
    public function getVestes()
    {
        try { // Joining the three tables so as to select all vestes categories
            $request = $this->bdd->prepare("SELECT * FROM products 
            LEFT JOIN categories ON products.cat_id = categories.cat_id
            LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id 
            WHERE p_cat_title = ? ");
            $request->execute(array(
                "VESTES"
            ));
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner des produits avec les categories de produits comme ACCESSOIRES pour la page accessoires.php
    public function getAccessoires()
    {
        try { // Joining the three tables so as to select all accessoires categories
            $request = $this->bdd->prepare("SELECT * FROM products 
              LEFT JOIN categories ON products.cat_id = categories.cat_id
              LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id 
              WHERE p_cat_title = ? ");
            $request->execute(array(
                "ACCESSOIRES"
            ));
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner des produits avec les categories de produits comme CHAUSSURES pour la page chaussures.php
    public function getChaussures()
    {
        try { // Joining the three tables so as to select all chaussures categories
            $request = $this->bdd->prepare("SELECT * FROM products 
               LEFT JOIN categories ON products.cat_id = categories.cat_id
               LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id 
               WHERE p_cat_title = ? ");
            $request->execute(array(
                "CHAUSSURES"
            ));
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner des produits avec les categories de produits comme SACS pour la page sacs.php
    public function getSacs()
    {
        try { // Joining the three tables so as to select all sacs categories
            $request = $this->bdd->prepare("SELECT * FROM products 
               LEFT JOIN categories ON products.cat_id = categories.cat_id
               LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id 
               WHERE p_cat_title = ? ");
            $request->execute(array(
                "SACS"
            ));
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner des produits avec les categories de produits comme SHIRTS pour la page shirts.php
    public function getShirts()
    {
        try { // Joining the three tables so as to select all shirts categories
            $request = $this->bdd->prepare("SELECT * FROM products 
                LEFT JOIN categories ON products.cat_id = categories.cat_id
                LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id 
                WHERE p_cat_title = ? ");
            $request->execute(array(
                "T-SHIRT"
            ));
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner des produits avec les categories de produits comme HOMMES pour la page hommes.php
    public function getHommes()
    {
        try { // Joining the three tables so as to select all hommes categories
            $request = $this->bdd->prepare("SELECT * FROM products 
                LEFT JOIN categories ON products.cat_id = categories.cat_id
                LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id 
                WHERE cat_title = ? ");
            $request->execute(array(
                "HOMMES"
            ));
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner des produits avec les categories de produits comme FEMMES pour la page femmes.php
    public function getFemmes()
    {
        try { // Joining the three tables so as to select all femmes categories
            $request = $this->bdd->prepare("SELECT * FROM products 
                 LEFT JOIN categories ON products.cat_id = categories.cat_id
                 LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id 
                 WHERE cat_title = ? ");
            $request->execute(array(
                "FEMMES"
            ));
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner des produits avec les categories de produits comme ENFANTS pour la page enfants.php
    public function getEnfants()
    {
        try { // Joining the three tables so as to select all Enfants categories
            $request = $this->bdd->prepare("SELECT * FROM products 
                    LEFT JOIN categories ON products.cat_id = categories.cat_id
                    LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id 
                    WHERE cat_title = ? ");
            $request->execute(array(
                "ENFANTS"
            ));
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner des produits avec les categories de produits comme AUTRES pour la page autres.php
    public function getAutres()
    {
        try { // Joining the three tables so as to select all Autres categories
            $request = $this->bdd->prepare("SELECT * FROM products 
                      LEFT JOIN categories ON products.cat_id = categories.cat_id
                      LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id 
                      WHERE cat_title = ? ");
            $request->execute(array(
                "AUTRES"
            ));
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner un utilisateur avec son email et mot de passe pour l'identifier(signin) to cart
    public function getLogin($mail)
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM customers WHERE email = ?");
            $request->execute(array(
                $mail
            ));
            return $solution = $request->fetch();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }


    // selectionner tous les produits de la table de produit pour le calcul de COUNT de VESTES pour pagination sur la page VESTES
    public function getAllVestes()
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products
             LEFT JOIN categories ON products.cat_id = categories.cat_id
            LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id  
            WHERE p_cat_title = 'VESTES'");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner tous les produits avec categorie VESTES de la table de produit pour afficher sur la page VESTES
    public function getVestesPagination($startrow, $num_products)
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products
            LEFT JOIN categories ON products.cat_id = categories.cat_id
            LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id  
            WHERE p_cat_title = 'VESTES' LIMIT $startrow, $num_products");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }


    // selectionner tous les produits de la table de produit pour le calcul de COUNT de ACCESSOIRES pour pagination sur la page ACCESSOIRES
    public function getAllAccessoires()
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products
              LEFT JOIN categories ON products.cat_id = categories.cat_id
             LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id  
             WHERE p_cat_title = 'ACCESSOIRES'");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner tous les produits avec categorie VESTES de la table de produit pour afficher sur la page ACCESSOIRES
    public function getAccessoiresPagination($startrow, $num_products)
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products
             LEFT JOIN categories ON products.cat_id = categories.cat_id
             LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id  
             WHERE p_cat_title = 'ACCESSOIRES' LIMIT $startrow, $num_products");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner tous les produits de la table de produit pour le calcul de COUNT de CHAUSSURES pour pagination sur la page CHAUSSURES
    public function getAllChaussures()
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products
              LEFT JOIN categories ON products.cat_id = categories.cat_id
             LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id  
             WHERE p_cat_title = 'CHAUSSURES'");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner tous les produits avec categorie CHAUSSURES de la table de produit pour afficher sur la page CHAUSSURES
    public function getChaussuresPagination($startrow, $num_products)
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products
             LEFT JOIN categories ON products.cat_id = categories.cat_id
             LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id  
             WHERE p_cat_title = 'CHAUSSURES' LIMIT $startrow, $num_products");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner tous les produits de la table de produit pour le calcul de COUNT de SACS pour pagination sur la page SACS
    public function getAllSacs()
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products
               LEFT JOIN categories ON products.cat_id = categories.cat_id
              LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id  
              WHERE p_cat_title = 'SACS'");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner tous les produits avec categorie CHAUSSURES de la table de produit pour afficher sur la page SACS
    public function getSacsPagination($startrow, $num_products)
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products
              LEFT JOIN categories ON products.cat_id = categories.cat_id
              LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id  
              WHERE p_cat_title = 'SACS' LIMIT $startrow, $num_products");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner tous les produits de la table de produit pour le calcul de COUNT de T-SHIRTS pour pagination sur la page T-SHIRTS
    public function getAllShirts()
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products
                LEFT JOIN categories ON products.cat_id = categories.cat_id
               LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id  
               WHERE p_cat_title = 'T-SHIRT'");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner tous les produits avec categorie T-SHIRTS de la table de produit pour afficher sur la page T-SHIRTS
    public function getShirtsPagination($startrow, $num_products)
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products
               LEFT JOIN categories ON products.cat_id = categories.cat_id
               LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id  
               WHERE p_cat_title = 'T-SHIRT' LIMIT $startrow, $num_products");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner tous les produits de la table de produit pour le calcul de COUNT de HOMMES pour pagination sur la page HOMMES
    public function getAllHommes()
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products
                LEFT JOIN categories ON products.cat_id = categories.cat_id
               LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id  
               WHERE cat_title = 'HOMMES'");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner tous les produits avec categorie HOMMES de la table de produit pour afficher sur la page HOMMES
    public function getHommesPagination($startrow, $num_products)
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products
               LEFT JOIN categories ON products.cat_id = categories.cat_id
               LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id  
               WHERE cat_title = 'HOMMES' LIMIT $startrow, $num_products");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner tous les produits de la table de produit pour le calcul de COUNT de FEMMES pour pagination sur la page FEMMES
    public function getAllFemmes()
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products
                LEFT JOIN categories ON products.cat_id = categories.cat_id
               LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id  
               WHERE cat_title = 'FEMMES'");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner tous les produits avec categorie FEMMES de la table de produit pour afficher sur la page FEMMES
    public function getFemmesPagination($startrow, $num_products)
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products
               LEFT JOIN categories ON products.cat_id = categories.cat_id
               LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id  
               WHERE cat_title = 'FEMMES' LIMIT $startrow, $num_products");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner tous les produits de la table de produit pour le calcul de COUNT de ENFANTS pour pagination sur la page ENFANTS
    public function getAllEnfants()
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products
                LEFT JOIN categories ON products.cat_id = categories.cat_id
               LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id  
               WHERE cat_title = 'ENFANTS'");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

    // selectionner tous les produits avec categorie ENFANTS de la table de produit pour afficher sur la page ENFANTS
    public function getEnfantsPagination($startrow, $num_products)
    {
        try {
            $request = $this->bdd->prepare("SELECT * FROM products
               LEFT JOIN categories ON products.cat_id = categories.cat_id
               LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id  
               WHERE cat_title = 'ENFANTS' LIMIT $startrow, $num_products");
            $request->execute();
            return $solution = $request->fetchAll();
        } catch (Exception $e) {
            var_dump("Erreur " . $e->getMessage());
        }
    }

     // selectionner tous les produits de la table de produit pour le calcul de COUNT de AUTRES pour pagination sur la page AUTRES
     public function getAllAutres()
     {
         try {
             $request = $this->bdd->prepare("SELECT * FROM products
                 LEFT JOIN categories ON products.cat_id = categories.cat_id
                LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id  
                WHERE cat_title = 'AUTRES'");
             $request->execute();
             return $solution = $request->fetchAll();
         } catch (Exception $e) {
             var_dump("Erreur " . $e->getMessage());
         }
     }
 
     // selectionner tous les produits avec categorie AUTRES de la table de produit pour afficher sur la page AUTRES
     public function getAutresPagination($startrow, $num_products)
     {
         try {
             $request = $this->bdd->prepare("SELECT * FROM products
                LEFT JOIN categories ON products.cat_id = categories.cat_id
                LEFT JOIN product_categories ON products.p_cat_id = product_categories.p_cat_id  
                WHERE cat_title = 'AUTRES' LIMIT $startrow, $num_products");
             $request->execute();
             return $solution = $request->fetchAll();
         } catch (Exception $e) {
             var_dump("Erreur " . $e->getMessage());
         }
     }
}
