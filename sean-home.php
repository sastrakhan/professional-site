<?php /* Template Name: sean-home */ ?>
<?php get_header(); ?>
 
<main class="container content-area">
    <div id="primary" class="row-m-t"> 
        <blockquote id="homeTopQuote" style="margin-top:10%;" class="blockquote col-md-6">
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
            <button type="button" class="btn text-secondaryLight float-left">
                <a href="https://www.github.com/sastrakhan?tab=stars" target="_blank"><span class="fa fa-2x fa-github secondaryLight"></span></a>
            </button>
            <button type="button" class="btn btn-resume float-right">
                <i class="fa fa-download" aria-hidden="true"></i> Resume 
            </button>
        </aside>
            
        <ul id="project-list" class="nav nav-tabs row mt-2" id="myTab" role="tablist">
            <li class="nav-item col-6 col-md-3">
                <div class="nav-link active" aria-selected="true" id="backend-tab" data-toggle="tab" href="#backend" role="tab" aria-controls="home">
                    <div>
                        <h2>Back End</h2>
                        <ul>
                            <li>C#/.Net</li>
                            <li>PHP</li>
                            <!-- <li>Need something</li> -->
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item col-6 col-md-3">
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
            <li class="nav-item col-6 col-md-3">
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
            <li class="nav-item col-6 col-md-3">
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
            <div class="tab-pane fade" id="data-exp" role="tabpanel" aria-labelledby="data-exp-tab">
                <?php buildPostExcerpt('data'); ?>
            </div>
            <div class="tab-pane fade" id="saas-exp" role="tabpanel" aria-labelledby="saas-exp-tab">
                <?php buildPostExcerpt('saas'); ?>
            </div>
        </div>
    </div>

    <div class="row container">
        <section class="col bg-primaryMid rounded-top">
            <h3 class="text-white mt-4">In the Community...</h3>
            <p class="text-white"><i>“It’s easy to make a buck.  It’s a lot tougher to make a difference. ”</i> – Tom Brokaw</p>
            <!-- Card Narrower -->
            <div class="card card-cascade narrower mb-3">
                <!-- Card image -->
                <div class="view view-cascade overlay bdcp-image darken-overlay">
                    <a>
                        <h3 class="pt-2 text-white"><strong>Baltimore Dance Crews Project</strong></h3>
                    </a>
                </div>
                <!-- Card content -->
                <div class="card-body card-body-cascade">
                    <!-- Title -->
                    <h4 class="card-title">Development Associate &amp; Dancer</h4>
                    <!-- Text -->
                    <p class="card-text">
                        Volunteering with their data and CRM needs to help more people hear about their incredible mission - 
                        initiate and strengthen relationships through hip hop dance to aid students from school to career.   
                        [website icon]    
                    </p>
                </div>
            </div>
            <!-- Card Narrower -->
            <!-- Card Narrower -->
            <div class="card card-cascade narrower mb-3">
                <!-- Card image -->
                <div class="view view-cascade overlay code4bmore-image darken-overlay">
                    <a>
                        <h3 class="pt-2 text-white"><strong>Code 4 Baltimore</strong></h3>
                    </a>
                </div>
                <!-- Card content -->
                <div class="card-body card-body-cascade">
                    <!-- Title -->
                    <h4 class="card-title">Tech Lead</h4>
                    <!-- Text -->
                    <p class="card-text">
                        Why learn new tech skills by building simple applications you're going to toss?  This organization allows me 
                        to grow my abilities through projects that can be put to practical use to aid the city.   
                        [website icon]    
                    </p>
                </div>
            </div>
            <!-- Card Narrower -->
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
            echo    '<div class="col-2 wrapper">';
            echo       '<img class="rounded-circle img-responsive circle" src="' . $blogPost -> imgURL . '" alt="TODO Change to image name">';
            echo    '</div>';
            echo    '<div class="offset-1 col-8">';
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

        $blogPosts = getPosts($category, 3);

        echo '<div class="row">';
        foreach($blogPosts as $blogPost){
            $post_URL = '<a href="' . $blogPost -> link . '#">Read more</a>';
            $post_min_desc_parsed = explode("Features", $blogPost -> full_description, 2);
            $post_min_description = $post_min_desc_parsed[0];
            //var_dump($blogPost -> tags_formatted);

            echo     '<a class="col-md-5 mr-5 mb-4 p-0" href="' . $blogPost -> link . '#">';
            echo        '<section class="container bg-white p-0 blog-card">';
            echo            '<div class="row">';
            echo                '<div class="col-4 p-0">';
            echo                    '<img class="card-img-top col rounded workPostImg p-0" src="' . $blogPost -> imgURL . '" alt="TODO Change to image name">';
            echo                '</div>';
            echo                '<div class="col-8 pt-3">';
            echo                    '<h3 class="">' . $blogPost -> title . '</h3>';
            echo                    '<p class="mb-0 text-primaryDarkGrey">' . $post_min_description . '</p>';
            //echo                    '<p>' . $blogPost -> tags_formatted . '</p>';
            echo                '</div>';
            echo            '</div>';
            echo        '</section>';
            echo     '</a>';
        }
        echo '</div>';

    }
    get_footer(); 
?>

