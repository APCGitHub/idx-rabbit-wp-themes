<?php 
/*
	Template Name: Search Results
 */

get_header(); ?>

<div class="row" id="idxrabbit-app">
	<div class="col-sm-12">
		<?php 
			$search_id = get_query_var('search_id');
			$per_page = get_query_var('per_page');
			$skip = get_query_var('skip');
			$orderby = get_query_var('orderby');
			$detail_page = home_url('property-details') . '/';

			echo do_shortcode("[render template='views/results' search_id='$search_id' per_page='$per_page' skip='$skip' orderby='$orderby' detail_page='$detail_page']");
		 ?>
	</div>
</div>

<?php get_footer(); ?>