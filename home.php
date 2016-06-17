<?php
/**
 * The main template file
 **/

?>

<?php 
	get_header(); 
	$color = paranoid_var_color();
?>

<div class="container" id="blogs-listing">
	<div class="row">
		<div class="col-xs-12 col-sm-7 col-md-9">
			<div class="category-grid">
				<?php 
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post(); 
							?>
							<div class="item col-padding-custom">
								<a href="<?php echo esc_url(the_permalink());?>">
									<div class="blog-entry " data-color="<?php $color ?>">
										<p class="time"><?php the_time('F j, Y');?></p>
										<p class="title"><?php the_title();?></p>
										<?php the_excerpt();?>
										<p class="color-<?php echo $color;?>">Read More ...</p>
									</div>
								</a>
							</div>
							<?php
						} 
					} 
				?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-5 col-md-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>