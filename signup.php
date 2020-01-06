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
            <form action="?page=signup" action="POST" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>


    <div class="text-center mb-5 signup_header"><?php echo $this->titrepage; ?></div>

    <form action="?page=signup" method="POST" enctype="multipart/form-data">
        <div class="signup_wrapper container">
            <div class="signup_logo"><img src="src/public/images/signup_logo.jpg" class="img-fluid" alt="" /></div>
            <div class="text-center mb-5 text-wrap" style="font-size: 2rem;">
                <h3>KingsBay - Formulaire d'inscription</h3>
            </div>
            <div class="row mb-3">

                <div class="col-sm-1">
                    <label for="firstname"><i class="fa fa-user" aria-hidden="true"></i></label>
                </div>
                <div class="col-sm-5">
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Prenom">
                </div>
                <span><?php echo $this->firstnameErr; ?></span>

                <div class="col-sm-1">
                    <label for="lastname"><i class="fa fa-user" aria-hidden="true"></i></label>
                </div>
                <div class="col-sm-5">
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Nom">
                </div>
                <span><?php echo $this->lastnameErr; ?></span>

            </div>

            <div class="row mb-3">

                <div class="col-sm-1">
                    <label for="email"><i class="fa fa-envelope-o" aria-hidden="true"></i></label>
                </div>
                <div class="col-sm-5">
                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mail">
                </div>
                <span><?php echo $this->emailErr; ?></span>
                <div class="col-sm-1">
                    <label for="phone"><i class="fa fa-mobile" aria-hidden="true"></i></label>
                </div>
                <div class="col-sm-5">
                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="+337-23-345-123" pattern="[+][0-9]{3}-[0-9]{2}-[0-9]{3}-[0-9]{3}">
                </div>

            </div>

            <div class="row mb-3">

                <div class="col-sm-1">
                    <label for="mdp"><i class="fa fa-lock" aria-hidden="true"></i></label>
                </div>
                <div class="col-sm-5">
                    <input type="password" name="mdp" id="mdp" class="form-control" placeholder="Mot de Passe">
                </div>
                <div class="col-sm-1">
                    <label for="mdp2"><i class="fa fa-lock" aria-hidden="true"></i></label>
                </div>
                <div class="col-sm-5">
                    <input type="password" name="mdp2" id="mdp2" class="form-control" placeholder="verify mot de passe">
                </div>

            </div>

            <div class="row mb-3">

                <div class="col-sm-1">
                    <label for="pays"><i class="fa fa-flag-checkered" aria-hidden="true"></i></label>
                </div>
                <div class="col-sm-5">
                    <input list="pays" class="form-control" name="pays">
                    <datalist id="pays">
                        <?php foreach ($this->pays as $paysKeys => $paysValues) { ?>
                            <option value="<?php echo $paysValues["name_fr"]; ?>">
                            <?php } ?>
                    </datalist>
                </div>
                <div class="col-sm-1">
                    <label for="ville"><i class="fa fa-map" aria-hidden="true"></i></label>
                </div>
                <div class="col-sm-5">
                    <input type="text" name="ville" id="ville" class="form-control" placeholder="Ville">
                </div>
                <span><?php echo $this->villeErr; ?></span>

            </div>

            <div class="row mb-3">

                <div class="col-sm-1">
                    <label for="postal"><i class="fa fa-inbox" aria-hidden="true"></i></label>
                </div>
                <div class="col-sm-5">
                    <input type="text" name="postal" id="postal" class="form-control" placeholder="Code Postal" <p><?php echo $this->postalErr; ?></p>
                </div>
                <div class="col-sm-1">
                    <label for="address"><i class="fa fa-home" aria-hidden="true"></i></label>
                </div>
                <div class="col-sm-5">
                    <input type="text" name="address" id="address" class="form-control" placeholder="Adresse">
                </div>
                <span><?php echo $this->addrErr; ?></span>

            </div>

            <div class="row mb-3">

                <div class="col-sm-1">
                    <label for="signup_img"><i class="fa fa-picture-o" aria-hidden="true"></i></label>
                </div>
                <div class="col-sm-5">
                    <input type="file" name="signup_img" id="signup_img" class="form-control" placeholder="Téléchargez une image">
                </div>
                <div class="col-sm-1">
                    <label for="sex" style="color:yellow;">Sex:</label>
                </div>
                <div class="col-sm-2 custom-control custom-radio custom-control-inline ml-2">
                    <input type="radio" id="homme" value="Homme" name="sex" class="custom-control-input">
                    <label class="custom-control-label" for="homme"><i class="fa fa-male" aria-hidden="true"></i></label>
                </div>
                <div class="col-sm-2 custom-control custom-radio custom-control-inline" id="femme_radio">
                    <input type="radio" id="femme" value="Femme" name="sex" class="custom-control-input">
                    <label class="custom-control-label" for="femme"><i class="fa fa-female" aria-hidden="true"></i></label>
                </div>

            </div>

            <div><button type="submit" class="btn btn-success mb-2">S'inscrire</button></div>
            <div>
                <p style="color:white;">Vous avez déjà un compte? <a href="?page=signin">Se connecter</a></p>
            </div>

        </div>
    </form>



    <?php include("footer.php"); ?>