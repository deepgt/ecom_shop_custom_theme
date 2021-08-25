<?php
get_header();
?>
     <div id="content" class="page-content">
        	<div class="content-wrap" >
        		<div class="container">
		<?php
			if( have_posts()): ?>
			<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
				get_template_part( 'template-parts/content', 'search' );
				endwhile;
				
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
                           </div> <!-- end primary-content-wrap-->
        				</div> <!-- end primary primary-content-area-->
     </div> <!-- end content page-content -->
<?php get_footer();?>