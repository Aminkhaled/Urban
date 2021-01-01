<footer class="footer-area pb-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact-info-wrap">
                    <div class="footer-logo">
                        <a href="<?php echo home_url()?>">
                            <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'logo' );
                            if ( has_custom_logo() ) {
                                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'Urbanautomotivee' ) . '">';
                            } else {
                                echo '<h1>'. get_bloginfo( ' Urbanautomotivee' ) .'</h1>';
                            }
                            ?>
                        </a>
                    </div>
                    <div class="single-contact-info">
                        <span>Our Location</span>
                        <p>
                            4 Moaaz Ibn Jabal st.behind National Eye Hospital El Hegaz sq. Heliopolis,Cairo,Egypt.
                        </p>
                    </div>
                    <div class="single-contact-info">
                        <span>24/7 hotline:</span>
                        <p>+201122885544</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="footer-right-wrap">
                    <div class="footer-menu">
                        <nav>
                            <?php wp_nav_menu(array(
                                'theme_location'=> 'nardo_footer',
                                'container' => 'false',
                                'container_class'=> false,
                            )) ?>
                        </nav>
                    </div>
                    <div class="social-style-2 social-style-2-hover-black social-style-2-mrg">
                        <?php
                        if(get_theme_mod('twitter_setting')){
                            ?>
                            <a href="<?php echo get_theme_mod('twitter_setting') ?>"><i class="icon-social-twitter"></i></a>
                            <?php
                        }

                        ?>
                        <?php
                        if(get_theme_mod('facebook_setting')){
                            ?>
                            <a href="<?php echo get_theme_mod('facebook_setting') ?>"><i class="icon-social-facebook"></i></a>
                            <?php
                        }

                        ?>
                        <?php
                        if(get_theme_mod('instagram_setting')){
                            ?>
                            <a href="<?php echo get_theme_mod('instagram_setting') ?>"><i class="icon-social-instagram"></i></a>
                            <?php
                        }

                        ?>
                        <?php
                        if(get_theme_mod('youtube_setting')){
                            ?>
                            <a href="<?php echo get_theme_mod('youtube_setting') ?>"><i class="icon-social-youtube"></i></a>
                            <?php
                        }

                        ?>


                    </div>


                    <div class="copyright">
                        <p>Copyright © 2020 Urbanautomotivee | <a href="https://hasthemes.com/">Built with <span>Shmaii Marketing</span></a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Modal end -->
</div>

<?php wp_footer(); ?>

</body>

</html>
