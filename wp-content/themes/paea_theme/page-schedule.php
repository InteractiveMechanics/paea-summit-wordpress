<?php
/**
 * Template Name: Schedule
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
        ?>

			<main id="schedule-page">
      <section>
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <h2><?php echo $page_heading; ?></h2>
              <span id="schedule-summary"><?php echo $page_description; ?></span>
            </div>
          </div>
        </div>
      </section>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
      <div class="bottom_divider"></div>
          </div>
        </div>
      </div>
      <section>

      	 <!-- ACF REPEATER STARTS -->
            <?php if( have_rows('schedule_item') ): ?>
              <?php while( have_rows('schedule_item') ): the_row(); 

              $time = get_sub_field('time');
              	$day = get_sub_field('day');
              	$location = get_sub_field('location');
              	$title = get_sub_field('title');
              	$description = get_sub_field('description');
                ?>

        <div class="container">
          <div class="row">
            <div class="schedule-item">
              <div class="col-sm-8 col-sm-offset-2">
                <ul>
                  <li><?php echo $time; ?></li>
                  <li><span class="vertical_divider"></span></li>
                  <li><?php echo $day; ?></li>
                  <li><span class="vertical_divider"></span></li>
                  <li><?php echo $location; ?></li>
                </ul>
                <h3><?php echo $title; ?></h3>
                <p><?php echo $description; ?></p>
              </div>
            </div>
             <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <div class="bottom_divider"></div>
                  </div>
                </div>
              </div>
        </div>
      </div>

         
    </section>

      <?php endwhile; ?>
            <?php endif; ?>
            <!-- END ACF REPEATER -->  




    </main>


			<?php endwhile; ?>



<?php get_footer(); ?>