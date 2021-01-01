<?php


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

global $product;

if ( ! wc_review_ratings_enabled() ) {
    return;
}
?>
<div class="product-rating-wrap">
    <div class="product-rating">
        <?php echo wc_get_rating_html( $product->get_average_rating() ); // WordPress.XSS.EscapeOutput.OutputNotEscaped.
        ?>
    </div>
</div>

<?php
?>


