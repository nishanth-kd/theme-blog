<?php
/**
 * The main template file
 **/

?>

<?php get_header(); ?>
<script>
	$( window ).load( function()
{
    $( '#list' ).masonry( { itemSelector: '.item' } );
});
</script>
<div class="container" id="blogs-listing">
	<div class="category-grid">
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					$color = rand(1, 7);
					?>
					<div class="item col-padding-custom">
						<a href="<?php echo esc_url(the_permalink());?>&mode=<?php echo $color;?>">
							<div class="blog-entry background-color-<?php echo $color;?>" data-color="<?php $color ?>">
								<p class="time"><?php the_time('F j, Y');?></p>
								<p class="title"><?php the_title();?></p>
								<?php the_excerpt();?>
							</div>
						</a>
					</div>
					<?php
				} 
			} 
		?>
	</div>
</div>


<?php get_footer(); ?>