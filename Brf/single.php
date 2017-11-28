<?php
/**
 * The template for displaying all single posts
 *
 *
 * @package Brf
 */
?>
    

<?php get_header(); ?>
<?php get_template_part( 'template-parts/content', 'contact-heading' ); ?>

	<div id="primary" class="row">
		<main id="main" class="col-sm-12" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main .col-sm-12-->
	</div><!-- #primary .row -->

<?php
get_footer();