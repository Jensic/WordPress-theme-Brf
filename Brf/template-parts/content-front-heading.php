<?php

/**
 * Template part for displaying front page heading text
 *
 * 
 *
 * @package Brf
 */

?>


<?php 

$content_title  = get_field( 'content_title' );
$content_text   = get_field( 'content_text' );

?>
       

<div class=" row front-heading">
    <div class="col-sm-11 offset-sm-1 center-heading">
        <h1 class="front-heading-title"><?php echo $content_title; ?></h1>
        <p class="lead front-heading-description"><?php echo $content_text; ?></p> 
    </div><!-- .col-sm-11 offset-sm-1 center-heading -->
</div><!-- .row front-heading -->