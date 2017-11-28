<?php
/*
	Template Name: Kontakt sida	
*/
?>


<?php get_header(); ?>
<?php get_template_part( 'template-parts/content', 'contact-heading' ); ?>

        <div class="row">

            <div class="col-sm-12">

                <div class="contact-form">

                    <?php echo do_shortcode( '[contact-form-7 id="28" title="Contact form 1"]' ); ?>

                </div><!-- .contact-form -->

            </div><!-- .col-sm-12 . -->

    </div><!-- .row -->

<?php get_footer(); ?>
