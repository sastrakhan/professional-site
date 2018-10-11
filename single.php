
<?php
/**
 * The template for displaying all single posts and attachments
 * @package WordPress
 */
 
    get_header(); 
?>
 
    <div id="primary" class="content-area sm-header-margin container clearfix">
        <main id="main" class="site-main" role="main">
        <?php

        require_once('template-parts/post-nav-prev-next.php');

        // Start the loop.
        while ( have_posts() ) : the_post();
 
            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */
            get_template_part( 'template-parts/single-post', get_post_format() );
 
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
 
            // This needs to be improved or deleted 
            // the_post_navigation( array(
            //     'prev_text'                  => __( 'Previous: %title' ),
            //     'next_text'                  => __( 'Next: %title' ),
            //     'in_same_term'               => true
            //     // 'taxonomy'                   => __( 'post_tag' ),
            //     // 'screen_reader_text' => __( 'Continue Reading' ),
            // ) );

            echo sean_the_post_navigation();
 
        // End the loop.
        endwhile;
        ?>
 
        </main><!-- .site-main -->
    </div><!-- .content-area -->
 
<?php get_footer(); ?>