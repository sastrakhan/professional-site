<?php get_header(); 
    //<div class="col-sm-12 blog-main">
    if ( have_posts() ) { 
        while ( have_posts() ) : the_post();
    ?>

    <div class="blog-post container">

    <?php the_content(); ?>
        </div><!-- Stuff above shows page stuff-->
    <?php
        endwhile;
    } 
?> 
    
</div><!-- /.blog-main -->

<?php   
    get_footer(); 
    wp_footer();
?>