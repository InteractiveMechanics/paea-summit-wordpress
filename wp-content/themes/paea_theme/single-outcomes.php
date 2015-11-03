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

      <main id="post-<?php the_ID(); ?>" class="single-outcome">
			<section>
    		<div class="container">
      		<div class="row">
       			<div class="col-sm-8 col-sm-offset-2 generic-page">



         			<h2><?php the_title(); ?></h2>

              <?php 

              if ( has_post_format( 'image' )) {

              get_template_part('content-image', get_post_format());

              } else if (has_post_format('video')) {

              get_template_part('content-video', get_post_format()); 


              } else {

              if ( has_post_thumbnail() ) {
                  the_post_thumbnail();
                  } 
                  the_content();

         	    }; ?>

       			</div>
     			</div>
   			</div>
  		</section>

      <section id="comments">
      <div class="row">
        <div id="comments-container" class="col-xs-10 col-sm-8 col-xs-offset-1 col-sm-offset-2">
          <div class="comments-header">
              <h3><?php echo get_comments_number() ?> Comments</h3>
          </div> <!-- END COMMENTS HEADER -->
          <h2 class="comments-title"></h2>

          <div class="comments-body">
            <div class="comment-detail">
              <?php comments_template(); ?>
            </div>
          </div>
        </div> <!-- END COMMENTS CONTAINER -->
      </div> <!-- END ROW -->
    </section> 
  </main>


			<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>