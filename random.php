<section class="row post-Portfolio">
    <div class="col-md-8">
    </div>
    <div class="col-md-4">
</div>

</section>
<hr class="post-Portfolio" />


<form class="form-group text-white">
            <div>
                <label> Your Email </label>
                 [email* your-email id:contactFormEmail class:form-control]
            </div> 
            <div>
                <label> Subject </label>
                 [text your-subject id:contactFormSubject class:form-control] 
            </div>
            <div>
                <label> Your Message</label>
                    [textarea your-message class:form-control] 
                    [submit id:contactSubmit class:btn class:btn-secondaryLight"Send"]  
            </div> 
            
        <div>
</form>

echo '<a href="' . $post_link . '#">';
                        echo '<div class="card view overlay mr-3" style="width: 18rem;">';
                        echo    '<img class="card-img-top" src="' . $post_IMG . '" alt="TODO Change to image name">';
                        echo    '<div class="card-body">';
                        echo        '<h3>' . $post_title . '</h3>';
                        echo        '<p>' . $post_min_description . '</p>';
                        echo    '</div>';
                        echo '</div>';
                        echo '</a>';
                        
                        echo '<a href="' . $post_link . '#">';
                        echo '<div class="card view overlay mr-3" style="width: 18rem;">';
                        echo    '<section class="container">';
                        echo        '<div class="card-body col">';
                        echo            '<img class="card-img-top col" src="' . $post_IMG . '" alt="TODO Change to image name">';
                        echo        '</div>';
                        echo        '<div class="card-body col">';
                        echo            '<h3>' . $post_title . '</h3>';
                        echo            '<p>' . $post_min_description . '</p>';
                        echo        '</div>';
                        echo    '</section>';
                        echo '</div>';
                        echo '</a>';
   
   
   <!--WP CREATED MENU FROM HEADER-->
     <!-- <nav class="container">
         <div class="row">
            <div class="blog-header col-6">
                <h1 class="" role="alert">Sean's Tech Life</h1>
            </div> 
             <menu class="blog-masthead col-6">
             <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'my-custom-menu', 
                        'container_class' => 'custom-menu-class list-inline' ) ); 
                ?>
            </menu> 
        </div>
    </nav>   -->


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


echo            '<div class="fade-image-bottom" style="
background: 
    linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0),
        rgba(0, 0, 0, 0.6)
    ), 
    url(' . $post_IMG .');
    background-size: contain; 
    background-repeat: no-repeat;
">';
echo            '</div>';





echo '<div class="container center">';
if ( $the_query->have_posts() ) {
    echo '<div class="row">';
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                $post_full_description = get_the_content();
                $post_link = get_the_permalink();
                $post_IMG = get_the_post_thumbnail_url();
                $post_date = get_the_date();
                $post_title = get_the_title();
                $description_trimmed = mb_strimwidth($post_full_description, 0, 150, '...<br />');
                $post_tags =  get_the_tag_list('<div class="center"><button type="button" class="p-1 btn btn-info">',   '</button> <button type="button" class="p-1 btn btn-info">'   ,   '</button></div>');
                //Clean up line above

                //How to get image fade and margin on full
                //Rendered HTML below
                //echo '<a href="' . $post_link . '#">';
                echo '<div class="col-md-5 border rounded blog-card">';
                        echo '<div class="row">';
                        echo    '<div class="center p-3">';
                        echo        '<h4 class="sean-blog-card-title">' . $post_title . '</h4>';
                        echo        '<br />';
                        echo    '</div>';
                            echo    '<div class="col-8">';
                            echo        '<p>' . $description_trimmed . '</p>';
                            echo        '<p class="text-right text-muted"><i>' . $post_date . '</i></p>';
                            echo         $post_tags;
                            echo    '</div>';
                            echo    '<picture class="col-4 p-0">';
                            echo            '<img class="img-fluid" style="max-height:230px; float:right" src="' . $post_IMG . '" alt="TODO Change to image name">';
                            echo    '</picture>'; 
                        echo '</div>';
                //echo '</a>';
                echo '</div>';  
            }
    echo '</div>'; 
}
echo '</div>';s