<?php include("adminheader.php"); ?>

    <!--Configuration HTML pour la barre de navigation latérale de l'administrateur-->
    <div class="admin_side_nav">
        <aside class="bg-dark text-light mt-5">
            <ul class="bg-dark">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-tachometer" aria-hidden="true"></i>Tableau de bord
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-tags" aria-hidden="true"></i> Produits
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="?page=insert_product">Insérer des produits</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Voir les produits</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>Catégories de produits
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="?page=add_product_category">Insérer une catégorie de produits</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?page=view_product_category">Afficher la catégorie de produits</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Catégories
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="?page=categories">Insérer catégorie</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-user-o" aria-hidden="true"></i>Voir les clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" aria-hidden="true"> <i class="fa fa-align-justify" aria-hidden="true"></i>Voir les commandes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-credit-card" aria-hidden="true"></i>Voir les paiements</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-users" aria-hidden="true"></i>Utilisateurs
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?page=home"><i class="fa fa-power-off" aria-hidden="true"></i>Se déconnecter</a>
                </li>
            </ul>
   
        </aside>

        <div>
            <div class="w-50 mx-auto mt-3 insert_product">

                <div class="card">
                    <div class="card-header">
                        <p><i class="fa fa-plus mr-2" aria-hidden="true"></i>Insérer un produit</p>
                    </div>
                    <form action="?page=insert_product" method="POST" name="insert_product_form" enctype="multipart/form-data">
                        <div class="form-group d-flex mt-3">
                            <label for="insert_product_title">Titre de produit:</label>
                            <input type="text" class="form-control first_input" id="insert_product_title" name="insert_product_title">
                        </div>
                        <div class="form-group d-flex mt-3">
                            <label for="insert_product_category">Catégorie de produit:</label>
                            <input type="text" class="form-control second_input" id="insert_product_category" name="insert_product_category">
                        </div>
                        <div class="form-group d-flex mt-3">
                            <label for="insert_category">Catégorie</label>
                            <input type="text" class="form-control third_input" id="insert_category" name="insert_category">
                        </div>
                        <div class="form-group d-flex mt-3">
                            <label for="insert_image1">Image1 de produit:</label>
                            <input type="file" class="form-control" id="insert_image1" name="insert_image1">
                        </div>
                        <div class="form-group d-flex mt-3">
                            <label for="insert_image2">Image2 de produit:</label>
                            <input type="file" class="form-control" id="insert_image2" name="insert_image2">
                        </div>
                        <div class="form-group d-flex mt-3">
                            <label for="insert_image3">Image3 de produit:</label>
                            <input type="file" class="form-control" id="insert_image3" name="insert_image3">
                        </div>
                        <div class="form-group d-flex mt-3">
                            <label for="insert_product_price">Prix de produit:</label>
                            <input type="number" class="form-control" id="insert_product_price" name="insert_product_price">
                        </div>
                        <div class="form-group d-flex mt-3">
                            <label for="insert_keywords">Mot clés</label>
                            <input type="text" class="form-control keyword_input" id="insert_keywords" name="insert_keywords">
                        </div>
                        <div class="form-group d-flex">
                            <label for="insert_product_desc">Description de produit:</label>
                            <textarea name="product_desc" cols="30" rows="4" class="form-control" id="insert_product_desc"></textarea>
                        </div>
                        <button type="submit">go</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <?php include("adminfooter.php");?>