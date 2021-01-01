<?php


if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $product;
?>

<?php if ( $price_html = $product->get_price_html() ) : ?>
    <div class="product-price-2">
        <?php
        if($product->get_sale_price() ){
            ?>
            <span class="new-price"><?php echo get_woocommerce_currency_symbol(); ?> <?php echo $product->get_sale_price() ?></span>
            <span class="old-price"><?php echo get_woocommerce_currency_symbol();?> <?php echo  $product->get_regular_price() ?></span>
            <?php
        }else{
            ?>
            <Span><?php echo $price_html?></Span>
            <?php
        }
        ?>

    </div>
<?php endif; ?>
