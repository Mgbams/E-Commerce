<?php include("header.php"); ?>
<div class="home_wrapper">
    <div class="shop_wrapper">
        <div>
            <div class="card">
                <div class="card-header">
                    Catégorie de produits
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="?page=vestes">vestes</a></li>
                    <li class="list-group-item"><a href="?page=accessoires">Accessoires</a></li>
                    <li class="list-group-item"><a href="?page=chaussures">chaussures</a></li>
                    <li class="list-group-item"><a href="?page=sacs">sacs</a></li>
                    <li class="list-group-item"><a href="?page=shirts">t-shirts</a></li>
                </ul>
            </div>
        </div>

        <div class="shop_description">
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
                    <li class="list-group-item"><a href="?page=hommes">hommes</a></li>
                    <li class="list-group-item"><a href="?page=femmes">femmes</a></li>
                    <li class="list-group-item"><a href="?page=enfants">les enfants</a></li>
                    <li class="list-group-item"><a href="?page=autres">autres</a></li>
                </ul>
            </div>
        </div>
        <div class="shop_products_lists">

            <section class="shop_page_products">
                <div class="shop_page_products_lists">
                    <?php foreach ($this->pagination as $shopProductsKeys => $shopProductsValues) { ?>
                        <form action="?page=shop" method="POST">
                            <div class="card mb-2 mr-5 ml-5" style="width: 21rem; height: 23.5rem;">
                                <img src="<?php echo $shopProductsValues["product_img1"]; ?>" class="card-img-top img-responsive" alt="...">
                                <input type="hidden" name="product_img1" value="<?php echo $shopProductsValues["product_img1"]; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $shopProductsValues["product_title"]; ?></h5>
                                    <input type="hidden" name="product_title" value="<?php echo $shopProductsValues["product_title"]; ?>">
                                </div>
                                <div class="card-footer" style="display: flex">
                                    <h4 class="mr-4">$<?php echo $shopProductsValues["product_price"]; ?></h4>
                                    <input type="hidden" name="product_price" value="<?php echo $shopProductsValues["product_price"]; ?>">
                                    <input type="number" name="quantity" value="1">
                                    <input type="hidden" name="id" value="<?php echo $shopProductsValues["product_id"];?>">
                                </div>

                                <div class="card-body mb-4">
                                    <a href="?page=details&detailsID=<?php echo $shopProductsValues["product_id"]; ?>" class="card-link homepage_product_details bg-info text-light">Détails</a>
                                    <button type="submit" name="add_to_cart" class="bg-success homepage_add"><i class="fa fa-cart-plus fa-cart-plus_homepage" aria-hidden="true"></i>Ajouter au Panier</button>
                                </div>
                            </div>
                        </form>
                    <?php } ?>

                </div>
                <div style="margin-top: 40px; margin-left: 45px;" id="pagination">
                    <?php
                    $count = count($this->shopProducts);
                    $num_per_page = 4;
                    $total_page = ceil($count / $num_per_page);
                    if (isset($_GET['pageLinks'])) {
                        $pageLinks = $_GET['pageLinks'];
                    } else {
                        $pageLinks = 1;
                    }
                    if ($pageLinks > 1) {
                        echo "<a href='?page=shop&pageLinks=" . ($pageLinks - 1) . "' class = mr-2>Précédente</a>";
                    }
                    for ($i = 1; $i <= $total_page; $i++) { ?>
                        <a href="?page=shop&pageLinks=<?php echo $i; ?>" class="mr-3"><?php echo $i; ?></a>
                    <?php } ?>
                    <?php
                    if ($i > $pageLinks and $pageLinks < $total_page) {
                        echo "<a href='?page=shop&pageLinks=" . ($pageLinks + 1) . "'class = mr-2>Suivant</a>";
                    } ?>
                </div>
            </section>

        </div>
    </div>

</div>
<?php include("footer.php"); ?>