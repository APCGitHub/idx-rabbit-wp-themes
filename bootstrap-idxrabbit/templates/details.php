<?php 
/**
 * Template Name: Property Details
 */
 get_header(); ?>

<div class="row">
	<div class="col-sm-12">
		<?php 
			$listing_id = get_query_var('listing_id');

			echo do_shortcode("[render template='views/details' listing_id='$listing_id']");
		 ?>
	</div>
</div>

<?php get_footer(); ?>