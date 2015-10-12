<?php
/**
 * Template Name: FAQ
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

				 <main id="faq-page">
      <section>
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <h2><?php echo $page_heading; ?></h2>
              <span id="faq-summary"><?php echo $page_description; ?></span>
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

       <!-- ACF REPEATER STARTS -->
            <?php if( have_rows('faq_item') ): ?>
              <?php while( have_rows('faq_item') ): the_row(); 

              $question = get_sub_field('question');
              $answer = get_sub_field('answer');
              ?>

      <section>
        <div class="container">
          <div class="row">
            <div class="faq-item">
              <div class="col-sm-8 col-sm-offset-2">
                <h3 class="question"><?php echo $question; ?></h3>
                <p class="answer"><?php echo $answer; ?></p>
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