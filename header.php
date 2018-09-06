<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<header class="small lg-header">
    <nav class="container">
        <div class="row">
            <div class="blog-header col-6">
                <h1 class="alert alert-primary" role="alert">Sean's Tech Life</h1>
            </div>
            <menu class="blog-masthead col-6">
                <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'my-custom-menu', 
                        'container_class' => 'custom-menu-class list-inline' ) ); 
                ?>
            </menu>
        </div>
    </nav>
            <!-- Bubbles code is happening here -->
    <div class="demo-2">
        <div class="content">
            <div id="large-header">
                <summary class="container well" style="color:white">
                    <aside class="col">
                        <h1 style="color:white;">Hi I'm Sean</h1>
                    </aside>
                    <article class="col">
                        <p>ulius Sans One', sans-serulius Sans One', sans-serulius Sans One', sans-ser</p>
                    </article>
                <summary>
                <canvas id="demo-canvas"></canvas>
            </div>
        </div>
    </div>
</header>

 


