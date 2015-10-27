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

      <!-- DAY 1 SECTION -->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

              <h3><?php echo get_field('day_1_heading'); ?></h3>

                <!-- ACF REPEATER STARTS -->
                <?php if( have_rows('schedule_item_day_1') ): ?>
                <?php while( have_rows('schedule_item_day_1') ): the_row(); 

                  $time = get_sub_field('time');
                  $day = get_sub_field('day');
                  $location = get_sub_field('location');
                  $title = get_sub_field('title');
                  $description = get_sub_field('description');
                  ?>

                <div class="schedule-item">
                  <ul>
                    <li><?php echo $time; ?></li>
                    <li><span class="vertical_divider"></span></li>
                    <!--<li><?php echo $day; ?></li>
                    <li><span class="vertical_divider"></span></li> -->
                    <li><?php echo $location; ?></li>
                  </ul>
                  <h4><?php echo $title; ?></h4>
                  <?php echo $description; ?>
                </div>

                <?php endwhile; ?>
              <?php endif; ?>
              <!-- END ACF REPEATER -->  
            
            </div>
         </div> <!-- END ROW -->
      </div> <!-- END CONTAINER -->

      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="bottom_divider"></div>
          </div> 
        </div> <!-- END ROW -->
      </div> <!-- END CONTAINER -->   
    </section>

     <!-- DAY 2 SECTION -->

      <section>
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

              <h3><?php echo get_field('day_2_heading'); ?></h3>

                <!-- ACF REPEATER STARTS -->
                <?php if( have_rows('schedule_item_day_2') ): ?>
                <?php while( have_rows('schedule_item_day_2') ): the_row(); 

                  $time = get_sub_field('time');
                  $day = get_sub_field('day');
                  $location = get_sub_field('location');
                  $title = get_sub_field('title');
                  $description = get_sub_field('description');
                  ?>

                <div class="schedule-item">
                  <ul>
                    <li><?php echo $time; ?></li>
                    <li><span class="vertical_divider"></span></li>
                    <!--<li><?php echo $day; ?></li>
                    <li><span class="vertical_divider"></span></li> -->
                    <li><?php echo $location; ?></li>
                  </ul>
                  <h4><?php echo $title; ?></h4>
                  <?php echo $description; ?>
                </div>

                <?php endwhile; ?>
              <?php endif; ?>
              <!-- END ACF REPEATER -->  
            
            </div>
         </div> <!-- END ROW -->
      </div> <!-- END CONTAINER -->

      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="bottom_divider"></div>
          </div> 
        </div> <!-- END ROW -->
      </div> <!-- END CONTAINER -->   
    </section>
     
    <!-- DAY 3 SECTION -->

     <section>
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

              <h3><?php echo get_field('day_3_heading_'); ?></h3>

                <!-- ACF REPEATER STARTS -->
                <?php if( have_rows('schedule_item_day_3') ): ?>
                <?php while( have_rows('schedule_item_day_3') ): the_row(); 

                  $time = get_sub_field('time');
                  $day = get_sub_field('day');
                  $location = get_sub_field('location');
                  $title = get_sub_field('title');
                  $description = get_sub_field('description');
                  ?>

                <div class="schedule-item">
                  <ul>
                    <li><?php echo $time; ?></li>
                    <li><span class="vertical_divider"></span></li>
                    <!--<li><?php echo $day; ?></li>
                    <li><span class="vertical_divider"></span></li> -->
                    <li><?php echo $location; ?></li>
                  </ul>
                  <h4><?php echo $title; ?></h4>
                  <?php echo $description; ?>
                </div>

                <?php endwhile; ?>
              <?php endif; ?>
              <!-- END ACF REPEATER -->  
            
            </div>
         </div> <!-- END ROW -->
      </div> <!-- END CONTAINER -->

      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="bottom_divider"></div>
          </div> 
        </div> <!-- END ROW -->
      </div> <!-- END CONTAINER -->   
    </section>


    </main>


			<?php endwhile; ?>



<?php get_footer(); ?>