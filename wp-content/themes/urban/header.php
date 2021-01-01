<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Urban</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri()?>/assets/images/favicon.png">

    <!-- All CSS is here
	============================================ -->


    <?php
    wp_head();
    ?>
    <!-- Use the minified version files listed below for better performance and remove the files listed above
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>

<div class="main-wrapper">
    <header class="header-area">
        <div class="container">
            <div class="header-large-device">
                <div class="header-top header-top-ptb-1 border-bottom-1">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="header-offer-wrap">
                                <p><i class="icon-paper-plane"></i> Put your House in Art Area</p>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="header-top-right">
                                <div class="same-style-wrap">


                                    <div class="same-style same-style-border language-wrap">
                                        <a class="language-dropdown-active" href="#">English <i class="icon-arrow-down"></i></a>
                                        <div class="language-dropdown">
                                            <ul>
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">French</a></li>
                                                <li><a href="#">German</a></li>
                                                <li><a href="#">Spanish</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="social-style-1 social-style-1-mrg">
                                    <?php
                                    if(get_theme_mod('twitter_setting')){
                                        ?>
                                        <a href="<?php echo get_theme_mod('twitter_setting') ?>"><i class="icon-social-twitter"></i></a>
                                    <?php
                                    }

                                    ?>
                                    <?php
                                    if(get_theme_mod('facebook_setting')){
                                        ?>
                                        <a href="<?php echo get_theme_mod('facebook_setting') ?>"><i class="icon-social-facebook"></i></a>
                                        <?php
                                    }

                                    ?>
                                    <?php
                                    if(get_theme_mod('instagram_setting')){
                                        ?>
                                        <a href="<?php echo get_theme_mod('instagram_setting') ?>"><i class="icon-social-instagram"></i></a>
                                        <?php
                                    }

                                    ?>
                                    <?php
                                    if(get_theme_mod('youtube_setting')){
                                        ?>
                                        <a href="<?php echo get_theme_mod('youtube_setting') ?>"><i class="icon-social-youtube"></i></a>
                                        <?php
                                    }

                                    ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="<?php echo home_url()?>">
                                    <?php
                                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'logo' );
                                    if ( has_custom_logo() ) {
                                        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'Sham House' ) . '">';
                                    } else {
                                        echo '<h1>'. get_bloginfo( 'Shamii House' ) .'</h1>';
                                    }
                                    ?>
                                </a>
                                                  </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="main-menu main-menu-padding-1 main-menu-lh-1">
                                <nav>
                                  <?php wp_nav_menu(array(
                                          'theme_location'=> 'nardo_primary',
                                            'container' => 'false',
                                            'container_class'=> false,
                                             'menu_class' => 'sub-menu-style'
                                  )) ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-small-device small-device-ptb-1">
                <div class="row align-items-center">
                    <div class="col-5">
                        <div class="mobile-logo">
                            <a href="<?php echo home_url()?>">
                                <?php
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'logo' );
                                if ( has_custom_logo() ) {
                                    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'Sham House' ) . '">';
                                } else {
                                    echo '<h1>'. get_bloginfo( 'Shamii House' ) .'</h1>';
                                }
                                ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="header-action header-action-flex">
                            <div class="same-style-2 main-menu-icon">
                                <a class="mobile-header-button-active" href="#"><i class="icon-menu"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Mobile menu start -->
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="clickalbe-sidebar-wrap">
            <a class="sidebar-close"><i class="icon_close"></i></a>
            <div class="mobile-header-content-area">

                <div class="mobile-search mobile-header-padding-border-1">
                    <form class="search-form" action="#">
                        <input type="text" placeholder="Search here…">
                        <button class="button-search"><i class="icon-magnifier"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-padding-border-2">
                    <!-- mobile menu start -->
                    <nav>
                        <nav>
                            <?php wp_nav_menu(array(
                                'theme_location'=> 'nardo_primary',
                                'container'=> false,
                                'menu_class'=>'mobile-menu'
                        )) ?>
                        </nav>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-padding-border-3">

                    <div class="single-mobile-header-info">
                        <a class="mobile-language-active" href="#">Language <span><i class="icon-arrow-down"></i></span></a>
                        <div class="lang-curr-dropdown lang-dropdown-active">
                            <ul>
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-contact-info mobile-header-padding-border-4">
                    <ul>
                        <li><i class="icon-phone "></i> (+612) 2531 5600</li>
                        <li><i class="icon-envelope-open "></i> norda@domain.com</li>
                        <li><i class="icon-home"></i> PO Box 1622 Colins Street West Australia</li>
                    </ul>
                </div>
                <div class="mobile-social-icon">
                    <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                    <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                    <a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                    <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

<?php woocommerce_mini_cart(); ?>
