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

                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 43 10" enable-background="new 0 0 43 10" xml:space="preserve">
              <g>
              <g>
              <line fill="none" stroke="#f1f2f2" stroke-width="2" stroke-miterlimit="10" x1="1.8" y1="5.2" x2="38.3" y2="5.2"/>
              <g>
              <polygon points="31.7,13.4 30.3,11.9 37.5,5.2 30.3,-1.5 31.7,-3 40.4,5.2      "/>
              </g>
              </g>
              </g>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget scelerisque ipsum. Aenean vulputate lacus bibendum ligula suscipit fringilla.<span class="hashtag"> #PAEASummit16</span></p>
                <h4 class="twitter-handle">@ThatTwitterUser</h4>
                <span class="vertical_divider"></span>
                <h4>4 hours ago</h4>
              </div>
              <div class="grid-item grid-item--rectangle twitter-block">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget scelerisque ipsum. Aenean vulputate lacus bibendum ligula suscipit fringilla.<span class="hashtag"> #PAEASummit16</span></p>
                <h4 class="twitter-handle">@ThatTwitterUser</h4>
                <span class="vertical_divider"></span>
                <h4>1 day ago</h4>
              </div>
              <div class="grid-item grid-item--rectangle twitter-block">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Te occidere possunt sed te edere non possunt nefas est. <span class="hashtag"> #PAEASummit16</span></p>
                <h4 class="twitter-handle">Jane Doe, PA Practitioner</h4>
              </div>
              <div class="grid-item grid-item--rectangle twitter-block">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget scelerisque ipsum. Aenean vulputate lacus bibendum ligula suscipit fringilla. Cogito ergo sum. <span class="hashtag"> #PAEASummit16</span></p>
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
