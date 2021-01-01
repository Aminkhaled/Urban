<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header();


?>

<?php if(is_cart() || is_checkout() ):?>

    <div class="cart-items">
    <div class="container">

<?php elseif(is_account_page()) :?>

    <div class="container">
    <div class="login-page">

<?php endif; ?>



<div class="text-center">
    <img src="<?php echo get_template_directory_uri()?>/assets/images/404.gif" alt="NotFound">
</div>



    </div>
    </div>
<?php
get_footer();

?>
