<?php get_header(); ?>

<?php 
	while (have_posts()) {
		the_post(); 
		$color = $_GET['mode'];
		?>
	<div class="container background-color-<?php echo $color ?>" id="blog-single">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-xs-12 col-sm-10 blog-content">
				<p class="title"><?php ;the_title();?></p>
				<p class="time color-<?php echo $color ?>"><?php the_time('F j, Y');?></p>
				<hr class="color-<?php echo $color ?>">
				<div class="content">
					<?php the_content();?>
				</div>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
<?php 
	} ?>

<?php get_footer(); ?>