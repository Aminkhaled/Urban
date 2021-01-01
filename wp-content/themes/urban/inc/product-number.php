<?php
add_action( 'woocommerce_product_query', 'woocommerce_product_query' );
function woocommerce_product_query( $q ) {
    if ( $q->is_main_query() && ( $q->get( 'wc_query' ) === 'product_query' ) ) {
        $q->set( 'posts_per_page', '2' );
    }
}