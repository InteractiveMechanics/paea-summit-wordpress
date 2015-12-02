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

							<a href="<php? the_permalink(); ?>">
							<h2><?php the_title(); ?></h2></a>
							<p>

							<?php 

              if ( has_post_format( 'image' )) {

              get_template_part('content-image', get_post_format());

              } else if (has_post_format('video')) {

              get_template_part('content-video', get_post_format()); 

               } else if (has_post_format('link')) {

              get_template_part('content-link', get_post_format());

              } else {

							echo get_the_excerpt();

					 }; ?>
					</p>
				</div>
				<div class="col-sm-8 col-sm-offset-2">

					<svg version="1.1" id="comment-bubble" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-14 -1.1 15 13.1" enable-background="new -14 -1.1 15 13.1" xml:space="preserve">
						<g>
							<g>
								<path fill="#DD433E" d="M-0.9-1.1h-11.2c-1.1,0-1.9,0.8-1.9,1.9v6.6c0,1,0.8,1.9,1.9,1.9h3.7l3.7,2.8V9.3H-1c1,0,1.9-0.8,1.9-1.9
								V0.8C1-0.3,0.1-1.1-0.9-1.1z"/>
							</g>
						</g>
					</svg>
					<ul>
						<li><?php echo get_comments_number() ?> Responses</li>
						<li><span class="vertical_divider"></span></li>
						<li><?php the_date(); ?></li>
					</ul>

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

	