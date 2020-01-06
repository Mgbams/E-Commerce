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
            <p>SHOP</p>
            <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise
                en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie
                depuis les années 1500, quand un imprimeur anonyme assembla
            </p>
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
                    <?php foreach ($this->enfantsPagination as $enfantsKeys => $enfantsValues) { ?>
                        <div class="card mb-2 mr-5 ml-5" style="width: 21rem; height: 23.5rem;">
                            <img src="<?php echo $enfantsValues["product_img1"];?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $enfantsValues["product_title"];?></h5>
                            </div>
                            <ul class="list-group list-group-flush ">
                                <li class="list-group-item">$<?php echo $enfantsValues["product_price"];?></li>
                            </ul>

                            <div class="card-body">
                                <a href="?page=details&detailsID=<?php echo $enfantsValues["product_id"];?>" class="card-link homepage_product_details">Détails</a>
                                <a href="?addID=<?php echo $enfantsValues["product_id"];?>" class="card-link bg-success homepage_add"><i class="fa fa-cart-plus fa-cart-plus_homepage" aria-hidden="true"></i>Ajouter Au Panier</a>
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <div style="margin-top: 40px; margin-left: 45px;" id="pagination">
                    <?php
                    $count = count($this->shopEnfants);
                    $num_per_page = 4;
                    $total_page = ceil($count / $num_per_page);
                    if (isset($_GET['pageLinks'])) {
                        $pageLinks = $_GET['pageLinks'];
                    } else {
                        $pageLinks = 1;
                    }
                    if ($pageLinks > 1) {
                        echo "<a href='?page=enfants&pageLinks=" . ($pageLinks - 1) . "' class = mr-2>Précédente</a>";
                    }
                    for ($i = 1; $i <= $total_page; $i++) { ?>
                        <a href="?page=enfants&pageLinks=<?php echo $i; ?>" class="mr-3"><?php echo $i; ?></a>
                    <?php } ?>
                    <?php
                    if ($i > $pageLinks and $pageLinks < $total_page) {
                        echo "<a href='?page=enfants&pageLinks=" . ($pageLinks + 1) . "'class = mr-2>Suivant</a>";
                    } ?>
                </div>
            </section>

        </div>
    </div>

</div>



<?php include("footer.php"); ?>