<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome Icons --->
    <script src="https://use.fontawesome.com/c6daccf4ba.js"></script>

    <!-- Bootstrap CSS  et CSS Stylesheet-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="././src/public/css/signup_signin.css">
    <title>KingsBay</title>
</head>

<body>

    <div class="bg-dark d-flex flex-wrap justify-content-between top_nav_bar">
        <div class="d-flex">
            <li class="text-light">
                <button type="button" class="btn btn-primary">
                    Bienvenue <span class="badge badge-light">4</span>
                </button>
                Articles dans votre panier | Prix total: $600
            </li>
        </div>

        <div class="d-flex top_right_nav_bar">

            <li>
                <a href="?page=signup">S'inscrire<span class="sr-only"></span></a>
            </li>
            <li>
                <a href="#">Mon compte</a>
            </li>
            <li>
                <a href="?page=cart">Aller au panier</a>
            </li>
            <li>
                <a href="?page=signin">S'identifier</a>
            </li>
        </div>

    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="?page=home"><img src="src/public/images/kingsbay_logo.png" style="height:100px; width: 200px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="?page=home">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=shop">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mon Compte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=cart">Panier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=contact">Contact</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>


<div class="text-center mb-5 signup_header"><?php echo $this->titrepage; ?></div>

<form action="?page=signin" method="POST">
    <div class="signup_wrapper container">
        <div class="signup_logo"><img src="src/public/images/signup_logo.jpg" class="img-fluid" alt="" /></div>
        <div class="text-center mb-5 text-wrap" style="font-size: 2rem;"><h3>KingsBay - Formulaire de connexion</h3></div>

        <div class="row mb-3">

            <div class="col-sm-1">
                <label for="email"><i class="fa fa-envelope-o" aria-hidden="true"></i></label>
            </div>
            <div class="col-sm-5">
                <input type="email" name="signin_email" id="email" class="form-control" placeholder="E-mail">
            </div>

        </div>

        <div class="row mb-3">

            <div class="col-sm-1">
                <label for="mdp"><i class="fa fa-lock" aria-hidden="true"></i></label>
            </div>
            <div class="col-sm-5">
                <input type="password" name="mdp" id="mdp" class="form-control" placeholder="Mot de Passe">
            </div>

        </div>

        <div><button type="submit" class="btn btn-success mb-2">S'identifier</button></div>
       
    </div>
</form>



<?php include("footer.php"); ?>