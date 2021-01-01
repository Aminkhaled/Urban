<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>
<?php get_header() ?>
<?php do_action('woocommerce_before_main_content'); ?>



<div class="shop-area pt-120 pb-120">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">

                <div class="shop-bottom-area">
                    <div class="tab-content jump">
                        <div id="shop-1" class="tab-pane active">
                            <div class="row">
                                <?php

                                $args = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 9,
                                    ///'meta_key' => '_featured',
                                    ///'meta_value' => 'yes'
                                );

                                global $wp_query;

                                $wp_query = new WP_Query($args);


                                if($wp_query->have_posts()) :
                                    ?>

                                    <?php woocommerce_product_loop_start(); ?>


                                    <?php while($wp_query->have_posts()) : $wp_query->the_post(); ?>

                                    <?php wc_get_template_part('content','product');?>

                                <?php endwhile; ?>

                                    <div class="clearfix"></div>
                                    <?php woocommerce_product_loop_end();?>
                                <?php endif;?>


                            </div>
                        </div>

                    </div>
                    <div class="pro-pagination-style text-center mt-10">
                        <ul>
                            <li><a class="prev" href="#"><i class="icon-arrow-left"></i></a></li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a class="next" href="#"><i class="icon-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="subscribe-area bg-gray pt-115 pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="section-title">
                    <h2>keep connected</h2>
                    <p>Get updates by subscribe our weekly newsletter</p>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div id="mc_embed_signup" class="subscribe-form">
                    <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                        <div id="mc_embed_signup_scroll" class="mc-form">
                            <input class="email" type="email" required="" placeholder="Enter your email address" name="EMAIL" value="">
                            <div class="mc-news" aria-hidden="true">
                                <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                            </div>
                            <div class="clear">
                                <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php do_action('woocommerce_after_main_content'); ?>
<?php get_footer() ?>
