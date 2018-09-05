
<?php
/*
 * Template Name: sean-posts
 * The template for displaying all single posts and attachments
 * @package WordPress
 */
 
    get_header(); 
?>
 
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <?php
        //$params = $_GET['param_name'];
        //var_dump(params);
        while ( have_posts() ) : the_post();
        $args = array(
            'post_type'         => 'post',
            'posts_per_page'    => 10,
            'category_name' => 'Uncategorized'
        );
        $the_query = new WP_Query( $args );

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
                        $post_tags =  get_the_tag_list('<div><button type="button" class="p-0 btn btn-secondary">',   '</button> <button type="button" class="p-0 btn btn-secondary">'   ,   '</button></div>');
                        //Clean up line above

                        //Rendered HTML below
                        //echo '<a href="' . $post_link . '#">';
                        echo '<div class="col-md-5 border rounded blog-card">';
                            echo '<div class="row">';
                                echo    '<div class="col pt-5">';
                                echo        '<h4 class="sean-blog-card-title">' . $post_title . '</h4>';
                                echo        '<br />';
                                echo        '<p>' . $description_trimmed . '</p>';
                                echo        '<p class="text-right text-muted"><i>' . $post_date . '</i></p>';
                                echo    '</div>';
                                echo    '<div class="col p-0">';
                                echo            '<img class="img-fluid" src="' . $post_IMG . '" alt="TODO Change to image name">';
                                echo            $post_tags;
                                echo    '</div>'; 
                            echo '</div>';
                        //echo '</a>';
                        echo '</div>';  
                    }
            echo '</div>'; 
        }
        echo '</div>';

 
        // End the loop.
        endwhile;
        ?>
 
        </main><!-- .site-main -->
    </div><!-- .content-area -->
 
<?php get_footer(); ?>