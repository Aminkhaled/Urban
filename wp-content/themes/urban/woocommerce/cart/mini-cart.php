<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_mini_cart' ); ?>

<?php if ( ! WC()->cart->is_empty() ) : ?>
    <div class="sidebar-cart-active">
        <div class="sidebar-cart-all">


            <div class="cart-content">
                <h3>Shopping Cart</h3>
<ul>
    <?php
		do_action( 'woocommerce_before_mini_cart_contents' );

		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				?>

                <?php
			    $product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
				$thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image('cart-product'), $cart_item, $cart_item_key );
				$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
				$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
				?>
                <li class="single-product-cart">
                    <?php
                    echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                        'woocommerce_cart_item_remove_link',
                        sprintf(
                            '<a href="%s" class="icon_close" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s"></a>',
                            esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                            esc_attr__( 'Remove this item', 'woocommerce' ),
                            esc_attr( $product_id ),
                            esc_attr( $cart_item_key ),
                            esc_attr( $_product->get_sku() )
                        ),
                        $cart_item_key
                    );
                    ?>
					<?php if ( empty( $product_permalink ) ) : ?>
                        <div class="cart-img">
                            <?php echo $thumbnail ; ?>
                        </div>
                        <div class="cart-title">
                            <h4>  <?php echo $product_name; ?></h4>
                            <span>
                                					<?php echo wc_get_formatted_cart_item_data( $cart_item ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                                                    <?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

                            </span>
                        </div>
					<?php else : ?>
						<a href="<?php echo esc_url( $product_permalink ); ?>">
                            <div class="cart-img">
                                <?php echo $thumbnail; ?>
                            </div>
                            <div class="cart-title">
                                <h4>  <?php echo $product_name; ?>
                                    <span class="span-cart">
                                					<?php echo wc_get_formatted_cart_item_data( $cart_item ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                                                    <?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

                            </span>
                                </h4>
                            </div>
						</a>
					<?php endif; ?>
				</li>
				<?php
			}
		}

		do_action( 'woocommerce_mini_cart_contents' );
		?>
	</ul>
                <div class="cart-total">


	<h4>
		<?php
		/**
		 * Hook: woocommerce_widget_shopping_cart_total.
		 *
		 * @hooked woocommerce_widget_shopping_cart_subtotal - 10
		 */
		do_action( 'woocommerce_widget_shopping_cart_total' );
		?>
	</h4>
                </div>
	<?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>

                <div class="cart-checkout-btn">
                    <a class="btn-hover cart-btn-style" href="<?php echo wc_get_cart_url(); ?>">view cart</a>
                    <a class="no-mrg btn-hover cart-btn-style" href="<?php echo wc_get_checkout_url()?>">checkout</a>
                </div>
	<?php do_action( 'woocommerce_widget_shopping_cart_after_buttons' ); ?>

        </div>
    </div>
</div>
<?php else : ?>

<!--	<p class="woocommerce-mini-cart__empty-message">--><?php //esc_html_e( 'No products in the cart.', 'woocommerce' ); ?><!--</p>-->

<?php endif; ?>

<?php do_action( 'woocommerce_after_mini_cart' ); ?>
