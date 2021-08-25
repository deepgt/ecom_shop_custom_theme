<?php

if ( ! function_exists( 'top_store_logo' ) ){
    function top_store_logo(){
        ?>
        <?php the_custom_logo();?>
        <!-- <a href="<?php bloginfo('url');?>">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" class="img-fluid logo">
        </a> -->
        <div class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        </div>
    <?php
    }
};



if ( ! function_exists( 'top_store_product_search_box' ) ){
    function top_store_product_search_box(){
        ?>
        <div>
            <form action='<?php echo esc_url( home_url( '/'  ) ); ?>' id='search-form' class="woocommerce-product-search " method='get' target='_top'>
            <input id='search-text' name='s' placeholder='<?php echo esc_attr('Search for products, brands and more'); ?>' class="form-control search-autocomplete search-box" value='<?php echo get_search_query(); ?>' type='text' title='<?php echo esc_attr_x( 'Search for:', 'label' ); ?>' />
            <button class="search-button" id='search-button' value="<?php echo esc_attr_x( 'Submit','submit button' ); ?>" type='submit'>                     
                <i class="fa fa-search search-icon" aria-hidden="true"></i>
            </button>
            <input type="hidden" name="post_type" value="product" />
            </form>
        </div> 
<?php    
    }
};


function account(){
    if ( is_user_logged_in() ){?>
            <a class="account-section" href="<?php echo esc_url("http://localhost/customshop/account");?>">
                <div class="header-account-section">
                    <div class="account-text">
                        <i class="fa fa-user-o" aria-hidden="true"></i>
                        <?php top_store_display_admin_name(); ?>
                    </div>
                </div>
             </a>
   <?php } else {?>
        <a class="account-section" href="<?php echo esc_url("http://localhost/customshop/login");?>">
            <div class="header-account-section">
                <div class="account-text"><?php _e('Login');?></div>
            </div>
        </a>
   <?php }
    }

function top_store_display_admin_name(){
    $user=wp_get_current_user();
    echo esc_html($user->user_nicename); 
}


if ( ! function_exists( 'top_store_cart_total_item' ) ){
    /**
     * Cart Link
     * Displayed a link to the cart including the number of items present and the cart total
     */
   function top_store_cart_total_item(){
     global $woocommerce; 
    ?>
    <a href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>" class="cart-total">
       <span class="cart-count"> 
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span class="cart-total-background">
                <div class="cart-total-number">
                    <?php echo WC()->cart->get_cart_contents_count(); ?>
                </div>
         </span>
        </span> 

        <?php echo WC()->cart->get_cart_total(); ?>
    </a>
    <?php }
  }


//cart view function
  function top_store_menu_cart_view($cart_view){
      global $woocommerce;
      $cart_view= top_store_cart_total_item();
      return $cart_view;
  }
add_action( 'top_store_cart_count','top_store_menu_cart_view');


function top_store_woo_cart_product(){
    global $woocommerce;
    ?>
    <div id="open-cart" class="open-cart">
    <div class="quickcart-dropdown">
        <?php 
            woocommerce_mini_cart(); 
        ?>
    </div>
    </div>
<?php
    }
add_action( 'top_store_woo_cart', 'top_store_woo_cart_product' );
