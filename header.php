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

<header class="small-header lg-header">

    <nav class="navbar navbar-expand navbar-dark bg-primaryDark">
        <div class="container">
            <div style="margin-left: 25%">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Professional</a>
                    </li>
                </ul>         
            </div>
            <picture>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/sean-astrakhan-small.png" class="sean-logo rounded-circle img-fluid">
            </picture>

            <div style="margin-right: 25%">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php/contact/">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php/my-blogs/">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php/about/">About</a>
                    </li>
                </ul>
            </div>
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
                        <p>ulus Sans One', sans-serulius Sans One', sans-serulius Sans One', sans-ser</p>
                    </article>
                    <div id="btn-home-container" class="btn-home-hide">
                        <a class="btn-home-page" href="#">Enter</a>
                    </div>
                </summary>
                <canvas id="demo-canvas" class="mx-auto"></canvas>
            </div>
        </div>
    </div>
</header>

 


