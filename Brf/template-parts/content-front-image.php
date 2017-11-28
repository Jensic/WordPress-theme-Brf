<?php 

/**
 * Template part for displaying front page image
 *
 * 
 *
 * @package Brf
 */

?>


<?php

$front_page_topimage    = get_field( 'front_page_topimage' );
$front_page_topheading  = get_field( 'front_page_topheading' );
$front_page_toptext     = get_field( 'front_page_toptext' );

?>
   


<section>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="first-slide" src="<?php echo $front_page_topimage[ 'url' ]; ?>" alt="First slide">
            <div class="carousel-caption d-none d-md-block text-left">
                <h1><?php echo $front_page_topheading; ?></h1>
                <p><?php echo $front_page_toptext; ?></p>
            </div><!-- .carousel-caption .d-none .d-md-block .text-left -->
        </div><!-- -carousel-item-active -->
    </div><!-- .carousel-inner -->
</section>
