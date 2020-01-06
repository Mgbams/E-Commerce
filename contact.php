<?php include('header.php'); ?>
<div class="home_wrapper">
    <div class="contact_wrapper">
        <div class="contact_side_wrapper">
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
        </div>

        <div class="nous_contact">
            <h2 class="text-center mb-5" style="color: white">PAGE DE CONTACT</h2>
            <div class="contact_form">
                <div class="form_left">
                    <div><a href="https://www.linkedin.com/in/kingsley-mgbams-33b781155/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></div>
                    <div><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></div>
                    <div><a href="https://github.com/Mgbams"><i class="fa fa-github" aria-hidden="true"></i></a></div>
                </div>
                <div class="form_middle">
                    <form action="?page=contact" method="POST" class="contact_formuilare">
                        <div class="form-group">
                            <input type="text" placeholder="Prenom*" class="form-control" name="contact_prenom">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="nom*" class="form-control" name="contact_nom">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email*" class="form-control" name="contact_email">
                        </div>
                        <select class="form-control form-group" name="contact_select">
                            <option value="nous contacter concernant*" disabled selected>nous contacter concernant*</option>
                            <option value="">À propos de l'expédition des marchandises</option>
                            <option value="">Concernant vos paiements</option>
                            <option value="">Concernant la qualité des marchandises</option>
                        </select>
                        <div class="form-group">
                            <input type="text" placeholder="Sujet*" class="form-control" name="contact_sujet">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="form_right">
                    <div class="form_right_top">
                        <div><i class="fa fa-user" aria-hidden="true" style="font-size: 1.7rem;"></i></div>
                        <div class="support">
                            <p>ASSISTANCE 24/7</p>
                            <p class="orange">CONTACTEZ LE SUPPORT</p>
                        </div>
                    </div>
                    <div class="form_right_bottom">
                        <div class="flexicons">
                            <div><i class="fa fa-phone" aria-hidden="true"></i></div>
                            <div><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                            <div class="envelope"><i class="fa fa-envelope-open" aria-hidden="true"></i></div>
                        </div>
                        <div class="contact_address_contents">
                            <div>
                                <p>APPELEZ-NOUS</p>
                                <P>+337 - 23 - 56 - 89</P>
                            </div>
                            <div>
                                <p>HEURES DE VENTE</p>
                                <P>24 / 24</P>
                            </div>
                            <div>
                                <p>INFO CONTACT VENTE</p>
                                <P>sales@kingsbay.com</P>
                                <p>+337 - 51 - 52 - 98 - 22</p>
                            </div>
                            <div>
                                <p>ADRESSE POSTALE</p>
                                <P>KingsBay inc</P>
                                <p>10 Rue Auguste Chollat</p>
                                <p>Lyon, 69008</p>
                                <p>France</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>




<?php include("footer.php"); ?>