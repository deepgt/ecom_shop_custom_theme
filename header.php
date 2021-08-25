<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eshop</title>
    <?php
        wp_head();
    ?>
</head>
<body  <?php body_class(); ?>>
    
<header class="sticky-top">
    <div class="main-header">
        <div class="logo">
            <?php top_store_logo();?> 
        </div>

        <div class="search-box">
            <?php top_store_product_search_box(); ?>
        </div>

        <div class="account-cart">
            <ul>
                <li><?php 
                do_action( 'top_store_cart_count' );
                do_action( 'top_store_woo_cart' );
                ?></li>
                <li><span class="line"></span><li>
                <button>
                    <li><?php account(); ?></li>
                </button>
            </ul>
            </div>
        </div>

    </div>

    <div class="header-menu-nav">

        <div class="dropdown">
            <button class="dropbtn">
                <div class="cat-wrap">
                <i class="fa fa-bars"></i>
                <span><?php _e('Category'); ?></span>
                </div>
                <i class="fa fa-angle-down"></i>
            </button>
            <div class="dropdown-content" >
                <?php custom_product_list_categories(); ?>
            </div>
        </div>

        <div class="main-header-menu">
                <div class="menu-category-list">
                    <?php
                                wp_nav_menu(
                                    array(
                                        'theme location' => 'top-menu',
                                    )
                                )
                            ?>
                </div>
        </div>
    </div>
        
    

</header>