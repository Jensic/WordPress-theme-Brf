<?php
/**
 * The template for displaying search results pages
 *
 * @package Brf
 */

get_header(); ?>
<?php get_template_part( 'template-parts/content', 'contact-heading' ); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Sök Resultat för: %s', 'brf' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main .site-main-->
	</section><!-- #primary .content-area-->

<?php
get_sidebar();
get_footer();
