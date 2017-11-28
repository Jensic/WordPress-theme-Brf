<?php
/*
	Template Name: Start Sida	
*/
?>

<?php

$front_choice = get_field( 'front_choice' );

?>

<?php get_header(); ?>
<?php get_template_part( 'template-parts/content', $front_choice ); ?>
<?php get_template_part( 'template-parts/content', 'front-heading' ); ?>
    
    <div class="row">

        <div class="col-sm-8">

            <div class="front-content">
                <?php
                    get_template_part( 'template-parts/content', 'front-content' );
                ?>

            </div><!-- .front-content -->

        </div><!-- .col-sm-8 -->

        <div class="col-sm-3 offset-sm-1">
            <?php get_sidebar(); ?>
        </div><!-- .col-sm-3 .offset-sm-1-->

    </div><!-- .row -->
    
<?php get_footer(); ?>