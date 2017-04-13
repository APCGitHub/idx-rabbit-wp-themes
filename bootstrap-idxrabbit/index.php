<?php get_header(); ?>

<div class="row">
	<div class="col-sm-12 col-md-8">
		<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
	
				get_template_part( 'content', get_post_format() );

			endwhile; endif; 
		?>
	</div> <!-- /.main -->
	<div class="col-sm-12 col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div> <!-- /.row -->

<?php get_footer(); ?>