<?php
/**
 * The template for displaying 404 pages (not found)
 *
 *
 * @package brf
 */

get_header(); ?>
<?php get_template_part( 'template-parts/content', 'contact-heading' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oj sidan kan inte hittas', 'brf' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Ingenting finns här, prova en av länkarna', 'brf' ); ?></p>

					<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );

						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Prova titta i arkivet %1$s', 'brf' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 not-found-->

		</main><!-- #main .site-main-->
	</div><!-- #primary .content-area-->

<?php
get_footer();
