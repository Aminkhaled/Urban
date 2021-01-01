<?php
get_header()
    ?>
<div class="about-us-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="about-us-logo">
                    <a href="<?php echo home_url()?>">
                        <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'logo' );
                        if ( has_custom_logo() ) {
                            echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'Sham House' ) . '">';
                        } else {
                            echo '<h1>'. get_bloginfo( 'Shamii House' ) .'</h1>';
                        }
                        ?>
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="about-us-content">
                    <h3>Introduce</h3>
                    <p>Shamii House store is a business concept is to offer fashion and quality at the best price. It has since it was founded in 2018 grown into one of the best Art . The content of this site is copyright-protected and is the property of Shamii House.</p>
                    <div class="signature">
                        <h2>Shamii House</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
get_footer();
?>
