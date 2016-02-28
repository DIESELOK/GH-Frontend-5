<footer class="f-page">
    <div class="f-top">
        <div class="container">
            <div class="f-deliver">
                <div class="f-row clear">
                    <h1 class="logo"><a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a></h1>
                    <div class="social">
                        <?php
                        $args = array(
                            'theme_location' => 'social'
                        );

                        wp_nav_menu($args);?>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida quam quis nunc rutrum placerat. Proin eu mi vitae neque veh interdum id nec turpis nam auctor faucibus sollicitudin.</p>
            </div>

            <div class="contact-info">
                <h2 class="f-header-block">Contact info</h2>
                <ul>
                    <li>222 Ave C South</li>
                    <li>Saskatoon, Saskatchewan</li>
                    <li>Canada S7K 2N5</li>
                    <li><a href="mailto:info@deliver.ca">info@deliver.ca</a></li>
                    <li>1.306.222.3456</li>
                </ul>
            </div>

            <nav class="quick-links">
                <h2 class="f-header-block">Quick Links</h2>
                <?php
                $args = array(
                    'theme_location' => 'footer_quick_links'
                );
                wp_nav_menu($args); ?>
            </nav>

            <div class="newsletter">
                <h2 class="f-header-block">Newsletter</h2>
                <p>Lorem ipsum dolor sit amet dolor consectetur adipiscing elit.</p>
                <form action="#" class="subscribe">
                    <div class="clear">
                        <input type="text" class="e-mail" placeholder="Email">
                        <button type="submit" class="f-btn-submit">Ok</button>
                    </div>
                </form>
            </div>
        </div><!-- container -->
    </div><!-- f-top -->

    <div class="f-bottom">
        <div class="container clear">
            <p class="copy">Copyright <?php echo date('Y');?> <a href="http://deliver.ca">Deliver</a>. All Rights Reserved.</p>
            <nav class="footer-nav">
                <?php
                $args = array(
                    'theme_location' => 'footer_menu'
                );
                wp_nav_menu($args); ?>
            </nav>
        </div>
    </div>
</footer></footer>


<?php wp_footer(); ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
</body>
</html>