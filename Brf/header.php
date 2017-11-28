<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    </head>
    <?php $front_page_header_image = get_field( 'front_page_header_image' ); ?>
    <body <?php body_class(); ?>>
        <header>
            <div class="container">   
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top nav-styling">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExapmleDefault" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
<!-- <img class="front-page-header-image" src="<?php echo $front_page_header_image[ 'url' ]; ?>" alt="bild i huvudmeny">WORK IN PROGRESS-->
                    <a class="navbar-brand" href="#">Äpplet</a>
                    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'navbar-nav mr-auto', 'container' => 'false', ) ); ?>
                   <?php get_search_form(); ?>
                    </div><!-- .collapse .navbar-collapse #navbarsExampleDefault -->
                </nav><!-- .navbar .navbar-inverse . navbar-fixed-top nav-styling-->
            </div><!-- .container -->
        </header>
        
       <div class="container">