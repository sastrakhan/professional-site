<?php /* Template Name: sean-home */ ?>
<?php get_header(); ?>
 
<main class="container content-area">
    <div id="primary" class="row-m-t"> 

        <article class="row" style="margin-top:10%;" >
            <!-- <section class="col-sm-6">
                <h1 id="home-banner">Skills &amp; Projects</h1>
            </section> -->
            <blockquote  id="homeTopQuote" class="blockquote offset-sm-3 col-sm-6">
                        <h3 class="NotoFont text-primaryDarkGrey text-center">
                            <small><i class="small fa fa-quote-left"></i></small>
                                A full-stack developer who values <large class="text-secondaryDark">learning</large> 
                                and <large class="text-secondaryDark">collaboration</large> over comfort and predictability.
                            <small><i class="small fa fa-quote-right"></i></small> 
                            <span id="home-quote">-I said about myself</span>
                        </h3>
                        <hr class="post-Portfolio" />

            </blockquote>          
        </article>

        <section class="">
                <h1 class="text-uppercase" id="home-banner">Skills &amp; Projects</h1>
        </section>
        <aside class="clearfix">
                <button type="button" class="btn text-secondaryLight float-left">
                    <a href="https://www.github.com/sastrakhan?tab=stars" target="_blank"><span class="fa fa-2x fa-github secondaryLight"></span></a>
                </button>
                <button type="button" class="btn btn-resume float-right">
                <i class="fa fa-download fa-lg" aria-hidden="true"></i>
                <a target="_blank" href="http://sean-professional.azurewebsites.net/wp-content/uploads/2018/09/Sean-Astrakhan-Resume.pdf">  
                    Resume 
                </a>
                </button>
        </aside>

            
        <ul id="project-list" class="nav nav-tabs row mt-2" id="myTab" role="tablist">
            <li class="nav-item col-6">
                <div class="nav-link active" aria-selected="true" id="backend-tab" data-toggle="tab" href="#backend" role="tab" aria-controls="home">
                    <section class="row">
                        <div class="col-6">
                            <h2>Back End</h2>
                            <ul>
                                <li>C#/.Net</li>
                                <li>PHP</li>
                                <!-- <li>Need something</li> -->
                            </ul>
                        </div>
                        <div class="col-6">
                            <h2>Javascript</h2>
                            <ul>
                                <li>React</li>
                                <li>Angular</li>
                                <li>Handle Bars</li>
                            </ul>
                        </div>
                    </section>
                </div>
            </li>
            <li class="nav-item col-6">
                <div class="nav-link" id="data-exp-tab" data-toggle="tab" href="#data-exp" role="tab" aria-controls="data-exp" aria-selected="false">
                    <section class="row">
                            <div class="col-6">
                                <h2>Data</h2>
                                <ul>
                                    <li>SQL</li>
                                    <li>SSIS</li>
                                    <li>Power BI</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <h2>SAAS</h2>
                                <ul>
                                    <li>CRM</li>
                                    <li>WordPress</li>
                                    <li>SharePoint</li>
                                </ul>
                            </div>
                    </section>
                </div>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent" style="padding: 3%;">
            <div class="tab-pane fade show active" id="backend" role="tabpanel" aria-labelledby="backend-tab">
                <!--Serverside Content-->
                <?php buildPostExcerpt(array ( 0 => "serverside", 1 => "javascript")); ?>
            </div>
            <div class="tab-pane fade" id="data-exp" role="tabpanel" aria-labelledby="data-exp-tab">
                <!--Data Content-->
                <?php buildPostExcerpt(array ( 0 => "data", 1 => "saas")); ?>
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
                <div class="view view-cascade overlay bdcp-image darken-overlay" >
                    <a>
                        <h4 class="pt-2 volunteerCardText" style=""><strong>Baltimore Dance Crews Project</strong></h4>
                    </a>
                </div>
                <!-- Card content -->
                <div class="card-body card-body-cascade">
                    <!-- Title -->
                    <a href="http://www.baltimoredcp.org/" target="_blank">
                        <h4 class="card-title ">Dancer &amp; Developer</h4>
                    </a>
                    <!-- Text -->
                    <p class="card-text text-primaryDarkGrey">
                        Volunteering with their data and CRM needs to help more people hear about...  
                        <a href="https://www.youtube.com/watch?v=2Nm68FW_dDI&feature=youtu.be" target="_blank">
                            <i class="fa fa-video-camera text-secondaryDark" aria-hidden="true"></i>    
                        </a>   
                    </p>
                </div>
            </div>
            <!-- Card Narrower -->
            <div class="card card-cascade narrower mb-3">
                <!-- Card image -->
                <div class="view view-cascade overlay code4bmore-image darken-overlay">
                        <h3 class="pt-2 text-white volunteerCardText"><strong>Code 4 Baltimore</strong></h3>
                </div>
                <!-- Card content -->
                <div class="card-body card-body-cascade">
                    <!-- Title -->
                    <a href="http://www.codeforbaltimore.org/team/" target="_blank">
                        <h4 class="card-title">Tech Lead</h4>
                    </a>
                    <!-- Text -->
                    <p class="card-text text-primaryDarkGrey">
                        Volunteering to build tech projects that aid local government in...  
                    </p>
                </div>
            </div>
            <!-- Card Narrower -->
        </section>
        <section class="col flex-260">
            <section class="mt-3 mb-5">
                    <h1 class="text-uppercase" id="home-banner">Recent Blog Posts</h1>
                    <hr class="post-Portfolio" />
            </section>
            <?php createBlogList() ?>
        </section>
    </div>
  
</main>

<script src="./wp-content/themes/custom_sean_theme/js/bubbles/rAF.js"></script>
<script src="./wp-content/themes/custom_sean_theme/js/bubbles/demo-2.js"></script>
 
<?php 
    function createBlogList(){
        $blogPosts = getPosts(array ( 0 => "Uncategorized"), 3);

        foreach($blogPosts as $blogPost){
            $description_trimmed = mb_strimwidth($blogPost -> min_description, 0, 150, '...<br />');

            echo    '<div class="row">';
            echo       '<div class="col-2 wrapper">';
            echo          '<img class="rounded-circle img-responsive circle" src="' . $blogPost -> imgURL . '" alt="TODO Change to image name">';
            echo       '</div>';
            echo       '<div class="offset-1 col-8">';
            echo         '<a href="' . $blogPost -> link . '#">';
            echo           '<h4 class="text-primaryMid">' . $blogPost -> title . '</h4>';
            echo           '<p>' . $description_trimmed . '</p>';
            echo           '<div class="container row justify-content-between">';
            echo               '<div class"col-4">';
            echo                   '<p class="text-muted"><i>' . $blogPost -> dateCreated . '</i></p>';
            echo               '</div>';
            echo               '<div class"col-4">';
            //echo                '<p>' . $blogPost -> tags_formatted . '</p>';
            echo               '</div>';
            echo           '</div>';
            echo        '</a>';
            echo       '</div>';
            echo    '</div>';
        }
    }

    function getPosts($categoryNames, $amount){
        require_once('template-parts/seanPost.php');

        $args = array(
            'post_type'         => 'post',
            'posts_per_page'    => $amount,
            'category_name' =>  implode (", ", $categoryNames)
        );

        $the_query = new WP_Query( $args ); 
        return getPostProperties($the_query);
    }

    function buildPostExcerpt($category){

        $blogPosts = getPosts($category, 10);

        echo '<div class="row">';
        foreach($blogPosts as $blogPost){
            $post_URL = '<a href="' . $blogPost -> link . '#">Read more</a>';
            $post_min_desc_parsed = explode("Features", $blogPost -> min_description, 2);
            $post_min_description = $post_min_desc_parsed[0];
            $tags_formatted = buildTagBtns($blogPost -> tags);

            echo     '<a class="col-md-5 mr-5 mb-4 p-0" href="' . $blogPost -> link . '#">';
            echo        '<section class="container bg-white p-0 blog-card">';
            echo            '<div class="row">';
            echo                '<div class="col-4 p-0">';
            echo                    '<img class="card-img-top col rounded workPostImg p-0" src="' . $blogPost -> imgURL . '" alt="TODO Change to image name">';
            echo                '</div>';
            echo                '<div class="col-8 pt-3">';
            echo                    '<h3 class="">' . $blogPost -> title . '</h3>';
            echo                    '<p class="mb-0 text-primaryDarkGrey">' . $post_min_description . '</p>';
            echo                     '<div class="mb-1">' . $tags_formatted . '</div>';
            echo                '</div>';
            echo            '</div>';
            echo        '</section>';
            echo     '</a>';
        }
        echo '</div>';

    }
    get_footer(); 
?>

<section class="row">
    <div class="col-md-8">
    </div>
    <div class="col-md-4">
</div>

</section>
<hr class="post-Portfolio" />

