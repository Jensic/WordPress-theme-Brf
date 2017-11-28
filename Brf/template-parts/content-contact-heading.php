<?php

/** 
* Heading for contact page
*/

?>


<?php 

$contact_title  = get_field( 'contact_title' );
$contact_text   = get_field( 'contact_text' );

?>
       

    <div class=" row contact-header">
        <div class="col-sm-8 offset-sm-1 center-heading">
            <h1 class="front-heading-title"><?php echo $contact_title; ?></h1>
            <p class="lead front-heading-description"><?php echo $contact_text; ?></p> 
        </div><!-- .col-sm-8 offset-sm-1 center-heading -->
    </div><!-- .row .contact-header -->