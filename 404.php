<?php
get_header();
?>

<div class="page-content">
			<div class="error-404 container">
				<div class="error-heading">
					<h2 class="entry-title"><?php esc_html_e( '404'); ?></h2>
					<h3><?php esc_html_e( 'Oops! That page can&rsquo;t be found.'); ?></h3>
				</div><!-- .error-heading -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?'); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .error-404 -->
</div>
<?php get_footer();?>