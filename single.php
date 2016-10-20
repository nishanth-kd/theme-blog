<?php get_header(); ?>

<?php 
	while (have_posts()) {
		the_post(); 
		?>
	<div class="container" id="blog-single">
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-9 ">
				<div class="blog-content">
					<p class="title"><?php the_title();?></p>
					<p class="time"><?php the_time('F j, Y');?></p>
					<div class="content">
						<?php the_content();?>
					</div>
					<hr>
					<?php 
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php 
	} ?>

<?php get_footer(); ?>