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

<div id="loadingAside" class="row">
   <div class="col-sm-12 my-auto">
     <div id="loadingContent">
      <h1 class="text-center text-white">Hi,</h1>
      <h4 class="btn-loading-home-page">One sec...</h4>
    </div>
   </div>
</div>


<header class="small-header lg-header">
    <nav class="navbar navbar-expand navbar-dark bgbg-primaryDark">
        <div class="container">
            <div class="ml-25">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php/#skills">Projects &amp; Skills</a>
                    </li>
                </ul>         
            </div>
            <picture>
                <a class="nav-link" href="index.php">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/sean-astrakhan-small-oct.png" class="sean-logo rounded-circle img-fluid">
                </a>
            </picture>

            <div class="mr-25">
                <ul class="nav navbar-nav">
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
                <summary>
                    <div class="container col-md-6 pull-left offset-md-2 text-white pt-5">
                        <aside id="openingQuote" class="mb-5">
                            <h1>Hi, I'm Sean,</h1>
                            <h4 class="NotoFont">I like to code, listen, and give unsolicted advice.</h4>
                            <h4 class="NotoFont">Some call me affable, coachable and optimistic.  I'm having a hard time thinking of what else to put here.</h4>
                        </aside>
                        <article>
                            <!-- <p>
                                Learn more about <a class="text-secondaryDark" href="index.php/about/">who I am </a>
                                or my <a class="text-secondaryDark" href="#">professional background</a>.  
                            </p> MAKE THIS A MENU-->
                        </article>
                    </div>
                    <div id="btn-home-container" class="btn-home-hide">
                        <h4 id="btn-home" class="btn-home-page">Enter</h4>
                    </div>
                </summary>
                <canvas id="demo-canvas" class="mx-auto"></canvas>
            </div>
        </div>
    </div>
</header>

 


