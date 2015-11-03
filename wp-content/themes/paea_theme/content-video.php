
		<div class="outcome-video">
		
		<?php 
		if( get_field('outcome_video') ){
  	$embed_code = wp_oembed_get( get_field('outcome_video') );
  	echo $embed_code;
		}; ?>
	</div>
	