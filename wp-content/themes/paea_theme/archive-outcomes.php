<?php
/**
 * The template for the Outcomes archive
 *
 * @package WordPress
 * @subpackage PAEA_Summit
 * @since PAEA Summit 1.0
 */

get_header(); ?>



			<main id="outcomes-page">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 discussion-header">
            	<h2>Summit Outcomes</h2>
            	<!--<?php the_field('page_summary', get_option('page_for_posts')); ?>-->
					</div>
				</div> <!-- END ROW -->
			</div> <!-- END CONTAINER -->
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 bottom_divider"></div>
				</div> <!-- END ROW -->
			</div> <!-- END CONTAINER -->

			<?php if ( have_posts() ): ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="container">
	<div class="row">
		<section class="outcomes-post" id="post-<?php the_ID(); ?>">
			<div class="col-sm-8 col-sm-offset-2">

				<ul>
					<li><?php the_date(); ?></li>
				</ul>
				<a href="<? the_permalink(); ?>">
					<h4><?php the_title(); ?></h4></a>
					
						<!--<svg version="1.1" id="right-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="-2 -3.4 38.6 16.4" enable-background="new -2 -3.4 38.6 16.4" xml:space="preserve">
		       	<polygon fill="" points="27.8,-3.4 26.5,-1.9 32.6,3.8 -2,3.8 -2,5.8 32.6,5.8 26.5,11.5 27.8,13 36.6,4.8 "/>
		    		</svg>-->
					
					<?php the_excerpt(); ?>
				</div>
		</section>

	</div> <!-- END ROW -->
</div> <!-- END CONTAINER -->

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2 bottom_divider"></div>
	</div> <!-- END ROW -->
</div> <!-- END CONTAINER -->


				<?php endwhile; ?>
			<?php endif; ?>

</main>



<?php get_footer(); ?>

	