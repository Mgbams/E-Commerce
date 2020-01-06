<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome Icons -->
    <script src="https://use.fontawesome.com/c6daccf4ba.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="././src/public/css/style.css">
    <title>Admin Panel</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="?page=admin">Zone d'administration</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><i class="fa fa-user-o mr-2" aria-hidden="true"></i>Kingsley</a>
                </li>
            </ul>
        </div>
    </nav>

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
                    <a class="nav-link" href="#"><i class="fa fa-power-off" aria-hidden="true"></i>Se déconnecter</a>
                </li>
            </ul>
   
        </aside>

        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>