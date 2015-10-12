<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage PAEA_Summit
 * @since PAEA Summit 1.0
 */

get_header(); ?>

			<main id="discussion-page">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
            	<h2><?php the_field('page_heading', get_option('page_for_posts')); ?></h2>
            	<p><?php the_field('page_summary', get_option('page_for_posts')); ?></p>
					</div>
				</div> <!-- END ROW -->
			</div> <!-- END CONTAINER -->
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1 bottom_divider"></div>
				</div> <!-- END ROW -->
			</div> <!-- END CONTAINER -->
		

		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('content-blog', get_post_format()); ?>
		<?php endwhile; ?>
		<?php endif; ?>

</main>

<?php get_footer(); ?>
