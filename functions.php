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
if ( ! function_exists('paranoid_enqueue_style')) {
	function paranoid_enqueue_style() {
		wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/dist/lib/css/bootstrap.min.css');
		wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	}
}
if ( ! function_exists('paranoid_enqueue_script')) {
	function paranoid_enqueue_script() {
		wp_enqueue_script('jquery-js', get_template_directory_uri() . '/dist/lib/js/jquery-1.11.3.min.js');
		wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/dist/lib/js/bootstrap.min.js');
		wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js');
	}
}

add_action('wp_enqueue_scripts', 'paranoid_enqueue_style');
add_action('wp_enqueue_scripts', 'paranoid_enqueue_script');

if ( ! function_exists('paranoid_var_color')) {
	function paranoid_var_color( $color = NULL )
	{
	    static $internal;
	    if ($color!==NULL)
	    {
	        $internal = $color;
	    }
	    return $internal;
	}
}

if(!function_exists('paranoid_comment_nav')):
	/**
	 * Display navigation to next/previous comments when applicable.
	 *
	 * @since Twenty Fifteen 1.0
	 */
	function paranoid_comment_nav() {
		// Are there comments to navigate through?
		if(get_comment_pages_count() > 1 && get_option('page_comments')):
		?>
		<nav class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'paranoid' ); ?></h2>
			<div class="nav-links">
				<?php
					if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'paranoid' ) ) ) :
						printf( '<div class="nav-previous">%s</div>', $prev_link );
					endif;

					if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'paranoid' ) ) ) :
						printf( '<div class="nav-next">%s</div>', $next_link );
					endif;
				?>
			</div><!-- .nav-links -->
		</nav><!-- .comment-navigation -->
		<?php
		endif;
	}
endif;

add_filter( 'the_generator', '__return_null' );

if (!function_exists('paranoid_contact_mail_form')) : 

	function paranoid_contact_mail_form(){
		include('contact.php');
	}

endif;

if (!function_exists('paranoid_contact_mail')):

	function paranoid_contact_mail() {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$content = "You've got a mail from - $email \n\n $message \n\n $name\n";

		try {
			wp_mail(WP_ADMIN_MAIL, "You've got Mail !!!", $message);
			echo "true";
		} catch (Exception $e) {
			echo "false";
		}

		wp_die();

	}

	add_action('wp_ajax_contact_mail', 'paranoid_contact_mail');
	add_action('wp_ajax_nopriv_contact_mail', 'paranoid_contact_mail');

endif;