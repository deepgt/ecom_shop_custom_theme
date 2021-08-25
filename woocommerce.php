<?php
    get_header();
?>

<div class="wo-container">
    <div class="wo-body">
        <div class="wo-sidebar">
            <div class="sidebar-sticky">
                <?php dynamic_sidebar('custom-woo-shop-sidebar'); ?>
            </div>
        </div>
        <div class="wo-content">
            <?php  woocommerce_content(); ?>
        </div>
    </div> 
</div>
</div>
<?php
    get_footer();
?>