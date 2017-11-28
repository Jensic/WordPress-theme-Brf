<?php

/**
 * Template part for displaying front page carousel
 *
 * 
 *
 * @package Brf
 */

?>


<?php

$carousel_heading_1 = get_field( 'carousel_heading_1' );
$carousel_text_1    = get_field( 'carousel_text_1' );
$carousel_button_1  = get_field( 'carousel_button_1' );
$carousel_image_1   = get_field( 'carousel_image_1' );

$carousel_heading_2 = get_field( 'carousel_heading_2' );
$carousel_text_2    = get_field( 'carousel_text_2' );
$carousel_button_2  = get_field( 'carousel_button_2' );
$carousel_image_2   = get_field( 'carousel_image_2' );

$carousel_heading_3 = get_field( 'carousel_heading_3' );
$carousel_text_3    = get_field( 'carousel_text_3' );
$carousel_button_3  = get_field( 'carousel_button_3' );
$carousel_image_3   = get_field( 'carousel_image_3' );

?>
   
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol><!-- .carousel-indicators -->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="first-slide" src="<?php echo $carousel_image_1[ 'url' ]; ?>" alt="First slide">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block text-left">
                        <h1><?php echo $carousel_heading_1; ?></h1>
                        <p><?php echo $carousel_text_1; ?></p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button"><?php echo $carousel_button_1; ?></a></p>
                    </div><!-- .carousel-caption .d-none .d-md-block .text-left -->
                </div><!-- .container -->
            </div><!-- -carousel-item-active -->
        
            <div class="carousel-item">
                <img class="second-slide" src="<?php echo $carousel_image_2[ 'url' ]; ?>" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block">
                        <h1><?php echo $carousel_heading_2; ?></h1>
                        <p><?php echo $carousel_text_2; ?></p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button"><?php echo $carousel_button_2; ?></a></p>
                    </div><!-- .carousel-caption .d-none .d-md-block -->
                </div><!-- .container -->
            </div><!-- -carousel-item -->
            <div class="carousel-item">
                <img class="third-slide" src="<?php echo $carousel_image_3[ 'url' ]; ?>" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block text-right">
                         <h1><?php echo $carousel_heading_3; ?></h1>
                        <p><?php echo $carousel_text_3; ?></p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button"><?php echo $carousel_button_3; ?></a></p>
                    </div><!-- .carousel-caption .d-none .d-md-block -->
                </div><!-- .container -->
            </div><!-- -carousel-item -->
        </div><!-- .carousel-inner -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Föregående</span>
        </a><!-- .carousel-control-prev -->
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Nästa</span>
        </a><!-- .carousel-control-next -->
    </div><!-- #myCarousel .carousel .slide -->