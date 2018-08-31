

<?php
//var_dump($post_trimmed);   //Display variable value along with meta data

                $args = array(
                    'post_type'         => 'post',
                    'posts_per_page'    => 10
                );
                $the_query = new WP_Query( $args );
                
                // The Loop that actually loops posts
                if ( $the_query->have_posts() ) {
                    echo '<ul>';
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        echo '<li>' . get_the_title() . '</li>';
                    }
                    echo '</ul>';
                }
                /* Restore original Post Data */
                wp_reset_postdata();
                //var_dump();  
            ?>

<!--Was in Sean-home-->
<?php
                // Start the loop.
                while ( have_posts() ) : the_post();
        
                    // Include the page content template.
                    get_template_part( 'template-parts/content', 'page' );
        
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
        
                    // End of the loop.
                endwhile;
                ?>
<!--Was in index-->
    <?php 
                if ( have_posts() ) { 
                    while ( have_posts() ) : the_post();
                ?>

                    <div class="blog-post">
                                <?php the_content(); ?>
                                    </div><!-- Stuff above shows page stuff-->
                                <?php
                    endwhile;
                    } 
                ?> 
                </div><!-- /.blog-main -->
        <?php 