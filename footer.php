        <footer class="footer" role="contentinfo">
            <div class="container">
                <div class="footer__companyinfo col col--xs-4 col--sm-4 col--md-4 col--lg-4">
                    <img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/img/logo.svg" onerror="this.src='<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/img/logo.png'" alt="<?php echo get_bloginfo( 'title' ); ?>" />
                    <ul>
                        <li>Bruuns Kropsterapi</li>
                        <li>Hjallesevej 41, 5000 Odense C</li>
                        <li>CVR: 32897843</li>
                        <li><a href="mailto:sanne@bruunskropsterapi" title="Send mail til sanne@bruunskropsterapi">Sanne@bruunskropsterapi.dk</a></li>
                        <li><a href="tel:+4520919820" title="Ring til +4520919820">+45 2091 9820</a></li>
                    </ul>
                </div>
                <nav class="footer__navigation col col--xs-4 col--sm-4 col--md-4 col--lg-4">
                    <?php wp_nav_menu(['theme_location' => 'footer', 'menu_class' => 'nav nav--footer']); ?>
                </nav>
                <div class="footer__reviews col col--xs-4 col--sm-4 col--md-4 col--lg-4">
                    <h3>Anmeldelse</h3>
                </div>
            </div>
            <p class="footer__copyright">&copy; <?php echo get_bloginfo( 'name' ); ?> <?php echo date('Y'); ?></p>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
