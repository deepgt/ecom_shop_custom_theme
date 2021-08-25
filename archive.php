<?php
get_header();
 ?>

<div id="content" class="page-content archive">
            <div class="content-wrap" >
                <div class="container">
        <?php
            if( have_posts()):
                /* Start the Loop */
                while ( have_posts() ) : the_post();
                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                get_template_part( 'template-parts/content', get_post_format() );
                endwhile;
                
            else :
                get_template_part( 'template-parts/content', 'none' );
            endif;
            ?>
                </div>
            </div> <!-- end content-wrap -->
        </div> <!-- end content page-content -->

<?php 
    get_footer();
?>