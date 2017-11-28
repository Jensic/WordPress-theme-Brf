<?php
/**
 * Template part for displaying posts
 *
 * 
 *
 * @package Brf
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        <h1 class="single-post-title"><?php the_title(); ?></h1>
        <?php the_post_thumbnail('post-thumbnail'); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Fortsätt läs %s <span class="meta-nav">&rarr;</span>', 'brf' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'brf' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
        <h3>Category - <?php the_category(); ?></h3>
        <?php the_tags(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->