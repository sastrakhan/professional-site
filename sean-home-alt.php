<?php /* Template Name: sean-home-alt */ ?>
<?php get_header(); 
   ?>
<main class="content-area">
   <div id="primary" class="row-m-t container">
      <article class="row smt-10 pt-4">
         <!-- <section class="col-sm-6">
            <h1 id="home-banner">Skills &amp; Projects</h1>
            </section> -->
         <blockquote  id="homeTopQuote" class="blockquote offset-md-3 col-md-6">
            <h3 class="NotoFont text-primaryDark text-center">
                <small><i class="small fa fa-quote-left"></i></small>
                    A full-stack developer who values <large class="text-secondaryDark">learning</large>
                    and <large class="text-secondaryDark">collaboration</large>over comfort and predictability.
                <small><i class="small fa fa-quote-right"></i></small> 
                <br class="d-sm-block d-md-none" /> 
               <span id="home-quote">-I said about myself</span>
            </h3>
            <hr class="post-Portfolio mt-4 mb-4" />
         </blockquote>
      </article>

      <section class="">
         <h1 class="text-uppercase page-banner" id="home-banner">Skills &amp; Projects</h1>
      </section>

      <aside class="clearfix row justify-content-center">     
         <a target="_blank" href="http://sean-professional.azurewebsites.net/wp-content/uploads/Sean-Astrakhan-Resume.pdf">  
         <button type="button" class="btn btn-resume home mt-2 mb-4">
         <i class="fa fa-download text-secondaryLight" aria-hidden="true"></i> Resume 
         </button>
         </a>
      </aside>

      <ul id="project-list" class="nav nav-tabs row mt-2" id="myTab" role="tablist">
         <li class="nav-item col-6 nav-item-l">
            <a class="nav-link active" aria-selected="true" id="backend-tab" data-toggle="tab" href="#backend" href="#backend" role="tab" aria-controls="home">
               <section class="row skillsTab">
                  <div class="col-md-6 skillsList">
                     <h2 class="d-sm-none d-none d-md-block">Backend</h2>
                     <h2 class="d-sm-block d-md-none">Back/Front</h2>
                     <ul>
                        <li>C#/.Net</li>
                        <li>PHP</li>
                        <li>Python <span class="text-primaryDarkGrey toggleDisplayMobile">
                           <i><small>(in progress)</small></i>
                           </span>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-6 skillsList">
                     <h2 class="d-sm-none d-none d-md-block">Frontend</h2>
                     <ul>
                        <li>React</li>
                        <li>Angular</li>
                        <li>Handlebars</li>
                     </ul>
                  </div>
               </section>
            </a>
         </li>
         <li class="nav-item col-6 nav-item-r">
            <a class="nav-link" id="data-exp-tab" data-toggle="tab" href="#data-exp" role="tab" aria-controls="data-exp" aria-selected="false">
               <section class="row skillsTab">
                  <div class="col-md-6 skillsList">
                     <h2 class="d-sm-none d-none d-sm-none d-md-block">Data</h2>
                     <h2 class="d-sm-block d-md-none">Data/SAAS</h2>
                     <ul>
                        <li>SQL</li>
                        <li>SSIS</li>
                        <li>Power-BI</li>
                     </ul>
                  </div>
                  <div class="col-md-6 skillsList">
                     <h2 class="d-sm-none d-none d-sm-none d-md-block">SAAS</h2>
                     <ul>
                        <li>CRM</li>
                        <li>WordPress</li>
                        <li>SharePoint</li>
                     </ul>
                  </div>
               </section>
            </a>
         </li>
      </ul>

      <div class="tab-content" id="myTabContent">
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


   <article class="bg-primaryDark">
    <aside class="container pt-3">
            <article class="row">
                <section class="col-md-7 row mt-3">
                            <h3 class="NotoFont text-primaryLightGrey">Currently interested in projects using <span class="text-secondaryDark">React, Node, Python, Cloud, PostgreSQL </span>
                               and growing as a developer while always considering the user's needs.</h3>
                        <img id="xkcd" class="img-fluid" alt="Overthinking a system to pass arbitrary condiments when all the users wants is salt" title="xkcd comic about arbitrary code" src="<?php bloginfo('stylesheet_directory'); ?>/images/bestpractices.png">
                </section>       

                <section class="col-md-5 flex-260 mb-3">
                    <section class="mt-4 mb-5">
                    <h1 class="text-uppercase page-banner">Blog Posts</h1>
                    <hr class="post-Portfolio" />
                    </section>
                    <?php createBlogList() ?>
                    <a class="text-secondaryLight text-center page-banner" href="/my-blogs">
                        <h5 style="margin-top: -5%">(See All)<h5>
                    </a>
                </section>
            </article>
    
    </aside>
   </article>


   <article class="bg-primaryLightGrey pb-3">
            <section class="">
                <h1 class="page-banner pt-3">Mentions</h1>
            </section>
            <aside class="container text-black">
                <section class="row">
                <div class="col-md-4">
                    <p class="mb-0">
                    <a href="https://technical.ly/impact/a-career-change-from-a-dream/" target="_blank">
                    <i class="small fa fa-quote-left"></i>
                    Astrakhan went to the event to serve as the link between those two worlds: those 
                    that were deep engineers...<span class="text-secondaryDark">read on</span><i class="small fa fa-quote-right"></i>
                    </a>
                    </p>
                    <img class="mention-img offset-2 img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/technically.png">
                </div>
                <div class="col-md-4">
                    <p class="mb-0">
                    <a href="https://www.sparkvisionnow.com/millennial-voices-sean-astrakhan/" target="_blank">
                    <i class="small fa fa-quote-left"></i>
                    Believes collaboration across generations can help businesses thrive and when egos are put aside
                    ...<span class="text-secondaryDark">read on</span><i class="small fa fa-quote-right"></i>
                    </p>
                    </a>
                    <img class="mention-img offset-2 img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/sparkvision.png">
                </div>
                <div class="col-md-4">
                    <p class="mb-0">
                    <a href="https://www.osibaltimore.org/impact-series/baltimore-dance-crews-project/" target="_blank">
                    <i class="small fa fa-quote-left"></i>
                        a software engineer who started mentoring with BDCP in his free time, after seeing the group perform
                        ...<span class="text-secondaryDark">read on</span><i class="small fa fa-quote-right"></i>
                    </a>
                    </p>
                    <img class="mention-img offset-2 img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/osi.png">
                </div>
                </section>
            </aside>
    </article>  


   <article class="">
        <article class="container">
            <h1 class="page-banner pt-5">In the Community</h1>
            <hr class="post-Portfolio" />
            <!-- Card Narrower -->
            <aside class="row pt-4">
                    <section class="col-md-6">
                        <div class="card card-cascade narrower mb-3">
                            <a href="http://www.baltimoredcp.org/" target="_blank">
                                <div class="view view-cascade overlay bdcp-image darken-overlay" >
                                    <h4 class="pt-2 volunteerCardText" style=""><strong>Baltimore Dance Crews Project</strong></h4>
                                </div>
                                <!-- Card content -->
                                <div class="card-body card-body-cascade bg-primaryLightGrey">
                                    <!-- Title -->
                                    <h4 class="card-title">Dancer &amp; Developer</h4>
                                    <!-- Text -->
                                    <p class="card-text">
                                        Volunteering with their data and CRM needs to help more people hear about their incredible mission...    
                                    </p>
                                </div>
                            </a>
                        </div>
                    </section>
                    <section class="col-md-6">
                        <div class="card card-cascade narrower mb-3">
                            <a href="http://www.codeforbaltimore.org/team/" target="_blank">
                                <div class="view view-cascade overlay code4bmore-image darken-overlay">
                                            <h3 class="pt-2 volunteerCardText"><strong>Code 4 Baltimore</strong></h3>
                                    </div>
                                    <!-- Card content -->
                                    <div class="card-body card-body-cascade bg-primaryLightGrey">
                                        <!-- Title -->
                                            <h4 class="card-title">Tech Lead</h4>
                                        <!-- Text -->
                                        <p class="card-text">
                                            Volunteering on tech projects to create solutions that aid local government in data transparency...  
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </section>
            </aside>
            <p class="extend-footer text-center col-md-6 offset-md-3 text-primaryMidGrey">
                "Volunteering takes commitment.  Before you decide, remember - you probably have nothing better to do.” 
                <br />
                <i>– My friend Cynthia</i>
            </p>
        </article>
   </article>     
  
   <!-- Card Narrower -->
</main>
<script src="./wp-content/themes/custom_sean_theme/js/bubbles/rAF.js"></script>
<script src="./wp-content/themes/custom_sean_theme/js/bubbles/demo-2.js"></script>
<?php 
   function createBlogList(){
       $blogPosts = getPosts(array ( 0 => "Uncategorized"), 2);
   
       foreach($blogPosts as $blogPost){
           $description_trimmed = mb_strimwidth($blogPost -> min_description, 0, 150, '...<br />');
   
           echo    '<div class="row mb-3">';
           echo       '<div class="col-2 wrapper">';
           echo          '<img class="rounded-circle img-responsive circle" src="' . $blogPost -> imgURL . '" alt="' . $blogPost -> imgAltText . '" title="' . $blogPost -> title . '">';
           echo       '</div>';
           echo       '<div class="offset-1 col-9">';
           echo         '<a href="' . $blogPost -> link . '#">';
           echo           '<h4 class="card-title-shrink text-primaryLightGrey">' . $blogPost -> title . '</h4>';
           echo           '<p class="text-primaryMidGrey">' . $description_trimmed . '</p>';
           echo           '<p class="text-primaryLightGrey text-right blog-home-date"><i>' . $blogPost -> dateCreated . '</i></p>';
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
   
       echo '<div class="row row-IE">';
       foreach($blogPosts as $blogPost){
           $post_URL = '<a href="' . $blogPost -> link . '#">Read more</a>';
           $post_min_desc_parsed = explode("Features", $blogPost -> min_description, 2);
           $post_min_description = $post_min_desc_parsed[0];
           $post_mobile_description = mb_strimwidth($post_min_description, 0, 60, "...");
           $tags_formatted = buildTagBtns($blogPost -> tags);
   
           echo     '<a class="col-md-6 blog-card-row" href="' . $blogPost -> link . '#">';
           echo        '<section class="container bg-white p-0 blog-card">';
           echo            '<div class="row row-IE">';
           echo                '<div class="col-md-4 col-3 p-0 IE-display-none">'; //Alt text less descriptive than Title.  Alt is pic info and title is how it relates
           echo                    '<img class="card-img-top col rounded workPostImg p-0" src="' . $blogPost -> imgURL . '" alt="' . $blogPost -> imgAltText . '" title="' . $blogPost -> title . '">';
           echo                '</div>';
           echo                '<div class="col-md-8 col-9 pt-3">';
           echo                    '<h3 class="card-title-shrink">' . $blogPost -> title . '</h3>';
           echo                    '<p class="mb-0 text-primaryDarkGrey d-none d-sm-none d-md-block">' . $post_min_description . '</p>';
           echo                    '<p class="mb-0 text-primaryDarkGrey d-sm-block d-md-none">' . $post_mobile_description . '</p>';
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