<?php
/**
 * The template for displaying Outcomes
 *
 * @package WordPress
 * @subpackage PAEA_Summit
 * @since PAEA Summit 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();?>

			<?php endwhile; // end of the loop. ?>


 
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>