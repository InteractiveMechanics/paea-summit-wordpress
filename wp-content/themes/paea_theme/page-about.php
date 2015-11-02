  <?php
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage PAEA_Summit
 * @since PAEA Summit 1.0
 */

get_header(); ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post();

          $page_heading = get_field('page_heading');
          $page_summary = get_field('page_summary');

          $info_top_img = get_field('info_top_img');
          $info_top_heading = get_field('info_top_heading');
          $info_top_description = get_field('info_top_description');
          $info_middle_img = get_field('info_middle_img');
          $info_middle_heading = get_field('info_middle_heading');
          $info_middle_description = get_field('info_middle_description');
          $info_bottom_img = get_field('info_bottom_img');
          $info_bottom_heading = get_field('info_bottom_heading');
          $info_bottom_description = get_field('info_bottom_description');

          $quote = get_field('quote_');
          $quote_image = get_field('quote_image');
          $quote_attribution = get_field('quote_attribution');
          $objectives_heading = get_field('objectives_heading');
          $objectives_summary =get_field('objectives_summary');
          $after_the_summit_background_img = get_field('after_the_summit_background_img');
          $after_the_summit_heading = get_field('after_the_summit_heading');
          $after_the_summit_description = get_field('after_the_summit_description');
          $callout_heading = get_field('callout_heading');
          $callout_text = get_field('callout_text');
          ?>
         

			<main>
      <section class="infographic">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 about-page">
            <h2><?php echo $page_heading; ?></h2>
            <div class="callout hidden-xs">
              <h3><?php echo $callout_heading; ?></h3>
              <?php echo  $callout_text; ?>
            </div>
              <div class="page-summary">
                <?php echo $page_summary; ?>
              </div>
          </div>
        </div>
      </div>



      <div class="container">
        <div class="row">
          <div class="grid">

            <div class="infographic-section">
              <div class="graphic1" style="background-image:url('<?php echo $info_top_img; ?>');">
              </div>
               <div class="caption1" alt="">
                <h3><?php echo $info_top_heading; ?></h3>
                <?php echo $info_top_description; ?>
              </div>
              <div class="clearfix"></div>
            </div> <!-- END INFOGRAPHIC SECTION ODD -->

            <div class="infographic-section">
             <div class="caption2 hidden-xs">
                <h3><?php echo $info_middle_heading; ?></h3>
                <?php echo $info_middle_description; ?>
             </div> 
            <div class="graphic2" style="background-image:url('<?php echo $info_middle_img; ?>');">
            </div>
            <div class="caption2 visible-xs">
                <h3><?php echo $info_middle_heading; ?></h3>
                <?php echo $info_middle_description; ?>
             </div> 
            <div class="clearfix"></div>
          </div> <!-- END INFOGRAPHIC SECTION EVEN -->

          <div class="infographic-section">
            <div class="graphic3" style="background-image:url('<?php echo $info_bottom_img; ?>');">
            </div>
            <div class="caption3">
              <h3><?php echo $info_bottom_heading; ?></h3>
              <?php echo $info_bottom_description; ?>
            </div>
            <div class="clearfix"></div>
          </div> <!-- END INFOGRPHIC SECTION ODD -->


        </div> <!-- END GRID -->
        </div> <!-- END ROW -->
      </div> <!-- END CONTAINER -->
    </section>
    <section id="special-thanks">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
          <h3><?php echo get_field('special_thanks_heading'); ?></h3>
          <?php echo get_field('special_thanks_body'); ?>
        </div>
        </div>
      </div>
    </section>
    <section id="quote">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="photo-placeholder">
            <img src="<?php echo $quote_image; ?>">
            </div>
          </div>
          <div class="col-sm-8">
            <?php echo $quote; ?>
            <h3><?php echo $quote_attribution; ?></h3>
          </div>
        </div>
      </div>
    </section>
     <div class="bottom_divider"></div>
    <section id="objectives">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <h3><?php echo $objectives_heading; ?></h3>
            <?php echo $objectives_summary; ?>

            <!-- ACF REPEATER STARTS -->
            <?php if( have_rows('objectives_links') ): ?>
              <?php while( have_rows('objectives_links') ): the_row(); 

                $resource_type = get_sub_field('resource_type');
                $resource_title = get_sub_field('resource_title');
                $resource_file = get_sub_field('resource_file');
                ?>


                <a class="btn btn-default pdf-button" href="<?php echo $resource_file; ?>" role="button"><span class="resource-type"><?php echo $resource_type; ?></span>
                  <h4 id="button-text"><?php echo $resource_title; ?></h4>
                  <div class="down-arrow">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-13 -7.3 16.4 25.3" enable-background="new -13 -7.3 16.4 25.3" xml:space="preserve">
                      <polygon fill="#939598" points="1.9,7.8 -3.8,14 -3.8,-7.3 -5.8,-7.3 -5.8,14 -11.5,7.8 -13,9.2 -4.8,18 3.4,9.2 "/>
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
    <div class="bottom_divider"></div>
    <section id="after-the-summit-container">
          <div class="after-the-summit" style="background-image:url('<?php echo $after_the_summit_background_img; ?>');">
            <div class="col-sm-8 col-sm-offset-2">
              <h3><?php echo $after_the_summit_heading; ?></h3>
              <?php echo $after_the_summit_description; ?>
            </div>
    </section>
    </main>
   

				<?php endwhile; ?>



<?php get_footer(); ?>