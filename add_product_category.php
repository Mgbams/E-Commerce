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
    <section>

        <div class="w-50 mx-auto mt-3 insert_product_category">
            <div class="card">
                <form action="?page=add_product_category" method="POST">
                    <div class="card-header">
                        <p><i class="fa fa-pencil mr-2" aria-hidden="true"></i>Modifier la catégorie de produits</p>
                    </div>
                    <div class="form-group d-flex mt-3">
                        <label for="product_title">Titre:</label>
                        <input type="text" class="form-control" id="product_title" name="product_title">

                    </div>
                    <div class="form-group d-flex">
                        <label for="product_desc">Description:</label>
                        <textarea name="product_desc" cols="30" rows="4" class="form-control" id="product_desc"></textarea>
                    </div>
                    <input type="submit" name="insert_product_category" class="btn btn-primary" value="Mise à jour">
                </form>
            </div>
        </div>
    </section>


</div>

<?php include("adminfooter.php"); ?>