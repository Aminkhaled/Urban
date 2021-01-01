<?php

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
add_action( 'after_setup_theme', 'nardo_remove_actions', 0 );

function nardo_remove_actions() {
    remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
    remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );

}

if ( ! function_exists( 'nardo_register_nav_menu' ) ) {

    function nardo_register_nav_menu(){
        register_nav_menus( array(
            'nardo_primary' => __( 'Primary Menu', 'nardo' ),
            'nardo_footer'  => __( 'Footer Menu', 'nardo' ),
        ) );
    }
    add_action( 'after_setup_theme', 'nardo_register_nav_menu', 0 );
}
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 170,
        'width'       => 170,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'Shamii House', 'Art of The House' ),
        'unlink-homepage-logo' => true,
    );

    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
function nardo_scripts() {

    wp_enqueue_style('boostrap',get_template_directory_uri().'/assets/css/vendor/bootstrap.min.css');
    wp_enqueue_style('signericafat',get_template_directory_uri().'/assets/css/vendor/signericafat.css');
    wp_enqueue_style('cerebrisans',get_template_directory_uri().'/assets/css/vendor/cerebrisans.css');
    wp_enqueue_style('simple-line-icons',get_template_directory_uri().'/assets/css/vendor/simple-line-icons.css');
    wp_enqueue_style('elegant',get_template_directory_uri().'/assets/css/vendor/elegant.css');
    wp_enqueue_style('linear-icon',get_template_directory_uri().'/assets/css/vendor/linear-icon.css');
    wp_enqueue_style('nice-select',get_template_directory_uri().'/assets/css/plugins/nice-select.css');
    wp_enqueue_style('easyzoom',get_template_directory_uri().'/assets/css/plugins/easyzoom.css');
    wp_enqueue_style('slick',get_template_directory_uri().'/assets/css/plugins/slick.css');
    wp_enqueue_style('animate',get_template_directory_uri().'/assets/css/plugins/animate.css');
    wp_enqueue_style('magnific-popup',get_template_directory_uri().'/assets/css/plugins/magnific-popup.css');
    wp_enqueue_style('jquery-ui',get_template_directory_uri().'/assets/css/plugins/jquery-ui.css');
   wp_enqueue_style('style-css',get_template_directory_uri().'/assets/css/style.css');

    wp_enqueue_script('modernizr',get_template_directory_uri().'/assets/js/vendor/modernizr-3.6.0.min.js',array(),'1',true);
        wp_dequeue_script('jquery');
  wp_register_script('jquery',get_template_directory_uri().'/assets/js/vendor/jquery-3.5.1.min.js',array(),'1',true);
 wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-migrate',get_template_directory_uri().'/assets/js/vendor/jquery-migrate-3.3.0.min.js',array('jquery'),'1',true);
    wp_enqueue_script('bootstrap-bundle',get_template_directory_uri().'/assets/js/vendor/bootstrap.bundle.min.js',array('jquery'),'1',true);
    wp_enqueue_script('slick',get_template_directory_uri().'/assets/js/plugins/slick.js',array('jquery'),'1',true);
    wp_enqueue_script('jquery-syotimer',get_template_directory_uri().'/assets/js/plugins/jquery.syotimer.min.js',array('jquery'),'1',true);
    wp_enqueue_script('jquery-instagramfeed',get_template_directory_uri().'/assets/js/plugins/jquery.instagramfeed.min.js',array('jquery'),'1',true);

    wp_enqueue_script('jquer-nice',get_template_directory_uri().'/assets/js/plugins/jquery.nice-select.min.js',array('jquery'),'1',true);
    wp_enqueue_script('wow',get_template_directory_uri().'/assets/js/plugins/wow.js',array('jquery'),'1',true);
    wp_enqueue_script('jquery-ui-js',get_template_directory_uri().'/assets/js/plugins/jquery-ui.js"',array('jquery'),'1',true);
    wp_enqueue_script('magnific-popup-js',get_template_directory_uri().'/assets/js/plugins/magnific-popup.js',array('jquery'),'1',true);
    wp_enqueue_script('sticky-js',get_template_directory_uri().'/assets/js/plugins/sticky-sidebar.js',array('jquery'),'1',true);
    wp_enqueue_script('eazyzoom',get_template_directory_uri().'/assets/js/plugins/easyzoom.js',array('jquery'),'1',true);
    wp_enqueue_script('scrollup',get_template_directory_uri().'/assets/js/plugins/scrollup.js',array('jquery'),'1',true);
    wp_enqueue_script('ajax-mail',get_template_directory_uri().'/assets/js/plugins/ajax-mail.js',array('jquery'),'1',true);
    wp_enqueue_script('main',get_template_directory_uri().'/assets/js/main.js',array('jquery'),'1',true);
}
add_action( 'wp_enqueue_scripts', 'nardo_scripts' );


function nardo_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support('post-thumbnails');
}

add_action( 'after_setup_theme', 'nardo_add_woocommerce_support' );

add_image_size('cart-product',98,112);
add_image_size('shop-product',404 ,450);
add_image_size('logo',170 ,170);
add_image_size('home_product',270,324);



add_action( 'woocommerce_shop_loop_item_title', 'nardo_template_loop_product_title', 10 );
if ( ! function_exists( 'nardo_template_loop_product_title' ) ) {

    /**
     * Show the product title in the product loop. By default this is an H2.
     */
    function nardo_template_loop_product_title() {
        echo '<h3 >' ;
        echo "<a href='".esc_url(get_permalink())."'>". get_the_title() ."</a>" ;
        echo '</h3>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
}




//
add_action( 'woocommerce_before_shop_loop_item_title', 'nardo_template_loop_product_thumbnail', 10 );



if ( ! function_exists( 'nardo_template_loop_product_thumbnail' ) ) {

    /**
     * Get the product thumbnail for the loop.
     */

    function nardo_template_loop_product_thumbnail() {
        ?>
<div class="product-img product-img-zoom mb-15">
    <a href="<?php esc_url(get_permalink())?>">
        <?php
        global $loop;
        $image = wp_get_attachment_image_src( get_post_thumbnail_id(),'shop-product');?>

        <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
    </a>

</div>
<?php

    }

}
//add_action('woocommerce_after_shop_loop_item', 'get_star_rating' );
//function get_star_rating()
//{
//    global $woocommerce, $product;
//    $average = $product->get_average_rating();
//
//    echo '<div class="star-rating"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';
//}
//
//?>
<?php


add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields',0,1 );

function custom_override_checkout_fields($fields){
    $fields['billing']['billing_first_name']['input_class'] = array('memo');
    return $fields;
}


require_once('inc/customize/social-media.php');

require_once('inc/customize/slider-1.php');
require_once('inc/customize/slider-2.php');







