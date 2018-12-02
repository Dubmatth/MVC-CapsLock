</div>
<?php isset($_GET['url']) ? $path = path($_GET['url']) : $path = '' ?>
<footer class="bg-dark">
            <div class="container" id="index_footer">
                <div class="row">
                    <div class="mx-auto">
                        <img src="<?= $path ?>asset/img/logo_headict.svg" id="index_footer_logo" alt="Logo headict">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <i class="fas fa-search fa-2x"></i>
                        <input type="text" placeholder="Recherche ..." pattern="[a-Z][0-9]">
                    </div>
                </div>
                <div class="row index_footer_div" id="index_footer_div_1">
                    <div class="col-md-4 text-center">
                        <h2>Contactez-nous</h2>
                        <i class="fas fa-phone fa-2x"></i><br>
                        <a href="tel:0450667895">Tel: 0450667895</a>
                        <p>Du Lundi au Samedi de 08:00 à 20:00</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <h2>Paiement sécurisé</h2>
                        <i class="fas fa-key fa-2x"></i>
                        <p>Achetez sur notre site en toute confiance</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <h2>échange et retour</h2>
                        <i class="fas fa-sync fa-2x"></i>
                        <p>30 jours pour changer d'avis</p>
                    </div>
                </div>
                <div class="row">
                    <div class="mx-auto">
                        <img src="<?= $path ?>asset/img/cards_bank_footer.svg" alt="Images moyens de paiement">
                    </div>
                </div>
                <div class="row index_footer_div" id="index_footer_div_2">
                    <div class="col-md-4 text-center">
                        <h2>Infos livraisons</h2>
                        <i class="fas fa-truck fa-2x"></i>
                        <p>Expédié le jour même <br>Chez vous sous 48h</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <h2>Suivez-nous</h2>
                        <i class="fab fa-facebook-square fa-2x"></i>
                        <i class="fab fa-twitter-square fa-2x"></i>
                        <i class="fab fa-instagram fa-2x"></i>
                        <p><a href="">> Le blog headict</a></p>
                    </div>
                    <div class="col-md-4 text-center">
                        <h2>Personnalisation</h2>
                        <i class="fas fa-signature fa-2x"></i>
                        <p>Personnalisez nos produits<br>avec votre logo</p>
                    </div>
                </div>
        
            </div>
            <div id="footer_footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h3>Headict SAS - Design et développement sous Prestashop. Vidéo Mael Sevestre.</h3>
                            <p>Partenaires et amis : Stickers muraux - Veste ski - Archives - plan<br>Découvrez cette page sur nos sites internationaux - Headict.co.uk - Headict.de - Headict.nl - Headict.it - Headict.es</p>
                        </div>
                        <div class="col-md-4 text-right">
                            <p><a href="">Mentions légales</a> | <a href="">CGV</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
            
        <script src="<?= $path ?>asset/js/jquery-3.3.1.min.js"></script>
        <script src="<?= $path ?>asset/js/bootstrap.min.js"></script>
        <script src="<?= $path ?>asset/js/main.js"></script>
        <script src="https://js.stripe.com/v3/"></script>
    </body>
</html>