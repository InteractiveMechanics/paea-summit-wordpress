<?php
/**
 * Template Name: Conduct
 *
 * @package WordPress
 * @subpackage PAEA_Summit
 * @since PAEA Summit 1.0
 */

get_header(); ?>

<?php /* The loop */ ?>
	<?php while ( have_posts() ) : the_post(); 
		$page_heading = get_field('page_heading');
		$body_copy = get_field('body_copy');

	?>

		<main class="generic-page">

			<section>
				<div class="container">
        	<div class="row">
          	<div class="col-sm-8 col-sm-offset-2">
							<h2><?php echo $page_heading; ?></h2>
							</div>
          </div>
        </div>
      </section>

      <section>
				<div class="container">
        	<div class="row">
          	<div class="col-sm-8 col-sm-offset-2">
            	<?php echo $body_copy; ?>
          	</div>
          </div>
        </div>
      </section>
			
		</main>

	

	<?php endwhile; ?>





<?php get_footer(); ?>