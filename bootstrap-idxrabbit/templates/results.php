<?php 
/*
	Template Name: Search Results
 */

get_header(); ?>

<div class="row">
	<div class="col-sm-12">
		<?php 
			$search_id = get_query_var('search_id');

			echo do_shortcode("[render template='views/results' search_id='$search_id']");
		 ?>
	</div>
</div>

<?php get_footer(); ?>