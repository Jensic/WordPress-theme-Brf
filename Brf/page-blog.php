<?php
/*
	Template Name: Nyheter
*/
?>


<?php get_header(); ?>

<?php get_template_part( 'template-parts/content', 'news-heading' ); ?>

    <article class="row news-border">  
        <?php 
            $temp = $wp_query; $wp_query= null;
            $wp_query = new WP_Query(); $wp_query->query('showposts=4' . '&paged='.$paged);
            while ($wp_query->have_posts()) : $wp_query->the_post(); 
        ?>

        <div class="col-sm-6 news-content">

        <h2 class="blog-post-title"><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h2>

        <div>
            <?php the_post_thumbnail('brf-post-image'); ?>
            <span></span>
        </div>

        <div class="blog-post-meta">
            <em>Postat den - <?php echo get_the_date(); ?></em>
            <br>
            <em>Skrivet av - <?php the_author(); ?></em>
        </div><!-- .post-meta -->

        <?php the_excerpt(); ?>

        </div><!-- .col-sm-6 news-content-->

        <?php endwhile; ?>

        <?php if ($paged > 1) { ?>

            <nav class="blog-pagination">
                <div class="prev"><?php next_posts_link('&laquo; Föregående'); ?></div>
                <div class="next"><?php previous_posts_link('Nästa &raquo;'); ?></div>
            </nav>

            <?php } else { ?>

            <nav class="blog-pagination">
                <div class="prev"><?php next_posts_link('&laquo; Föregående'); ?></div>
            </nav>

            <?php } ?>

            <?php wp_reset_postdata(); ?>
    </article><!-- .row news-border -->

<?php get_footer(); ?>


