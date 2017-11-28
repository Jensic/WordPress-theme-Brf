<?php

/** 
* Heading for news page
*/

?>


<?php 

$content_news_title  = get_field( 'content_news_title' );
$content_news_text   = get_field( 'content_news_text' );

?>
       

    <div class=" row news-header">
        <div class="col-sm-11 offset-sm-1 center-heading">
            <h1 class="front-heading-title"><?php echo $content_news_title; ?></h1>
            <p class="lead front-heading-description"><?php echo $content_news_text; ?></p> 
        </div><!-- .col-sm-11 offset-sm-1 center-heading -->
    </div><!-- .row news-header -->