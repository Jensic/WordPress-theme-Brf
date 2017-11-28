<?php
/**
 * The template for displaying news posts using wp_query
 *
 *
 * @package Brf
 */
?>   

   
<?php 
    $temp = $wp_query; $wp_query= null;
    $wp_query = new WP_Query(); $wp_query->query('showposts=3' . '&paged='.$paged);
    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

        <h2 class="blog-post-title"><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h2>
        <div class="featured-image">
            <?php the_post_thumbnail('brf-post-image'); ?>
        </div><!-- .featured-image -->
        <div class="blog-post-meta">
            <em>Postat den - <?php echo get_the_date(); ?></em>
            <br>
            <em>Skrivet av - <?php the_author(); ?></em>
        </div><!-- .post-meta -->
        <?php the_excerpt(); ?>

    <?php endwhile; ?>

<?php if ($paged > 1) { ?>

    <nav class="blog-pagination">
        <div class="prev"><?php next_posts_link('&laquo; Föregående'); ?></div>
        <div class="next"><?php previous_posts_link('Nästa &raquo;'); ?></div>
    </nav><!-- .blog-pagination -->

    <?php } else { ?>

    <nav class="blog-pagination">
        <div class="prev"><?php next_posts_link('&laquo; Föregående'); ?></div>
    </nav><!-- .blog-pagination -->

<?php } ?>

<?php wp_reset_postdata(); ?>
