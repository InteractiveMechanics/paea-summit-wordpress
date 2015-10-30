<?php
/**
 * Template Name: Outcomes
 *
 * @package WordPress
 * @subpackage PAEA_Summit
 * @since PAEA Summit 1.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); 
	
		$page_heading = get_field('page_heading');
		$page_summary = get_field('page_summary');
?>	

<main id="outcomes-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
        <h2><?php echo $page_heading; ?></h2>
        <p><?php echo $page_summary; ?></p>
			</div>
		</div> <!-- END ROW -->
	</div> <!-- END CONTAINER -->

	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 bottom_divider"></div>
		</div> <!-- END ROW -->
	</div> <!-- END CONTAINER -->




</main>

<?php endwhile; ?>

<?php get_footer(); ?>