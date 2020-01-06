<?php include("header.php"); ?>
<div class="home_wrapper">

    <!-- Connection alert -->
    <?php if (!isset($_SESSION['email'])) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Bienvenue à <span style="color: blue;"> KingsBAY </span></strong>, Vous devez <strong>vous connecter</strong> pour accéder à votre panier.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>

    <!--Carousel de homepage-->

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdn.pixabay.com/photo/2017/01/14/10/03/fashion-1979136__340.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color: yellow; font-size: 1.8rem">KingsBay Fashion</h5>
                    <p style="color: white;">Vous faites la demande, nous faisons la livraison.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2015/08/29/01/18/closet-912694__340.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color: yellow; font-size: 1.8rem">NOS BONNES AFFAIRES</h5>
                    <p style="color: white;">Découvrez toutes nos bonnes affaires ci-dessous.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2015/11/07/11/46/fashion-1031469__340.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color: yellow; font-size: 1.8rem">OFFRE SHOC</h5>
                    <p style="color: white;">Variétés d'offres qui pourraient vous choquer.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédente</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivante</span>
        </a>
    </div>

    <!--Listes de nos nouveaux Produits-->

    <section class="intro">
        <div class="card">
            <i class="fa fa-heart fa_intro" aria-hidden="true"></i>
            <div class="card-body">
                <h5 class="card-title">MEILLEURS OFFRE</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

        <div class="card">
            <i class="fa fa-tag fa_intro" aria-hidden="true"></i>
            <div class="card-body">
                <h5 class="card-title">MEILLEURS PRIX</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

        <div class="card">
            <i class="fa fa-thumbs-up fa_intro" id="fa_thumbs_up" aria-hidden="true"></i>
            <div class="card-body">
                <h5 class="card-title">PRODUITS 100% ORIGINAUX</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </section>

    <!--Section de nos derniers produits-->

    <section class="homepage_products">
        <div class="latest_products">
            <p>Nos derniers produits</p>
        </div>
        <div class="homepage_products_lists">

            <!--Working on php for displays-->

            <?php foreach ($this->products as $productKeys => $productValues) { ?>
                <form action="" method="POST">
                    <div class="card mt-3">
                        <img src="<?php echo $productValues["product_img1"]; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $productValues["product_title"]; ?></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">$<?php echo $productValues["product_price"]; ?></li>
                        </ul>

                        <div class="card-body">
                            <a href="?page=details&detailsID=<?php echo $productValues["product_id"]; ?>" class="card-link homepage_product_details bg-info text-light">Details</a>

                        </div>
                    </div>
                </form>
            <?php } ?>

        </div>

    </section>


</div>


<?php include("footer.php"); ?>