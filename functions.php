<?php
/**
 * Theme functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 **/

/**
 * Constants
 */

include 'constants.php';

/**
 * Action for enqueing scripts
 */
function nishanthkd_enqueue_style() {
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/dist/lib/css/bootstrap.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

function nishanthkd_enqueue_script() {
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/dist/lib/js/bootstrap.min.js');
	wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js');
}

add_action('wp_enqueue_scripts', 'nishanthkd_enqueue_style');
add_action('wp_enqueue_scripts', 'nishanthkd_enqueue_script');



if ( ! function_exists('nishanthkd_var_color')) {
	function nishanthkd_var_color( $color = NULL )
	{
	    static $internal;

	    if ($color!==NULL)
	    {
	        $internal = $color;
	    }

	    return $internal;
	}
}

if ( ! function_exists( 'nishanthkd_comment_nav' ) ) :
/**
 * Display navigation to next/previous comments when applicable.
 *
 * @since Twenty Fifteen 1.0
 */
function nishanthkd_comment_nav() {
	// Are there comments to navigate through?
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
	?>
	<nav class="navigation comment-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'nishanthkd' ); ?></h2>
		<div class="nav-links">
			<?php
				if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'nishanthkd' ) ) ) :
					printf( '<div class="nav-previous">%s</div>', $prev_link );
				endif;

				if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'nishanthkd' ) ) ) :
					printf( '<div class="nav-next">%s</div>', $next_link );
				endif;
			?>
		</div><!-- .nav-links -->
	</nav><!-- .comment-navigation -->
	<?php
	endif;
}
endif;