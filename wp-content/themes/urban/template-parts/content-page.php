<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>


<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <?php  woocommerce_breadcrumb();?>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <h3 class="cart-page-title"><?php the_title();?></h3>
			   
			   <?php the_content(); ?>