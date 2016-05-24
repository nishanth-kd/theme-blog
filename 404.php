<?php get_header(); ?>

<?php 
		$color = nishanthkd_var_color();
		?>
	<div class="container" id="container-404">
		<div class="row">
			<div class="col-xs-12">
				<p class="title">Oops, looks like your lost.</p>
				<p> 
					<?php if(wp_get_referer() != '') { ?>
					<a href="<?php echo wp_get_referer(); ?>"><span class="color-<?php echo $color?>">Go Back</span></a> or 
					<?php } ?>
					<a href="<?php echo home_url(); ?>"><span class="color-<?php echo $color?>">Go Home</span></a>
				</p>
			</div>
		</div>
	</div>

<?php get_footer(); ?>