<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage PAEA_Summit
 * @since PAEA Summit 1.0
 */

get_header(); ?>

<main>
			<div class="jumbotron">
      	<div class="container">
      		<div class="row">
      			<ul class="top_banner">
      				<li>Spring 2016</li>
      				<li><span class="vertical_divider"></span></li>
      				<li>Washington, DC</li>
      				<li><span class="vertical_divider"></span></li>
      				<li>30 Industry Leaders</li>
      			</ul>
            <div class="col-xs-10 col-sm-10 col-xs-offset-1 col-sm-offset-1 page-subtitle">
      			 <h2>A convening of thought leaders and innovators to identify essential knowledge, skills and behaviors required of the <span class="accented_text">PA workforce in the future </span></h2>
            </div>
            <div class="hero_btn_group">
      			 <a class="btn btn-primary btn-lg hero_btn" href="#" role="button">Video: Our Initiatives</a>
      			  <a class="btn btn-primary btn-lg hero_btn" href="#" role="button">Info for Attendees</a>
            </div>
      		</div> <!-- END ROW -->
      	</div> <!-- END CONTAINER -->
      </div> <!-- END JUMBOTRON -->

      <section>
        <div class="container">
          <div class="row">
            <div class="grid">
            <div class="grid-item grid-item--lg-square" id="about-block">
                <h3>About the Summit</h3>
                <p>The Physicians Assistant Education Association (PAEA) is hosting a two-day summit to bring together a variety of key stakeholders in the health care sector. Our goal? To ensure that competencies for physician assistant graduates are relevant to the needs of the health care workforce today and in the future.</p>
                <a class="btn btn-primary btn-lg about-block-button" href="about.html" role="button">About the Summit
                  <svg version="1.1" id="right-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="-2 -3.4 38.6 16.4" enable-background="new -2 -3.4 38.6 16.4" xml:space="preserve">
                  <polygon fill="" points="27.8,-3.4 26.5,-1.9 32.6,3.8 -2,3.8 -2,5.8 32.6,5.8 26.5,11.5 27.8,13 36.6,4.8 "/>
                </svg>
                </a>
            </div>
             <a href="discussion.html"><div class="grid-item grid-item--rectangle discussion-block">
              <h3>Join the Discussion</h3>
              <p>What is the most important aspect of PA education?</p>
            </div></a>
            <a href=""><div class="grid-item after-summit-block">
              <p>What happens <span class="accented_text white_text">after the summit?</span></p>
            </div></a>
            <a href=""><div class="grid-item logistics-block">
              <p><span class="accented_text">The venue</span> &amp; summit logistics</p></a>
            </div>
            </div> <!-- END GRID -->
          </div> <!-- END ROW -->
        </div> <!-- END CONTAINER -->
      </section>
      <section class="video-section">
        <div class="container">
          <div class="row">
            <div class="video-container">
              <a href=""><div class="col-sm-6 video-caption">
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
                <p>Explore the intesection between the summit and our initiatives.</p>
            </div></a>
          </div>
        </div>
      </section>
      <section class="twitter-feed">
        <div class="container">
          <div class="row">
            <h3>What you're saying about the summit</h3>
            <div class="grid">
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
              </div>
            </div>
          </div>
        </div> 
      </section>


		</main>

      <?php if ( have_posts() ): ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('content-blog', get_post_format()); ?>
      <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>
