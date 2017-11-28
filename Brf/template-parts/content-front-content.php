<?php

/**
 * Template part for displaying front page content
 *
 * 
 *
 * @package Brf
 */

?>

<?php

$front_page_image = get_field( 'front_page_image' );
$front_page_text    = get_field( 'front_page_text' );

?>
   

<main class="front-content">  
    <section class="front-image">
        <img class="front-page-pic" src="<?php echo $front_page_image[ 'url' ]; ?>" alt="front page pic">
        <div class="front-page-text">
            <p><?php echo $front_page_text; ?></p>
        </div><!-- .front_page_text -->
    </section><!-- .front-image -->
</main><!-- .front-content -->