<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 *
 * @package Brf
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// Checks for comments
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'brf' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2><!-- .comments-title -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Checks if comments its comments to navigate ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Kommentar navigering', 'brf' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Äldre kommentarer', 'brf' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Nyare kommentarer', 'brf' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

        <?php 

	endif; // Check for have_comments().


	// If comments are closed and there are comments informs user of that
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Kommentarer är stängda.', 'brf' ); ?></p>
	<?php
	endif;

	comment_form();
	?>

</div><!-- #comments .comments-area -->
