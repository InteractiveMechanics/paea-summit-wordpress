<?php
/**
 * The template for displaying single posts
 *
 * @package WordPress
 * @subpackage PAEA_Summit
 * @since PAEA Summit 1.0
 */

get_header(); ?>


		<?php while ( have_posts() ) : the_post(); 
			$hero_image = get_field('hero_image');

		?>

	<main id="post-<?php the_ID(); ?>">
				<div class="jumbotron" style="background-image:url('<?php echo $hero_image; ?>');">
      	<div class="container">
      		<div class="row">
      			<ul class="top_banner">
      				<li>Question No. <?php echo get_post_meta($post->ID,'incr_number',true); ?>

      				</li>
      				<li><span class="vertical_divider"></span></li>
      				<li><?php the_date(); ?></li>
      			</ul>
            <div class="col-xs-10 col-sm-10 col-xs-offset-1 col-sm-offset-1 page-subtitle">
      			 <p><?php the_title(); ?></p>
            </div>
      		</div> <!-- END ROW -->
      	</div> <!-- END CONTAINER -->
      </div> <!-- END JUMBOTRON -->
	
			
			<section id="comments">
			<div class="row">
				<div id="comments-container" class="col-sm-6 col-sm-offset-3">
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
			

<?php endwhile; ?>

<?php get_footer(); ?>
