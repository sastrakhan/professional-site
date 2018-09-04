
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

        echo '<div class="container">';
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
                        $post_tags =  get_the_tag_list('<div><button type="button" class="btn btn-info">',   '</button> <button type="button" class="btn btn-info">'   ,   '</button></div>');
                        //Clean up line above

                        //Rendered HTML below
                                //echo '<a href="' . $post_link . '#">';
                                echo '<div class="col-md-6 border rounded">';
                                    echo '<div class="row">';
                                        echo    '<div class="col test">';
                                        echo        '<h5>' . $post_title . '</h5>';
                                        echo        '<p class="text-center"><i>' . $post_date . '</i></p>';
                                        echo        '<p>' . $description_trimmed . '</p>';
                                        echo    '</div>';
                                        echo    '<div class="col">';
                                        echo            '<img class="img-fluid img-thumbnail" src="' . $post_IMG . '" alt="TODO Change to image name">';
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