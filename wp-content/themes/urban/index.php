
<?php get_header(); ?>



<div class="product-categories-area product-categories-border pt-50 pb-20">
    <div class="container">
        <div class="product-categories-wrap-2">
            <div class="single-product-categories-2 mb-30">
                <div class="product-categories-2-icon">
                    <i class="icon-people"></i>
                </div>
                <div class="product-categories-2-content">
                    <h4><a href="shop.html">Iran</a></h4>
                </div>
            </div>
            <div class="single-product-categories-2 mb-30">
                <div class="product-categories-2-icon">
                    <i class="icon-fire "></i>
                </div>
                <div class="product-categories-2-content">
                    <h4><a href="shop.html">Turkey</a></h4>
                </div>
            </div>
            <div class="single-product-categories-2 mb-30">
                <div class="product-categories-2-icon">
                    <i class="icon-handbag"></i>
                </div>
                <div class="product-categories-2-content">
                    <h4><a href="shop.html">Russia</a></h4>
                </div>
            </div>
            <div class="single-product-categories-2 mb-30">
                <div class="product-categories-2-icon">
                    <i class="icon-people"></i>
                </div>
                <div class="product-categories-2-content">
                    <h4><a href="shop.html">Iraq</a></h4>
                </div>
            </div>
            <div class="single-product-categories-2 mb-30">
                <div class="product-categories-2-icon">
                    <i class="icon-emotsmile "></i>
                </div>
                <div class="product-categories-2-content">
                    <h4><a href="shop.html">Azerbaijan
                        </a></h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="slider-area">
    <div class="hero-slider-active-1 nav-style-1 dot-style-2 dot-style-2-position-2 dot-style-2-active-black">
        <div class="single-hero-slider single-animation-wrap slider-height-2 custom-d-flex custom-align-item-center bg-img hm2-slider-bg res-white-overly-xs" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/slider/1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slider-content-4 slider-animated-1">
                            <h4 class="animated">Lookbook</h4>
                            <h1 class="animated">Denim Mixed <br>Layering Combine <br>collect</h1>
                            <p class="animated">We love seeing how our Raifa wearers like to wear their Norda</p>
                            <div class="btn-style-1">
                                <a class="animated btn-1-padding-1" href="product-details.html">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero-slider single-animation-wrap slider-height-2 custom-d-flex custom-align-item-center bg-img hm2-slider-bg res-white-overly-xs " style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/slider/2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slider-content-4 slider-animated-1">
                            <h4 class="animated">Lookbook</h4>
                            <h1 class="animated">Denim Mixed <br>Layering Combine <br>collect</h1>
                            <p class="animated">We love seeing how our Raifa wearers like to wear their Norda</p>
                            <div class="btn-style-1">
                                <a class="animated btn-1-padding-1" href="product-details.html">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area pt-115 pb-100">
    <div class="container">
        <div class="section-title-tab-wrap mb-55">
            <div class="section-title-4">
                <h2>Best-Seller Products</h2>
            </div>
            <div class="tab-btn-wrap-2">
                <div class="tab-style-5 nav">
                    <a class="active" href="#product-1" data-toggle="tab">All </a>
                    <a href="#product-2" data-toggle="tab"> Chevrolet </a>
                    <a href="#product-3" data-toggle="tab">Audi </a>
                    <a href="#product-5" data-toggle="tab"> BMW</a>
                </div>
                <div class="btn-style-6 ml-60">
                    <a href="shop.html">All Product</a>
                </div>
            </div>
        </div>
        <div class="tab-content jump">
            <div id="product-1" class="tab-pane active">
                <div class="row">
                    <?php
                  $display_count = 8;
                  $args = array(
                          'post_type' => 'product',
                           'post_status' => 'publish',
                            'post_perpage' => $display_count,
                             'order' =>  'ASC'
                  );
                    $loop = new WP_Query( $args );
                    if ( $loop->have_posts() ):
                    while($loop-> have_posts()):
                    ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="<?php esc_url($loop->post->ID ) ?>">
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'home-product' );?>

                                    <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html"><?php $loop->get_title() ?></a></h3>

                            </div>

                        </div>
                    </div>
                    <?php

                    endwhile;
                    endif;

                    ?>



                </div>
            </div>
            <div id="product-2" class="tab-pane">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/images/product/product-9.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$20.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$20.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/images/product/product-10.jpg" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-20%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-18.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$35.45</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$35.45</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/images/product/product-11.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$45.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$45.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-16.jpg" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-20%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/images/product/product-13.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$55.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$55.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/images/product/product-14.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$65.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$65.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-13.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$75.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$75.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-3" class="tab-pane">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-16.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$20.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$20.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-15.jpg" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-20%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-14.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$35.45</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$35.45</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-13.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$45.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$45.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-20.jpg" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-20%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-19.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$55.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$55.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-18.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$65.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$65.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-17.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$75.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$75.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-4" class="tab-pane">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-14.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$20.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$20.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-13.jpg" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-20%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-16.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$35.45</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$35.45</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-15.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$45.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$45.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-18.jpg" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-20%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-17.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$55.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$55.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-20.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$65.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$65.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-19.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$75.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$75.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-5" class="tab-pane">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-15.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$20.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$20.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-13.jpg" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-20%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-16.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$35.45</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$35.45</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-14.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$45.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$45.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-19.jpg" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-20%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-17.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$55.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$55.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-20.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$65.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$65.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-18.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$75.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$75.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="banner-area section-padding-2 pt-40 pb-85">-->
<!--    <div class="container-fluid">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-6">-->
<!--                <div class="banner-wrap mb-30">-->
<!--                    <div class="banner-img banner-img-zoom">-->
<!--                        <a href="product-details.html"><img src="assets/images/banner/banner-8.jpg" alt=""></a>-->
<!--                    </div>-->
<!--                    <div class="banner-content-9">-->
<!--                        <span>new arrivals <br>women</span>-->
<!--                        <h2>Minimalist <br>Blazer</h2>-->
<!--                        <p>A collection in minilaist style for basic blazer</p>-->
<!--                        <div class="btn-style-1">-->
<!--                            <a class="btn-1-padding-3 bg-white banner-btn-res" href="product-details.html">SHOP NOW</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-6">-->
<!--                <div class="banner-wrap mb-30">-->
<!--                    <div class="banner-img banner-img-zoom">-->
<!--                        <a href="product-details.html"><img src="assets/images/banner/banner-9.jpg" alt=""></a>-->
<!--                    </div>-->
<!--                    <div class="banner-content-10">-->
<!--                        <span>mega sale</span>-->
<!--                        <h2><span>50%</span> OFF <br>for Autumn</h2>-->
<!--                        <p>Backpack BYORK, don’t miss out in this mage sale</p>-->
<!--                        <div class="btn-style-1">-->
<!--                            <a class="btn-1-padding-3 bg-white banner-btn-res" href="product-details.html">SHOP NOW</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="product-area pt-115 ">
    <div class="container">
        <div class="section-title-tab-wrap mb-55">
            <div class="section-title-4">
                <h2>Best-Seller Products</h2>
            </div>
            <div class="tab-btn-wrap-2">
                <div class="tab-style-5 nav">
                    <a class="active" href="#product-1" data-toggle="tab">All </a>
                    <a href="#product-2" data-toggle="tab"> Chevrolet </a>
                    <a href="#product-3" data-toggle="tab">Audi </a>
                    <a href="#product-5" data-toggle="tab"> BMW</a>
                </div>
                <div class="btn-style-6 ml-60">
                    <a href="shop.html">All Product</a>
                </div>
            </div>
        </div>
        <div class="tab-content jump">
            <div id="product-1" class="tab-pane active">
                <div class="row">
                    <?php
                    $display_count = 8;
                    $args = array(
                        'post_type' => 'product',
                        'post_status' => 'publish',
                        'post_perpage' => $display_count,
                        'order' =>  'ASC'
                    );
                    $loop = new WP_Query( $args );
                    if ( $loop->have_posts() ):
                        while($loop-> have_posts()):
                            ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="<?php esc_url($loop->post->ID ) ?>">
                                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'home-product' );?>

                                            <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html"><?php $loop->get_title() ?></a></h3>

                                    </div>

                                </div>
                            </div>
                        <?php

                        endwhile;
                    endif;

                    ?>



                </div>
            </div>
            <div id="product-2" class="tab-pane">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/images/product/product-9.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$20.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$20.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/images/product/product-10.jpg" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-20%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-18.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$35.45</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$35.45</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/images/product/product-11.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$45.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$45.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-16.jpg" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-20%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/images/product/product-13.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$55.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$55.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/images/product/product-14.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$65.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$65.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-13.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$75.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$75.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-3" class="tab-pane">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-16.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$20.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$20.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-15.jpg" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-20%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-14.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$35.45</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$35.45</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-13.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$45.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$45.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-20.jpg" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-20%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-19.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$55.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$55.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-18.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$65.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$65.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-17.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$75.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$75.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-4" class="tab-pane">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-14.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$20.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$20.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-13.jpg" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-20%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-16.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$35.45</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$35.45</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-15.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$45.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$45.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-18.jpg" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-20%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-17.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$55.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$55.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-20.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$65.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$65.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-19.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$75.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$75.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-5" class="tab-pane">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-15.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$20.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$20.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-13.jpg" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-20%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-16.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$35.45</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$35.45</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-14.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$45.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$45.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-19.jpg" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-20%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-17.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$55.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$55.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-20.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$65.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$65.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-18.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$75.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$75.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="brand-logo-area pb-100">-->
<!--    <div class="container">-->
<!--        <div class="brand-logo-wrap brand-logo-mrg">-->
<!--            <div class="single-brand-logo mb-10">-->
<!--                <img src="assets/images/brand-logo/brand-logo-1.png" alt="brand-logo">-->
<!--            </div>-->
<!--            <div class="single-brand-logo mb-10">-->
<!--                <img src="assets/images/brand-logo/brand-logo-2.png" alt="brand-logo">-->
<!--            </div>-->
<!--            <div class="single-brand-logo mb-10">-->
<!--                <img src="assets/images/brand-logo/brand-logo-3.png" alt="brand-logo">-->
<!--            </div>-->
<!--            <div class="single-brand-logo mb-10">-->
<!--                <img src="assets/images/brand-logo/brand-logo-4.png" alt="brand-logo">-->
<!--            </div>-->
<!--            <div class="single-brand-logo mb-10">-->
<!--                <img src="assets/images/brand-logo/brand-logo-5.png" alt="brand-logo">-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="instagram-area">
    <div class="container-fluid p-0">
        <div class="instagram-wrap">
            <div class="instagram-carousel-2 instagram-style-2" id="instagramFeedOne">
            </div>
        </div>
    </div>
</div>
<div class="subscribe-area pt-115 pb-115">
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

<?php get_footer(); ?>
