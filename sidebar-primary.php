  <div class="sidebar-main">
    <?php 
    if ( class_exists( 'WooCommerce' ) ){ ?>
      <div class="menu-category-list">
        <div class="toggle-cat-wrap dropdown">
          <p class="cat-toggle dropdown-toggle" data-toggle="dropdown">
            <span class="toggle-title"><?php _e('Category','custom');?></span>
          </p>
          <div class="dropdown-menu">
            <?php top_store_product_list_categories(); ?>
          </div>
        </div>
      </div><!-- menu-category-list -->
           <?php }
            if(class_exists( 'WooCommerce' )){
                  if ( is_active_sidebar('custom-woo-shop-sidebar') ){
                           dynamic_sidebar('custom-woo-shop-sidebar');
                    }
                  }
                }
			    
           ?>
  </div> <!-- sidebar-main End -->               