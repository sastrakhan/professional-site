<?php /* Template Name: sean-home */ ?>
<?php get_header(); ?>
 
<main class="container content-area">
    <div id="primary" class="row-m-t">
        
        <blockquote style="margin-top:10%;" class="blockquote col-md-6">
                    <h3 class="NotoFont text-primaryDark">
                    <small><i class="small fa fa-quote-left"></i></small>
                        A full-stack developer who values <large class="text-secondaryDark">learning</large> 
                        and <large class="text-secondaryDark">collaboration</large> over comfort and predicability.
                     <small><i class="small fa fa-quote-right"></i></small> 
                     <span id="home-quote">-I said about myself</span>
                    </h3>
        </blockquote>

        <h4 id="home-banner">Skills &amp; Projects</h4>

        <aside class="clearfix">
            <button type="button" class="btn btn-resume float-right">
                <i class="fa fa-download" aria-hidden="true"></i> Resume 
            </button>
        </aside>
            
        <ul id="project-list" class="nav nav-tabs row" id="myTab" role="tablist">
            <li class="nav-item col-md-3">
                <div class="nav-link active" aria-selected="true" id="backend-tab" data-toggle="tab" href="#backend" role="tab" aria-controls="home">
                    <div>
                        <h2>Back End</h2>
                        <ul>
                            <li>C#/.Net</li>
                            <li>PHP</li>
                            <li>Need something</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item col-md-3">
                <div class="nav-link" id="js-tab" data-toggle="tab" href="#js" role="tab" aria-controls="js" aria-selected="false">
                    <div>
                        <h2>Javascript</h2>
                        <ul>
                            <li>React</li>
                            <li>Angular</li>
                            <li>Handle Bars</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item col-md-3">
                <div class="nav-link" id="data-exp-tab" data-toggle="tab" href="#data-exp" role="tab" aria-controls="data-exp" aria-selected="false">
                    <div>
                        <h2>Data</h2>
                        <ul>
                            <li>SQL</li>
                            <li>SSIS</li>
                            <li>Power BI</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item col-md-3">
                <div class="nav-link" id="saas-exp-tab" data-toggle="tab" href="#saas-exp" role="tab" aria-controls="saas-exp" aria-selected="false">
                    <div>
                        <h2>SAAS</h2>
                        <ul>
                            <li>CRM</li>
                            <li>WordPress</li>
                            <li>SharePoint</li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent" style="padding: 3%;">
            <div class="tab-pane fade show active" id="backend" role="tabpanel" aria-labelledby="backend-tab">
                <!--Serverside Content-->
                <?php buildPostExcerpt('serverside'); ?>
            </div>
            <div class="tab-pane fade" id="js" role="tabpanel" aria-labelledby="js-tab">
                <!--JS Content-->
                <?php buildPostExcerpt('javascript'); ?>
            </div>
            <div class="tab-pane fade" id="data-exp" role="tabpanel" aria-labelledby="data-exp-tab">.My data stuff..

            </div>
            <div class="tab-pane fade" id="saas-exp" role="tabpanel" aria-labelledby="saas-exp-tab">.My saas stuff..

            </div>
        </div>
    </div>

    <div class="row">
        <section class="col">
            <h3>In the Community...</h3>
            <h5>“It’s easy to make a buck.  It’s a lot tougher to make a difference. ” – Tom Brokaw</h5>
        </section>
        <section class="col flex-260">
            <?php createBlogList() ?>
        </section>
    </div>
  
</main>


<script src="./wp-content/themes/custom_sean_theme/js/bubbles/rAF.js"></script>
<script src="./wp-content/themes/custom_sean_theme/js/bubbles/demo-2.js"></script>
 
<?php 
    function createBlogList(){
        $blogPosts = getPosts('Uncategorized', 3);

        foreach($blogPosts as $blogPost){
            $post_URL = '<a href="' . $blogPost -> link . '#">Read more</a>';
            $description_trimmed = mb_strimwidth($blogPost -> full_description, 0, 150, '...<br />');

            echo '<div class="row">';
            echo    '<div class="col-4 wrapper">';
            echo       '<img class="rounded-circle img-responsive circle" src="' . $blogPost -> imgURL . '" alt="TODO Change to image name">';
            echo    '</div>';
            echo    '<div class="col-8">';
            echo        '<h4 class="text-primaryMid">' . $blogPost -> title . '</h4>';
            echo        '<p>' . $description_trimmed . $post_URL . '</p>';
            echo        '<div class="container row justify-content-between">';
            echo            '<div class"col-4">';
            echo                '<p class="text-muted"><i>' . $blogPost -> dateCreated . '</i></p>';
            echo            '</div>';
            echo            '<div class"col-4">';
            echo                '<p>' . $blogPost -> tags_formatted . '</p>';
            echo            '</div>';
            echo        '</div>';
            echo    '</div>';
            echo '</div>';
        }
    }

    function getPosts($categoryName, $amount){
        require_once('template-parts/seanPost.php');

        $args = array(
            'post_type'         => 'post',
            'posts_per_page'    => $amount,
            'category_name' => $categoryName
        );

        $the_query = new WP_Query( $args ); 
        return getPostProperties($the_query);
    }

    function buildPostExcerpt($category){
        $args = array(
            'post_type'         => 'post',
            'posts_per_page'    => '10',
            'category_name' => $category
        );

        $the_query = new WP_Query( $args ); 
        // The Loop that actually loops posts
        //  Use this maybe for experience file:///Users/ryanallis/Downloads/ExpandingGridItemAnimation/index.html 
        if ( $the_query->have_posts()) {
            echo '<div class="row">';
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        $post_min_description = get_the_excerpt();
                        $post_full_description = get_the_content();
                        $post_link = get_the_permalink();
                        $post_URL = '<a href="' . $post_link . '#">Read more</a>';
                        $post_IMG = get_the_post_thumbnail_url();
                        $post_title = get_the_title();
                        $description_trimmed = mb_strimwidth($post_full_description, 0, 150, '...<br />');
                        //Rendered HTML below
                        echo '<a href="' . $post_link . '#">';
                        echo '<div class="card view overlay mr-3" style="width: 18rem;">';
                        echo    '<img class="card-img-top" src="' . $post_IMG . '" alt="TODO Change to image name">';
                        echo    '<div class="card-body">';
                        echo        '<h3>' . $post_title . '</h3>';
                        echo        '<p>' . $description_trimmed . $post_URL . '</p>';
                        echo    '</div>';
                        echo '</div>';
                        echo '</a>';
                    }
            echo '</div>';
        }
    }
    get_footer(); 
?>

