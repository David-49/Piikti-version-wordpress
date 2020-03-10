<footer class="footer">
    <div class="langue">
        <img src="<?php echo get_template_directory_uri(); ?>/img/france.svg" alt="Logo" alt="logo langue française" class="drapeau">
        <img src="<?php echo get_template_directory_uri(); ?>/img/uk.svg" alt="Logo" alt="logo langue française" class="drapeau">
        <img src="<?php echo get_template_directory_uri(); ?>/img/spain.svg" alt="Logo" alt="logo langue française" class="drapeau">
    </div>

    <div class="moyenPaiement">
        <h3 class="titreH3">Moyens de paiement</h3>
        <p class="descMoyen">Moyens de paiement sécurisés</p>
        <div class="logoPaiement">
            <img src="<?php echo get_template_directory_uri(); ?>/img/visa.svg" alt="Logo" alt="logo langue française" class="paiement visa">
            <img src="<?php echo get_template_directory_uri(); ?>/img/paypal.svg" alt="Logo" alt="logo langue française" class="paiement paypal">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mastercard.svg" alt="Logo" alt="logo langue française" class="paiement mastercard">
        </div>
    </div>

    <div class="moyenLivraison">
        <h3 class="titreH3">Moyen de livraison</h3>
        <p class="descMoyen">Livraison rapide</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/fedex.svg" alt="" class="logoFedex">
        <p class="descLivraison">Qualité de service certifiée</p>
        <p class="descLivraison">Qualité des produits prouvés</p>
    </div>

    <div class="moyenContact">
        <h3 class="titreH3">Contactez-nous</h3>
        <p class="descMoyen">Email, réseaux sociaux</p>
        <div class="blocMail">
            <p class="mailSite">Piikti.contact@gmail.com</p>
        </div>

    </div>

    <!-- <div class="menu-footer">
        <?php wp_nav_menu(array( 'theme_location' => 'footer',
        'container' => 'ul',
        'menu_class' => 'site__footer__menu', )); ?>
    </div> -->
</footer>
<?php wp_footer(); ?>
</body>
</html>
