<?php include("header.php"); ?>
<div class="home_wrapper">
    <div class="cart_wrapper">
        <div class="cart_left">
            <div class="cart_left_top">1</div>
            <div class="cart_left_bottom">2</div>
        </div>

        <div class="cart_right">
            <form action="" method="POST">
                <div class="card mb-3">
                    <div class="card-header bg-transparent border-secondary text-center">RÉCAPITULATIF DE LA COMMANDE</div>
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 1rem;">AVEZ-VOUS UN CODE DE PROMOTION ?</h5>
                        <p class="card-text">SOUS-TOTAUX <span style="margin-left: 53.5%;">$350</span></p>
                        <p class="card-text">EXPÉDITION ET MANUTENTION <span style="margin-left: 18%;">$200</span></p>
                        <p class="card-text">TAXE<span style="margin-left: 75%;">$120</span></p>
                    </div>
                    <div class="card-footer border-secondary">
                        <p class="card-text">TOTAL<span style="margin-left: 72%;">$670</span></p>
                        <button type="submit" class="btn btn-primary btn-lg mt-5 cart_button_orange">CHECK-OUT</button>
                        <p class="text-center mt-3 mb-3">OR</p>
                        <button type="submit" class="btn btn-secondary btn-lg">Payer avec PayPal</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>



<?php include("footer.php"); ?>