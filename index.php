<?php get_header(); 
    //<div class="col-sm-12 blog-main">
    if ( have_posts() ) { 
        while ( have_posts() ) : the_post();
    ?>
        <div class="content-area container sm-header-margin clearfix" id="wordpress-content-area">
            <?php the_content(); ?>
        </div><!-- Stuff above shows page stuff-->
    <?php
        endwhile;
    } 
?> 
    
<!-- /.blog-main -->

<?php   
    get_footer(); 
    wp_footer();
?>

