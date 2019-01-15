<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if (function_exists('is_tag') && is_tag()) { echo 'Tag Archive for &quot;'.$tag.'&quot; '; } elseif (is_archive()) { wp_title(''); echo ' Archive - '; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } elseif (is_404()) { echo 'Not Found - '; } bloginfo('name'); ?></title>

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
                        <a class="nav-link" href="/#skills">Projects &amp; Skills</a>
                    </li>
                </ul>         
            </div>
            <picture>
                <a class="nav-link" href="/">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/sean-astrakhan-small-oct2.png" class="sean-logo rounded-circle img-fluid">
                </a>
            </picture>

            <div class="mr-25">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/my-blogs/">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
            <!-- Bubbles code is happening here -->
    <div class="demo-2">
        <div class="content">
            <div id="large-header">
                <main>
                    <div class="container col-md-6 pull-left offset-md-2 text-white pt-5 center-text-mobile">
                        <aside id="openingQuote" class="mb-5">
                            <h1 class="" style="font-size: 3.5em">Hi, I'm Sean.</h1>
                                <blockquote>
                                    <br />
                                    <h3 class="NotoFont colorMobileChange"><i>Full-Stack Developer</i></h3>
                                    <h3> Learning <i class="small fa fa-chevron-right text-secondaryDark"></i> Comfort </h3>
                                </blockquote>
                        </aside>
                    </div>
                    <summary id="btn-home-container" class="btn-home-hide">
                        <h4 id="btn-home" class="btn-home-page">Enter</h4>
                    </summary>
                </main>
                <canvas id="demo-canvas" class="mx-auto"></canvas>
            </div>
        </div>
    </div>
</header>

 


