<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage PAEA_Summit 
 * @since PAEA Summit 1.0
 */
?>


		<!-- </div> #main -->
		<footer>
			 <div class="container">
    <div class="row email-sign-up">
      <div class="col-sm-12">
        <h4 class="hidden-xs hidden-sm hidden-md">Get Involved. Stay Informed.</h4>
        <h2 class="hidden-xs hidden-sm hidden-md">Sign up for future summit updates</h2>
        <h2 class="visible-xs visible-sm visible-md">Sign up for summit updates</h2>
      </div>
      <div class="col-sm-12">
        <form action="//paeaonline.us5.list-manage.com/subscribe/post?u=c1336de511800dd633b850bd9&id=66efaba916" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div class="input-group">
            <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL" placeholder="joe@website.com">
            <span class="input-group-btn">
               <div style="position: absolute; left: -5000px;"><input type="text" name="b_c1336de511800dd633b850bd9_66efaba916" tabindex="-1" value=""></div>
              <button class="btn btn-default" type="submit" name="subscribe" id="mc-embedded-subscribe" value="">
                <span id="right-arrow"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="-2 -3.4 38.6 16.4" enable-background="new -2 -3.4 38.6 16.4" xml:space="preserve">
                  <polygon fill="" points="27.8,-3.4 26.5,-1.9 32.6,3.8 -2,3.8 -2,5.8 32.6,5.8 26.5,11.5 27.8,13 36.6,4.8 "/>
                </svg></span>
              </button>
            </span>
          </div>
        </form>
      </div>
    </div> <!-- end row -->
  </div> <!-- end container -->

  <div class="bottom_divider"></div>
    <div class="container">
      <div class="row">
        <ul>
          <li><a href="http://www.paeaonline.org/">&copy; Physicians Assistant Education Association (PAEA)</a></li>
          <li class="hidden-xs hidden-sm"><a href="emailto:stakeholdersummit@paeaonline.org">stakeholdersummit@paeaonline.org</a></li>
          <li><a href="<?php echo site_url('/about-paea/') ?>">About PAEA</a></li>
          <li><a href="<?php echo site_url('/code-of-conduct/') ?>">Code of Conduct</a></li>
        </ul>
      </div>
    </div> <!-- end container -->
		</footer>
	</div><!-- #page -->

	<?php wp_footer(); ?>

	<!-- SCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>	
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.1/isotope.pkgd.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
  <script src="<?php printThemePath(); ?>/js/twitterFetcher.js"></script>
  <script src="<?php printThemePath(); ?>/js/twitter-feed.js"></script>
  <script src="<?php printThemePath(); ?>/js/main.js"></script>


</body>
</html>