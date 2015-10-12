<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
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

         	<h2><?php the_title(); ?></h2>

         	<?php the_content(); ?>
         	
       </div>
     </div>
   	</div>
  </section>

<?php endwhile; ?>

<?php get_footer(); ?>