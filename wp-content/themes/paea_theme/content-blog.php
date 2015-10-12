<div class="container">
	<div class="row">
		<section class="discussion-question" id="post-<?php the_ID(); ?>">
			<div class="col-sm-8 col-sm-offset-1">

				<svg version="1.1" id="comment-bubble" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-14 -1.1 15 13.1" enable-background="new -14 -1.1 15 13.1" xml:space="preserve">
					<g>
						<g>
							<path fill="#DD433E" d="M-0.9-1.1h-11.2c-1.1,0-1.9,0.8-1.9,1.9v6.6c0,1,0.8,1.9,1.9,1.9h3.7l3.7,2.8V9.3H-1c1,0,1.9-0.8,1.9-1.9
							V0.8C1-0.3,0.1-1.1-0.9-1.1z"/>
						</g>
					</g>
				</svg>

				<ul>
					<li><?php echo get_comments_number() ?> Responses</li>
					<li><span class="vertical_divider"></span></li>
					<li>Question #4</li>
					<li><span class="vertical_divider"></span></li>
					<li><?php the_date(); ?></li>
				</ul>
				<a href="<? the_permalink(); ?>">
				<p><?php the_title(); ?>
					
				<svg version="1.1" id="right-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="-2 -3.4 38.6 16.4" enable-background="new -2 -3.4 38.6 16.4" xml:space="preserve">
		       <polygon fill="" points="27.8,-3.4 26.5,-1.9 32.6,3.8 -2,3.8 -2,5.8 32.6,5.8 26.5,11.5 27.8,13 36.6,4.8 "/>
		    </svg>
		  </p>
				</a>
			</div>
			</a>
		</section>

	</div> <!-- END ROW -->
</div> <!-- END CONTAINER -->

<div class="container">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1 bottom_divider"></div>
	</div> <!-- END ROW -->
</div> <!-- END CONTAINER -->
