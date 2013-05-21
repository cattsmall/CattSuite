<?php
/**
 * @package WordPress
 * @subpackage Catt_Theme
 */

?>

<section class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _n( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on %2$s', get_comments_number() ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<ol class="commentlist">
			<?php wp_list_comments( array( 'callback' => 'twentytwelve_comment', 'style' => 'ol' ) ); ?>
		</ol><!-- .commentlist -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Comment navigation' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php _e( 'Comments are closed.'  ); ?></p>
		<?php endif; ?>
	<?php else : ?>

	<?php endif; // have_comments() ?>

	<?php if ( comments_open() ) : ?>

	<div id="respond">

		<h2><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h2>

		<div class="cancel-comment-reply">
			<?php cancel_comment_reply_link(); ?>
		</div>

		<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
			<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
		<?php else : ?>

		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

			<?php if ( is_user_logged_in() ) : ?>

				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

			<?php else : ?>

				<div>
					<label for="author">Name:<?php if ($req) echo "<span class='required'>*</span"; ?></label>
					<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
				</div>

				<div>
					<label for="email">Email (will not be published):<?php if ($req) echo "<span class='required'>*</span"; ?></label>
					<input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
				</div>

				<div>
					<label for="url">Website</label>
					<input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
				</div>

			<?php endif; ?>

			<!--<p>You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->

			<div>
				<label for="comment">Your Comment:<?php if ($req) echo "<span class='required'>*</span"; ?></label>
				<textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea>
			</div>

			<div>
				<input name="submit" class="btn" type="submit" id="submit" tabindex="5" value="Submit Comment" />
				<?php comment_id_fields(); ?>
			</div>

			<?php do_action('comment_form', $post->ID); ?>

		</form>

		<?php endif; // If registration required and not logged in ?>

	</div>

	<?php endif; ?>
	
</section>