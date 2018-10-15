
<?php
/*
 * Template Name: sean-blog-posts
 * The template for displaying all single posts and attachments
 * @package WordPress
 */
    get_header(); 
?>
 
    <div id="primary" class="content-area sm-header-margin">
        <main id="main" class="site-main" role="main">

        <section class="smt-10 mb-4 text-center">
                <h2 id="blogPageHeader" class="text-primaryDark">Thanks for checking out my blog!</h2>
                <h6 class="text-primaryMidGrey">I got a Masters in English hence my writing is gooder than most.</h6>
        </section>
  
        <div class="offset-3 col-6">
            <hr class="post-Portfolio mt-4 mb-4" />
        </div>
        <?php
        function getPosts($categoryName, $amount){
            require_once('template-parts/seanPost.php');

            $args = array(
                'post_type'         => 'post',
                'posts_per_page'    => $amount,
                'category_name' =>  $categoryName
            );

            $the_query = new WP_Query( $args ); 
            //var_dump($the_query);
            return getPostProperties($the_query);
        }

        function buildPostExcerpt($category){

            $blogPosts = getPosts($category, 10);
    
            echo '<div class="container center">';
            echo '<div class="row">';
            foreach($blogPosts as $blogPost){
                $post_URL = '<a href="' . $blogPost -> link . '#">Read more</a>';
                $post_min_desc_parsed = explode("Features", $blogPost -> min_description, 2);
                $post_min_description = $post_min_desc_parsed[0];
                $post_mobile_description = mb_strimwidth($post_min_description, 0, 150, "...");
                $tags_formatted = buildTagBtns($blogPost -> tags);
    
                                echo '<div class="col-md-5 border rounded blog-card">';
                                echo '<a href="' . $blogPost -> link . '#">';
                                        echo '<div class="row">';
                                        echo    '<div class="center p-3">';
                                        echo        '<h4 class="sean-blog-card-title">' . $blogPost -> title . '</h4>';
                                        echo        '<br />';
                                        echo    '</div>';
                                            echo    '<div class="col-8">';
                                            echo        '<p>' . $post_mobile_description . '</p>';
                                            echo        '<p class="text-right text-muted"><i>' . $blogPost -> dateCreated . '</i></p>';
                                            echo         $tags_formatted;
                                            echo    '</div>';
                                            echo    '<picture class="col-4 p-0">';
                                            echo            '<img class="img-fluid" style="max-height:230px; float:right" src="' . $blogPost -> imgURL . '" alt="TODO Change to image name">';
                                            echo    '</picture>'; 
                                        echo '</div>';
                                echo '</a>';
                                echo '</div>';  
            }
            echo '</div>';
            echo '</div>';
    
        }
        buildPostExcerpt("Uncategorized");
        ?>
 
        </main><!-- .site-main -->
    </div><!-- .content-area -->
 
<?php get_footer(); ?>