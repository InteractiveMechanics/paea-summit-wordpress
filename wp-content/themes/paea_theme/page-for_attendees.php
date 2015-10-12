<?php
/**
 * Template Name: For Attendees
 *
 * @package WordPress
 * @subpackage PAEA_Summit
 * @since PAEA Summit 1.0
 */

get_header(); ?>

		<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); 
        $page_heading = get_field('page_heading');
        $page_description = get_field('page_description');
        $venue_image = get_field('venue_image');
        $venue_heading = get_field('venue_heading');
        $venue_description = get_field('venue_description');
        $resources_heading = get_field('resources_heading');
        $resources_description = get_field('resources_description');
        ?>
			

			<main id="attendees-page">
			<section>
				<div class="container">
        	<div class="row">
          	<div class="col-sm-8 col-sm-offset-2">
            	<h2><?php echo $page_heading; ?></h2>
            	<p><?php echo $page_description; ?></p>
          	</div>
          </div>
        </div>
      </section>
      <div class="bottom_divider"></div>
      <section>
      	<!-- NO .GRID REMOVES MARGINS -->
      	<div class="grid-item grid-item--sm-square">
          <img src="<?php echo $venue_image ; ?>" alt="">
        </div>
      	<div class="grid-item grid-item--sm-square">
      		<h3><?php echo $venue_heading; ?></h3>
      	 <p><?php echo $venue_description; ?></p>
        </div>
      </section>
      <section>
      	<div id="blurbs">

            <!-- ACF REPEATER STARTS -->
            <?php if( have_rows('blurbs') ): ?>
              <?php while( have_rows('blurbs') ): the_row(); 

               $blurb_heading = get_sub_field('blurb_heading');
               $blurb_description = get_sub_field('blurb_description');
               ?>

      			<div class="col-sm-3">
      				<h3><?php echo $blurb_heading; ?></h3>
      				<p><?php echo $blurb_description; ?></p>
      			</div>
      			
              <?php endwhile; ?>
            <?php endif; ?>
            <!-- END ACF REPEATER -->  

      		</div>
      </section>
      <div class="bottom_divider"></div>
      <section id="objectives">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <h3><?php echo $resources_heading; ?></h3>
            <p><?php echo $resources_description; ?></p>

             <!-- ACF REPEATER STARTS -->
            <?php if( have_rows('resources') ): ?>
              <?php while( have_rows('resources') ): the_row(); 

                $resource_type = get_sub_field('resource_type');
                $resource_title = get_sub_field('resource_title');
                $resource_link = get_sub_field('resource_link');
                ?>

            <a class="btn btn-default hidden-xs hidden-sm pdf-button" href="<?php echo $resource_link; ?>" role="button">  <span class="resource-type"><?php echo $resource_type; ?></span>
              <h4 id="button-text"><?php echo $resource_title; ?></h4>
              <div class="right-arrow">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-8 -3.4 25.3 16.4" enable-background="new -8 -3.4 25.3 16.4" xml:space="preserve">
                  <polygon fill="#939598" points="7.1,-1.9 13.3,3.8 -8,3.8 -8,5.8 13.3,5.8 7.1,11.5 8.5,13 17.3,4.8 8.5,-3.4 "/>
                </svg>
              </div>
            </a>

              <?php endwhile; ?>
            <?php endif; ?>
            <!-- END ACF REPEATER -->  
            
          </div>
        </div>
      </div>   
    </section>




		</main>


			<?php endwhile; ?>

<?php get_footer(); ?>