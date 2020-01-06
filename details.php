<?php include("header.php"); ?>
<div class="home_wrapper">
    <div class="shop_wrapper">
        <div>
            <div class="card">
                <div class="card-header">
                    Catégorie de produits
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="">vestes</a></li>
                    <li class="list-group-item"><a href="">Accessoires</a></li>
                    <li class="list-group-item"><a href="">chaussures</a></li>
                    <li class="list-group-item"><a href="">sacs</a></li>
                    <li class="list-group-item"><a href="">t-shirts</a></li>
                </ul>
            </div>
        </div>

        <div class="shop_plaisir">
            <h4 style="color:yellow;">SHOP</h4>
            <p>N'économisez <span style="color:black;"> pas </span> votre <span style="color:black;"> plaisir</span>.</p>
            <p><span style="color:black">Nous sommes</span> là pour vous servir des produits de qualité <span style="color:black"> aux normes royales qui </span> vous surprendraient.</p>
        </div>
        <div>
            <div class="card">
                <div class="card-header">
                    catégorie
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="">hommes</a></li>
                    <li class="list-group-item"><a href="">femmes</a></li>
                    <li class="list-group-item"><a href="">les enfants</a></li>
                    <li class="list-group-item"><a href="">autres</a></li>
                </ul>
            </div>
        </div>
        <div class="shop_products_lists d-flex">

            <section class="shop_page_products w-50">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo $this->productDetails['product_img1']; ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo $this->productDetails['product_img2']; ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo $this->productDetails['product_img3']; ?>" class="d-block w-100" alt="...">
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
            </section>

            <aside class="details_aside container" style="width:29rem;">
                <div>
                    <form action="?page=details&addID=<?php echo $this->productDetails["product_id"]; ?>" method="GET">
                        <h4><?php echo $this->productDetails["product_title"]; ?></h4>
                        <div class="form-group row">
                            <label for="quantity" class="col-sm-6 col-form-label">Quantité de produit</label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" id="quantity" name="quantity" min="1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="taille" class="col-sm-6 col-form-label">Taille de produit</label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" id="taille" name="taille" min="32" max="48">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="details_prix" class="col-sm-6 col-form-label">Prix:</label>
                            <div class="col-sm-5">
                                $<?php echo $this->productDetails["product_price"]; ?>
                            </div>
                        </div>
                        <div style="margin-left: 50%;">
                           <button type="submit" class="btn btn-primary ml-3"> <i class="fa fa-cart-plus fa-cart-plus_homepage" aria-hidden="true"></i>Ajouter Au Panier</button>
                        </div>
                    </form>
                </div>

                <div class="details_image_gallery" style="width:25rem">
                    <div><img src="<?php echo $this->productDetails["product_img1"]; ?>" alt=""></div>
                    <div><img src="<?php echo $this->productDetails["product_img2"]; ?>" alt=""></div>
                    <div><img src="<?php echo $this->productDetails["product_img3"]; ?>" alt=""></div>
                </div>

            </aside>
        </div>

        <div class="full_product_details" style="width:78%; text-transform:initial;">
            <div class="card text-center mb-5" style="width: 50%;">
                <div class="card-header">
                    <h4>Détails du produit</h4>
                </div>
                <div class="card-body">
                    <p class="card-text"><?php echo $this->productDetails["product_desc"]; ?></p>
                </div>

            </div>

            <h5>Tailles disponibles</h5>
            <li>Petite : < S > </li>
            <li>Moyen : < M > </li>
            <li>Grande : < L > </li>
        </div>

        <div class="full_product_details text-center " id="product_suggestions">
            <div class="suggested_products">
                <p>Produits</p>
                <p>qui pourraient</p>
                <p>vous plaire</p>
            </div>

            <?php
            foreach ($this->product_suggestions as $suggestedKeys => $suggestedValues) { ?>
                <div>
                    <img src="<?php echo $suggestedValues["product_img1"]; ?>" alt="" />
                </div>
            <?php }

            ?>
        </div>

    </div>

</div>



<?php include("footer.php"); ?>