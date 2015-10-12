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

      $hero_image = get_field('hero_image');
			$top_banner_dates = get_field( 'top_banner_dates');
      $top_banner_location = get_field('top_banner_location');
      $top_banner_guest_list = get_field('top_banner_guest_list');
      $conference_description = get_field('conference_description_');
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



      ?>

      <main>
			<div class="jumbotron" style="background-image:url('<?php echo $hero_image; ?>');">
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

                <!-- ACF REPEATER STARTS -->
                <?php if( have_rows('hero_button_group') ): ?>
                <?php while( have_rows('hero_button_group') ): the_row(); 

                $button_text = get_sub_field('button_text');
                $button_link = get_sub_field('button_link_');
                
                ?>
      			     <a class="btn btn-primary btn-lg hero_btn" href="<?php echo $button_link; ?>" role="button"><?php echo $button_text; ?></a>

              <?php endwhile; ?>
              <?php endif; ?>
              <!-- END ACF REPEATER -->  
              
              </div> <!-- END HERO BTN GROUP -->

          </div>
      		</div> <!-- END ROW -->
      	</div> <!-- END CONTAINER -->
      </div> <!-- END JUMBOTRON -->

      <section>
        <div class="container">
          <div class="row">
            <div class="grid">
            <div class="grid-item grid-item--lg-square" id="about-block" style="background-image:url('<?php echo $lg_block_background_image; ?>');">
                <h3><?php echo $lg_block_heading; ?></h3>
                <?php echo $lg_block_description; ?>
                <a class="btn btn-primary btn-lg about-block-button" href="<php? echo $lg_block_link; ?>" role="button"><?php echo $lg_block_button; ?>
                  <svg version="1.1" id="right-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="-2 -3.4 38.6 16.4" enable-background="new -2 -3.4 38.6 16.4" xml:space="preserve">
                  <polygon fill="" points="27.8,-3.4 26.5,-1.9 32.6,3.8 -2,3.8 -2,5.8 32.6,5.8 26.5,11.5 27.8,13 36.6,4.8 "/>
                </svg>
                </a>
            </div>
             <a href="<?php echo $rectangle_block_link; ?>">
              <div class="grid-item grid-item--rectangle discussion-block">
              <h3><?php echo $rectangle_block_heading; ?></h3>
              <p><?php echo $rectangle_block_content; ?></p>
            </div></a>
            <a href="<?php echo $left_block_link; ?>">
              <div class="grid-item after-summit-block">
                <?php echo $left_block_content; ?>
              </div>
            </a>
            <a href="<?php echo $right_block_link; ?>">
              <div class="grid-item logistics-block" style="background-image:url('<?php echo $right_block_background_image; ?>');">
                <?php echo $right_block_content; ?>
              </div>
            </a>
            </div> <!-- END GRID -->
          </div> <!-- END ROW -->
        </div> <!-- END CONTAINER -->
      </section>
      <section class="video-section">
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
              <!-- TWITTER FETCHER -->

              <!--
              <div class="grid-item grid-item--rectangle twitter-block">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget scelerisque ipsum. Aenean vulputate lacus bibendum ligula suscipit fringilla.<span class="hashtag"> #PAEASummit16</span
                  >
                  <svg version="1.1" id="twitter-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="-14 -0.7 13.2 10.7" enable-background="new -14 -0.7 13.2 10.7" xml:space="preserve">
                    <path fill="#27AAE1" d="M-0.8,0.6C-1.3,0.8-1.8,1-2.4,1c0.6-0.3,1-0.9,1.2-1.5C-1.7-0.2-2.3,0-2.9,0.2c-0.5-0.6-1.2-0.9-2-0.9
                    c-1.5,0-2.7,1.2-2.7,2.7c0,0.2,0,0.4,0.1,0.6c-2.3-0.1-4.2-1.2-5.6-2.8c-0.2,0.4-0.3,0.9-0.3,1.4c0,0.9,0.5,1.8,1.2,2.3
                    c-0.5-0.1-0.9-0.2-1.3-0.4l0,0c0,1.3,0.9,2.4,2.2,2.7c-0.2,0-0.5,0-0.7,0s-0.3,0-0.5,0c0.3,1.1,1.3,1.9,2.5,1.9
                    c-0.9,0.7-2.1,1.1-3.4,1.1c-0.2,0-0.4,0-0.6,0c1.2,0.8,2.6,1.2,4.1,1.2c5,0,7.7-4.1,7.7-7.7c0-0.1,0-0.2,0-0.3
                    C-1.6,1.6-1.2,1.1-0.8,0.6z"/>
                  </svg>
                </p>
                <h4 class="twitter-handle">@ThatTwitterUser</h4>
                <span class="vertical_divider"></span>
                <h4>4 hours ago</h4>
              </div>
              <div class="grid-item grid-item--rectangle twitter-block">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget scelerisque ipsum. Aenean vulputate lacus bibendum ligula suscipit fringilla.<span class="hashtag"> #PAEASummit16</span>
                   <svg version="1.1" id="twitter-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="-14 -0.7 13.2 10.7" enable-background="new -14 -0.7 13.2 10.7" xml:space="preserve">
                    <path fill="#27AAE1" d="M-0.8,0.6C-1.3,0.8-1.8,1-2.4,1c0.6-0.3,1-0.9,1.2-1.5C-1.7-0.2-2.3,0-2.9,0.2c-0.5-0.6-1.2-0.9-2-0.9
                    c-1.5,0-2.7,1.2-2.7,2.7c0,0.2,0,0.4,0.1,0.6c-2.3-0.1-4.2-1.2-5.6-2.8c-0.2,0.4-0.3,0.9-0.3,1.4c0,0.9,0.5,1.8,1.2,2.3
                    c-0.5-0.1-0.9-0.2-1.3-0.4l0,0c0,1.3,0.9,2.4,2.2,2.7c-0.2,0-0.5,0-0.7,0s-0.3,0-0.5,0c0.3,1.1,1.3,1.9,2.5,1.9
                    c-0.9,0.7-2.1,1.1-3.4,1.1c-0.2,0-0.4,0-0.6,0c1.2,0.8,2.6,1.2,4.1,1.2c5,0,7.7-4.1,7.7-7.7c0-0.1,0-0.2,0-0.3
                    C-1.6,1.6-1.2,1.1-0.8,0.6z"/>
                  </svg>

                </p>
                <h4 class="twitter-handle">@ThatTwitterUser</h4>
                <span class="vertical_divider"></span>
                <h4>1 day ago</h4>
              </div>
              <div class="grid-item grid-item--rectangle twitter-block">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Te occidere possunt sed te edere non possunt nefas est. <span class="hashtag"> #PAEASummit16</span></p>
                <h4 class="twitter-handle">Jane Doe, PA Practitioner</h4>
              </div>
              <div class="grid-item grid-item--rectangle twitter-block">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget scelerisque ipsum. Aenean vulputate lacus bibendum ligula suscipit fringilla. Cogito ergo sum. <span class="hashtag"> #PAEASummit16</span>
                 <svg version="1.1" id="twitter-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="-14 -0.7 13.2 10.7" enable-background="new -14 -0.7 13.2 10.7" xml:space="preserve">
                    <path fill="#27AAE1" d="M-0.8,0.6C-1.3,0.8-1.8,1-2.4,1c0.6-0.3,1-0.9,1.2-1.5C-1.7-0.2-2.3,0-2.9,0.2c-0.5-0.6-1.2-0.9-2-0.9
                    c-1.5,0-2.7,1.2-2.7,2.7c0,0.2,0,0.4,0.1,0.6c-2.3-0.1-4.2-1.2-5.6-2.8c-0.2,0.4-0.3,0.9-0.3,1.4c0,0.9,0.5,1.8,1.2,2.3
                    c-0.5-0.1-0.9-0.2-1.3-0.4l0,0c0,1.3,0.9,2.4,2.2,2.7c-0.2,0-0.5,0-0.7,0s-0.3,0-0.5,0c0.3,1.1,1.3,1.9,2.5,1.9
                    c-0.9,0.7-2.1,1.1-3.4,1.1c-0.2,0-0.4,0-0.6,0c1.2,0.8,2.6,1.2,4.1,1.2c5,0,7.7-4.1,7.7-7.7c0-0.1,0-0.2,0-0.3
                    C-1.6,1.6-1.2,1.1-0.8,0.6z"/>
                  </svg>  
                </p>
                <h4 class="twitter-handle">@ThatTwitterUser</h4>
                <span class="vertical_divider"></span>
                <h4>3 days ago</h4>
              </div> -->
              <!-- END TWITTER FETCHER -->
            </div>
            </div> <!-- END GRID -->
          </div>
        </div> 
      </section>


		</main>
    

			<?php endwhile; ?>


<?php get_footer(); ?>