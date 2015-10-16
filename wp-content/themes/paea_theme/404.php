<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage PAEA_Summit
 * @since PAEA Summit 1.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>	
	<section>
    <div class="container">
      <div class="row">
       <div class="col-sm-8 col-sm-offset-2 generic-page">

         	<h2>Oops! That page can&rsquo;t be found.</h2>

         	<p>Perhaps you were looking for?</p>

         	<ul>
         		<li><a href="<?php echo site_url('/about/') ?>">Information about The Summit</a></li>
          	<li><a href="<?php echo site_url('/for-attendees/') ?>">Information for Attendees</a></li>
          	<li><a href="<?php echo site_url('/discussion/') ?>">Discussion Questions</a></li>
          	<li><a href="<?php echo site_url('/schedule/') ?>">The Summit Schedule</a></li>


         	</ul>


       </div>
     </div>
   	</div>
  </section>

<?php endwhile; ?>


<?php get_footer(); ?>