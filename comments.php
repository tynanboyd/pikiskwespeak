<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( comments_open() ) :
	if ( (is_page() || is_single()) && ( ! is_home() && ! is_front_page()) ) :
?>
<section id="respond">
	<h3>
		<?php if ( get_bloginfo('language') == 'fr-CA') : ?>
			<?php
				comment_form_title(
					__( 'Laissez une réponse', 'foundationpress' ),
					/* translators: %s: author of comment being replied to */
					__( 'Leave une réponse à %s', 'foundationpress' )
				);
			?>
		<?php endif ;?>
		<?php if ( get_bloginfo('language') == 'en-CA') : ?>
			<?php
				comment_form_title(
					__( 'Leave a Response', 'foundationpress' ),
					/* translators: %s: author of comment being replied to */
					__( 'Leave a Response to %s', 'foundationpress' )
				);
			?>
		<?php endif ;?>
	</h3>
	<p class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></p>
	<?php if ( get_option( 'comment_registration' ) && ! is_user_logged_in() ) : ?>
	<p>
		<?php
			/* translators: %s: login url */
			printf( __(
				'You must be <a href="%s">logged in</a> to post a comment.', 'foundationpress' ),
				wp_login_url( get_permalink() )
			);
		?>
	</p>
	<?php else : ?>
	<form action="<?php echo get_option( 'siteurl' ); ?>/wp-comments-post.php" method="post" id="commentform">
		<?php if ( is_user_logged_in() ) : ?>
		<p>
			<?php
				/* translators: %1$s: site url, %2$s: user identity  */
				printf( __(
					'Logged in as <a href="%1$s/wp-admin/profile.php">%2$s</a>.', 'foundationpress' ),
					get_option( 'siteurl' ),
					$user_identity
				);
			?> <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="<?php __( 'Log out of this account', 'foundationpress' ); ?>"><?php _e( 'Log out &raquo;', 'foundationpress' ); ?></a>
		</p>
		<?php else : ?>
		<p>
			<label for="author">
				
				<?php if ( get_bloginfo('language') == 'fr-CA') {
					$name = 'Nom';
					$required = ' (obligatoire)';
					$published = ' (ne sera pas divulguée)';
					$email = 'Adresse courriel';
					$comment = 'Commentaire';
				} else {
					$name = 'Name';
					$required = ' (required)';
					$published = ' (will not be published)';
					$email = 'Email';
					$comment = 'Comment';
				}
							
					_e( $name, 'foundationpress' ); if ( $req ) { _e( $required, 'foundationpress' ); }
				?>
			</label>
			<input type="text" class="five" name="author" id="author" value="<?php echo esc_attr( $comment_author ); ?>" size="22" tabindex="1" <?php if ( $req ) { echo "aria-required='true'"; } ?>>
		</p>
		<p>
			<label for="email">
				<?php
					_e( $email . $published, 'foundationpress' ); if ( $req ) { _e( $required, 'foundationpress' ); }
				?>
			</label>
			<input type="text" class="five" name="email" id="email" value="<?php echo esc_attr( $comment_author_email ); ?>" size="22" tabindex="2" <?php if ( $req ) { echo "aria-required='true'"; } ?>>
		</p>		
		<?php endif; ?>
		<p>
			<label for="comment">
					<?php
						_e( $comment, 'foundationpress' );
					?>
			</label>
			<textarea name="comment" id="comment" tabindex="4"></textarea>
		</p>		
		<?php if ( get_bloginfo('language') == 'fr-CA') {
			$submitText = 'Soumettre votre commentaire';
		} else {
			$submitText = 'Submit Comment';
		}
		?>
		<p><input name="submit" class="button" type="submit" id="submit" tabindex="5" value="<?php echo $submitText; ?>"></p>
		<?php comment_id_fields(); ?>
		<?php do_action( 'comment_form', $post->ID ); ?>
	</form>
	<?php endif; // If registration required and not logged in. ?>
</section>
<?php
	endif; // If you delete this the sky will fall on your head.
	endif; // If you delete this the sky will fall on your head.

if ( have_comments() ) :
	if ( (is_page() || is_single()) && ( ! is_home() && ! is_front_page()) ) :
?>
	<section id="comments"><?php
		wp_list_comments(
			array(
				'walker'            => new Foundationpress_Comments(),
				'max_depth'         => '',
				'style'             => 'ol',
				'callback'          => null,
				'end-callback'      => null,
				'type'              => 'all',
				'reply_text'        => __( 'Reply', 'foundationpress' ),
				'page'              => '',
				'per_page'          => '',
				'avatar_size'       => 48,
				'reverse_top_level' => null,
				'reverse_children'  => '',
				'format'            => 'html5',
				'short_ping'        => false,
				'echo'              => true,
				'moderation'        => __( 'Your comment is awaiting moderation.', 'foundationpress' ),
			)
		);
		?>
 	</section>
<?php
	endif;
endif;
?>

<?php

	/*
	Do not delete these lines.
	Prevent access to this file directly
	*/

	defined( 'ABSPATH' ) || die( __( 'Please do not load this page directly. Thanks!', 'foundationpress' ) );

	if ( post_password_required() ) { ?>
	<section id="comments">
		<div class="notice">
			<p class="bottom"><?php _e( 'This post is password protected. Enter the password to view comments.', 'foundationpress' ); ?></p>
		</div>
	</section>
	<?php
		return;
	}
?>
