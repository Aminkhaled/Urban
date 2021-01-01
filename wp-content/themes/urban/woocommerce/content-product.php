<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $product;
?>



<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">

    <div class="single-product-wrap mb-35">

        <?php do_action('woocommerce_before_shop_loop_item'); ?>


    <?php do_action('woocommerce_before_shop_loop_item_title'); ?>
        <div class="product-content-wrap-2 text-center"">

        <?php do_action('woocommerce_shop_loop_item_title'); ?>
    <?php do_action('woocommerce_after_shop_loop_item_title'); ?>
        </div>
<div class="product-content-wrap-2 product-content-position text-center">




    <?php do_action('woocommerce_shop_loop_item_title'); ?>
    <?php do_action('woocommerce_after_shop_loop_item_title'); ?>
    <div class="pro-add-to-cart">


    <?php
    echo apply_filters(
        'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
        sprintf(
            '<a href="%s" title="Read More" data-quantity="%s" class="% button" %s>%s</a>',
            esc_url( $product->add_to_cart_url() ),
            esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
            esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
            isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
            esc_html( $product->add_to_cart_text() )
        ),
        $product,
        $args
    );

    ?>
    </div>
</div>

</div>

</div>
