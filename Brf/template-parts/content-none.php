<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * 
 *
 * @package BrF
 */

?>


<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Hittade ingenting', 'brf' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Vill du göra ditt första inlägg? <a href="%1$s">Starta här</a>.', 'brf' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Inget matchade din sökning, försök igen', 'brf' ); ?></p>
			<?php
				get_search_form();

		else : ?>

			<p><?php esc_html_e( 'Hittar inte vad du letar efter, prova och sök', 'brf' ); ?></p>
			<?php
				get_search_form();

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results not-found-->