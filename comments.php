<?php
	$color = paranoid_var_color();
?>
<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One thought on &ldquo;%1$s&rdquo;', 'Thoughts on &ldquo;%1$s&rdquo;', 'comments title', 'paranoid' ),
					get_the_title() );
			?>
		</h2>

		<?php paranoid_comment_nav(); ?>

		<ol class="comment-list comment-color-<?php echo $color; ?>">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 56,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php paranoid_comment_nav(); ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'paranoid' ); ?></p>
	<?php endif; ?>

	<?php 

	$fields =  array(

	  'author' =>
	    '<p class="comment-form-author"><label for="author" class="color-'.$color.'">' . __( 'Name*', 'domainreference' ) . '</label> ' .
	    '<input id="author" name="author" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
	    '" size="30"' . $aria_req . ' /></p>',

	  'email' =>
	    '<p class="comment-form-email"><label for="email" class="color-'.$color.'">' . __( 'Email*', 'domainreference' ) . '</label> ' .
	    '<input id="email" name="email" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
	    '" size="30"' . $aria_req . ' /></p>',
	);

	$args = array(
	  'id_form'           => 'commentform',
	  'class_form'      => 'comment-form',
	  'id_submit'         => 'submit',
	  'class_submit'      => 'submit',
	  'name_submit'       => 'submit',
	  'title_reply'       => __( 'Your Thoughts' ),
	  'title_reply_to'    => __( 'Leave a Reply to %s' ),
	  'cancel_reply_link' => __( 'Cancel Reply' ),
	  'label_submit'      => __( 'Post Thought' ),
	  'class_submit'      => __( 'background-color-'.$color ),
	  'format'            => 'xhtml',

	  'comment_field' =>  '<p class="comment-form-comment"><label for="comment" class="color-'.$color.'">' . _x( 'Thought*', 'noun' ) .
	    '</label><textarea id="comment" class="form-control" name="comment" cols="45" rows="3" aria-required="true">' .
	    '</textarea></p>',

	  'must_log_in' => '<p class="must-log-in">' .
	    sprintf(
	      __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
	      wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
	    ) . '</p>',

	  'logged_in_as' => '<p class="logged-in-as">' .
	    sprintf(
	    __( 'Logged in as <a class="color-'.$color.'" href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
	      admin_url( 'profile.php' ),
	      $user_identity,
	      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
	    ) . '</p>',

	  'comment_notes_before' => '<p class="comment-notes">' .
	    __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .
	    '</p>',

	  'comment_notes_after' => '',

	  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
	);

	comment_form($args); ?>

</div><!-- .comments-area -->