<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage PAEA_Summit
 * @since PAEA Summit 1.0
 */

get_header(); ?>

			<?php while ( have_posts() ) : the_post(); 

      $hero_poster = get_field('hero_poster');
			$top_banner_dates = get_field( 'top_banner_dates');
      $top_banner_location = get_field('top_banner_location');
      $top_banner_guest_list = get_field('top_banner_guest_list');
      $conference_description = get_field('conference_description_');
      $left_hero_button_text = get_field('left_hero_button_text');
      $right_hero_button_text = get_field('right_hero_button_text_');
      $right_hero_button_link = get_field('right_hero_button_link');

      $lg_block_background_image = get_field('lg_block_background_image');
      $lg_block_heading = get_field('lg_block_heading');
      $lg_block_description = get_field('lg_block_description');
      $lg_block_button = get_field('lg_block_button');
      $lg_block_link = get_field('lg_block_link');
      $rectangle_block_heading = get_field('rectangle_block_heading');
      $rectangle_block_content = get_field('rectangle_block_content');
      $rectangle_block_link = get_field('rectangle_block_link');
      $left_block_content = get_field('left_block_content');
      $left_block_link = get_field('left_block_link');
      $right_block_background_image = get_field('right_block_background_image');
      $right_block_content = get_field('right_block_content');
      $right_block_link = get_field('right_block_link');
      $video_image = get_field('video_image');
      $video_caption = get_field('video_caption_');
      $video_link = get_field('video_link');
      $hero_video_mp4 = get_field('hero_video_mp4');
      $hero_video_WEBM = get_field('hero_video_WEBM');



      ?>

      <main class="homepage">
			<section class="hero">
        <div class="hero-video-container">
          <video width="100%" height="auto" poster="<?php echo $hero_poster; ?>" autoplay loop>
            <source src="<?php echo $hero_video_mp4; ?>" type="video/mp4">
            <source src="<?php echo $hero_video_WEBM; ?>" type="video/webm">
        </video>
        </div>
        <div class="container">
          <div class="row">
            <ul class="top_banner">
              <li><?php echo $top_banner_dates; ?></li>
              <li><span class="vertical_divider"></span></li>
              <li><?php echo $top_banner_location; ?></li>
              <li><span class="vertical_divider"></span></li>
              <li><?php echo $top_banner_guest_list; ?></li>
            </ul>
            <div class="col-xs-10 col-sm-10 col-xs-offset-1 col-sm-offset-1 page-subtitle">
             <?php echo $conference_description; ?>

              
              <div class="hero_btn_group">

                <a class="btn btn-primary btn-lg hero_btn" href="#video-section" role="button"><?php echo $left_hero_button_text; ?></a>
                <a class="btn btn-primary btn-lg hero_btn" href="<?php echo $right_hero_button_link; ?>" role="button"><?php echo $right_hero_button_text; ?></a>

              
              </div> <!-- END HERO BTN GROUP -->

          </div> <!-- END PAGE SUBTITLE -->
          </div> <!-- END ROW -->
        </div> <!-- END CONTAINER -->
      </section> <!-- END HERO -->

      <section>
        <div class="container">
          <div class="row">
            <div class="grid">
            <div class="grid-item grid-item--lg-square" id="about-block" style="background-image:url('<?php echo $lg_block_background_image; ?>');">
                <h3><?php echo $lg_block_heading; ?></h3>
                <?php echo $lg_block_description; ?>
                <a href="<?php echo $lg_block_link; ?>" class="btn btn-primary btn-lg about-block-button" role="button"><?php echo $lg_block_button; ?>
                  <svg version="1.1" id="right-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="-2 -3.4 38.6 16.4" enable-background="new -2 -3.4 38.6 16.4" xml:space="preserve">
                  <polygon fill="" points="27.8,-3.4 26.5,-1.9 32.6,3.8 -2,3.8 -2,5.8 32.6,5.8 26.5,11.5 27.8,13 36.6,4.8 "/>
                </svg>
                </a>
            </div>

              
                  <!-- JOIN THE DISCUSSION BLOCK -->

                  <?php 
                        $args = array( 'numberposts' => '1' );
                        $recent_posts = wp_get_recent_posts( $args );
                        foreach( $recent_posts as $recent ) {
                        echo '
                        <a href="' . get_permalink($recent["ID"]) . '">
                        <div class="grid-item grid-item--rectangle discussion-block">
                        <h3>Join the Conversation</h3><p>' . $recent['post_title']. '</p></div></a>';
                        }
                  ?>

             
            <a href="<?php echo site_url('/about/#after-the-summit-container') ?>">
              <div class="grid-item after-summit-block">
                <?php echo $left_block_content; ?>
              </div>
            </a>
            <a href="<?php echo site_url('/for-attendees/#venue-section') ?>">
              <div class="grid-item logistics-block" style="background-image:url('<?php echo $right_block_background_image; ?>');">
                <?php echo $right_block_content; ?>
              </div>
            </a>
            </div> <!-- END GRID -->
          </div> <!-- END ROW -->
        </div> <!-- END CONTAINER -->
      </section>
      <section id="video-section">
        <div class="container">
          <div class="row">
            <div class="video-container" style="background-image:url('<?php echo $video_image; ?>');">

              <!-- the class "videoWrapper169" means a 16:9 aspect ration video. Another option is "videoWrapper43" for 4:3. -->
              <div class="videoWrapper videoWrapper169 js-videoWrapper">
              <!-- YouTube iframe. -->
              <!-- note the iframe src is empty by default, the url is in the data-src="" argument -->
              <!-- also note the arguments on the url, to autoplay video, remove youtube adverts/dodgy links to other videos, and set the interface language -->
              <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="https://www.youtube.com/embed/FxPhDHjFrlI?autoplay=1& modestbranding=1&rel=0&hl=sv"></iframe>
              <!-- the poster frame - in the form of a button to make it keyboard accessible -->
              <div class="videoPoster js-videoPoster" style="background-image:url('<?php echo $video_image; ?>');">
                  <div class="col-sm-12 video-caption">
                     <svg version="1.1" id="play-button" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="9 -25.4 61.4 61.4" enable-background="new 9 -25.4 61.4 61.4" xml:space="preserve">
                    <g>
                      <g>
                        <path fill="#FFFFFF" d="M39.7-22.2c15.2,0,27.5,12.3,27.5,27.5S54.9,32.8,39.7,32.8S12.2,20.5,12.2,5.3
                        C12.2-9.8,24.6-22.2,39.7-22.2 M39.7-25.4C22.8-25.4,9-11.6,9,5.3C9,22.3,22.8,36,39.7,36c17,0,30.7-13.8,30.7-30.7
                        S56.7-25.4,39.7-25.4L39.7-25.4z"/>
                          <g>
                            <path fill="#FFFFFF" d="M47.2,2.3c2.9,1.7,2.9,4.4,0,6.1c-2.9,1.7-7.7,4.4-10.6,6.1c-2.9,1.7-5.3,0.3-5.3-3.1s0-8.9,0-12.2
                            s2.4-4.7,5.3-3.1S44.2,0.6,47.2,2.3z"/>
                          </g>
                      </g>
                    </g>
                    </svg>
                    <p><?php echo $video_caption; ?></p>
                  </div>
              </div>
            </div>
              


              <!--
                <a href="<?php echo $video_link; ?>">
                  <div class="col-sm-6 video-caption">
                  <svg version="1.1" id="play-button" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="9 -25.4 61.4 61.4" enable-background="new 9 -25.4 61.4 61.4" xml:space="preserve">
                    <g>
                      <g>
                        <path fill="#FFFFFF" d="M39.7-22.2c15.2,0,27.5,12.3,27.5,27.5S54.9,32.8,39.7,32.8S12.2,20.5,12.2,5.3
                        C12.2-9.8,24.6-22.2,39.7-22.2 M39.7-25.4C22.8-25.4,9-11.6,9,5.3C9,22.3,22.8,36,39.7,36c17,0,30.7-13.8,30.7-30.7
                        S56.7-25.4,39.7-25.4L39.7-25.4z"/>
                          <g>
                            <path fill="#FFFFFF" d="M47.2,2.3c2.9,1.7,2.9,4.4,0,6.1c-2.9,1.7-7.7,4.4-10.6,6.1c-2.9,1.7-5.3,0.3-5.3-3.1s0-8.9,0-12.2
                            s2.4-4.7,5.3-3.1S44.2,0.6,47.2,2.3z"/>
                          </g>
                      </g>
                    </g>
                  </svg>
                <p><?php echo $video_caption; ?></p>
              </div>
            </a> -->


          </div>
        </div>
      </section>
      <section class="social-feed">
        <div class="container">
          <div class="row">
            <h3>What you're saying about the summit</h3>
            <div class="grid">
              <div id="twitter-feed">
              <!-- TWITTER FETCHER CODE IS IN TWITTER-FEED.JS -->
            </div>
            </div> <!-- END GRID -->
          </div>
        </div> 
      </section>
      <section class="sponsors">
        <div class="container">
          <div class="row">
            <h3><?php echo get_field('sponsor_logos_heading'); ?></h3>
            <ul class="sponsor-list">

            <!-- ACF REPEATER STARTS -->
            <?php if( have_rows('sponsor_logos') ): ?>
              <?php while( have_rows('sponsor_logos') ): the_row(); 

               $sponsor_logo_file = get_sub_field('sponsor_logo_file');
               $sponsor_logo_link = get_sub_field('sponsor_logo_link');
               ?>   
              <li class="sponsor-logo">
                <a href="<?php echo $sponsor_logo_link; ?>">
                  <img src="<?php echo $sponsor_logo_file; ?>" alt="">
                </a>
              </li>
            
              <?php endwhile; ?>
            <?php endif; ?>
            <!-- END ACF REPEATER -->  
           </ul>
          </div>
        </div>
      </section>


		</main>
    

			<?php endwhile; ?>


<?php get_footer(); ?>