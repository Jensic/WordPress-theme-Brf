<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It's the file that everything fallbacks to, its in the top of the wordpress
 * hierarchy
 *
 * @package Brf
 */
?>

<?php get_header(); ?>
        
    <main role="main">

        <div class="row">

            <div class="col-sm-8">

                    <?php
			             if ( have_posts() ) :

                           
                            get_template_part( 'template-parts/content', 'blog' );

                        else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif;
			         ?>

            </div><!-- .col-sm-8  -->

            <div class="col-sm-3 offset-sm-1">
                <?php get_sidebar(); ?>
            </div><!-- .col-sm-3 .offset-sm-1 -->

        </div><!-- .row -->
        
    </main>

<?php get_footer(); ?>
