<?php
/**
 * The template for displaying Outcomes
 *
 * @package WordPress
 * @subpackage PAEA_Summit
 * @since PAEA Summit 1.0
 */

get_header(); ?>

	
			<?php while ( have_posts() ) : the_post();?>

			<section>
    		<div class="container">
      		<div class="row">
       			<div class="col-sm-8 col-sm-offset-2 generic-page">

         			<h2><?php the_title(); ?></h2>

         			<?php the_content(); ?>
         	
       			</div>
     			</div>
   			</div>
  		</section>


			<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>