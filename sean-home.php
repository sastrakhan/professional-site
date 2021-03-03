<?php /* Template Name: sean-home */ ?>
<?php get_header(); 
   ?>
<main class="content-area">
   <div id="primary" class="row-m-t container">
      <article class="row smt-10 pt-4">
        <blockquote  id="homeTopQuote" class="row blockquote offset-md-2 col-md-9">
            <h1 class="NotoFont text-primaryDark text-center">
                <small><i class="small fa fa-quote-left"></i></small>
                    An extroverted engineer who <large class="text-secondaryDark">empathetically</large> 
                    connects with clients and communicates complex technical ideas simply. <small><i class="small fa fa-quote-right"></i></small>
                <br class="d-sm-block d-md-none" /> 
                <p id="home-quote">- I said about myself</p>
            </h1>
        </blockquote>

        
        <section id="threeClientStatements" class="row mt-2 px-3">
            <div class="col-md-4">
                <h4>Builds trust with clients</h4>
                <p class="">through 
                <a target="_blank" href="http://seanstech.life/csv-upload-service/">  
                        empathy, clear expectations </a> and writing super good (My Masters is in English)
                </p>
                <!-- through understanding and clear expectations.</p> with any kind of client (from youth to CEOs) -->
            </div>
            <div class="col-md-4">
                <h4>Engages an audience</h4>
                <p>with <a target="_blank" href="http://seanstech.life/dazzling-demos/">  
                    dazzling demos </a> 
                (I <a target="_blank" href="http://seanstech.life/from-middle-school-teacher-to-software-engineer-consultant/"> 
                    taught middle school </a>so short attention spans are my favorite) </p>
            </div>
            <div class="col-md-4">
                <h4>Plays well with others</h4>
                <p>by <a target="_blank" href="http://seanstech.life/company-full-stack-initiative/"> 
                    sharing ideas </a>, asking for help, and contributing to a fun, fulfilling company culture.</p>
            </div>
        </section>
        <hr class="post-Portfolio mt-4 mb-4 w-100" />
      </article>

      <section>
         <h2 class="text-uppercase page-banner" id="home-banner">Skills &amp; Projects</h2>
      </section>

      <aside class="clearfix row justify-content-center">     
         <a target="_blank" href="http://seanstech.life/wp-content/uploads/Sean-Astrakhan-Resume.pdf">  
            <button type="button" class="btn btn-resume home mt-2 mb-4">
                <i class="fa fa-download text-secondaryLight" aria-hidden="true"></i> Resume 
            </button>
         </a>
         <h5 class="text-primaryMidGrey d-none text-center offset-md-1 col-11 mb-4">
                <i>Currently open to client-facing job opportunities (e.g. solutions architect, sales engineer)</i>
         </h5>
      </aside>

      <ul id="project-list" class="nav nav-tabs row mt-2" id="myTab" role="tablist">
         <li class="nav-item col-6 nav-item-l">
            <a class="nav-link active" aria-selected="true" id="backend-tab" data-toggle="tab" href="#backend" href="#backend" role="tab" aria-controls="home">
                <h2>Recent Projects</h2>
               <section class="row skillsTab">
                  <div class="col-md-3 skillsList">
                     <ul>
                        <li>React/Redux</li>
                     </ul>
                  </div>
                  <div class="offset-md-1 col-md-5 skillsList">
                     <ul>
                     <li>Django/Flask <i class="text-primaryDarkGrey toggleDisplayMobile"><small>(python)</small></i>
                     </li>
                     </ul>
                  </div> 
                  <div class="col-md-3 skillsList">
                     <ul>
                        <li>AWS</li>
                     </ul>
                  </div> 
               </section>
            </a>
         </li>
         <li class="nav-item col-6 nav-item-r">
            <a class="nav-link" id="data-exp-tab" data-toggle="tab" href="#data-exp" role="tab" aria-controls="data-exp" aria-selected="false">
                <h2>Past Projects</h2>
               <section class="row skillsTab">
                  <div class="col-md-2 skillsList">
                     <ul>
                        <li>C#/.NET</li>
                     </ul>
                  </div>
                  <div class="offset-md-1 col-md-4 skillsList">
                     <ul>
                        <li>Angular, SAAS</li>
                     </ul>
                  </div>
                  <div class="col-md-5 skillsList">
                     <ul>
                        <li>SQL, and more</li>
                     </ul>
                  </div>
               </section>
            </a>
         </li>
      </ul>

      <div class="tab-content" id="myTabContent">
         <div class="tab-pane fade show active" id="backend" role="tabpanel" aria-labelledby="backend-tab">
            <!--Serverside Content-->
            <?php buildPostExcerpt(array ( 0 => "recent")); ?>
         </div>
         <div class="tab-pane fade" id="data-exp" role="tabpanel" aria-labelledby="data-exp-tab">
            <!--Data Content-->
            <?php buildPostExcerpt(array ( 0 => "past")); ?>
         </div>
      </div>

   </div>


   <article class="bg-primaryDark">
    <aside class="container pt-3 tablet-90-width">
            <article class="row">
                <section class="col-lg-7 col-md-7 pr-0 row mt-3">
                        <h3 id="secondQuote" class="NotoFont text-white mt-3">Currently open to client-facing opportunities at a <span class="text-secondaryLight">mission-driven</span>
                          company <i class=""><small>(e.g. solutions architect, sales engineer).</small></i></h3>
                        <img id="xkcd" class="xkcd img-fluid d-none d-sm-none d-md-block mt-2" alt="Overthinking a system to pass arbitrary condiments when all the users wants is salt" title="xkcd comic about arbitrary code" src="<?php bloginfo('stylesheet_directory'); ?>/images/marioPink.png">
                         <p id="xkcdRef"><a class="text-right text-primaryLightGrey d-none d-sm-none d-md-block" href="https://daedtech.com/value-proposition-guidance-for-recovering-programming-generalists/" target="_blank">
                            <i>Source</i>
                            </a>
                        </p>
                </section>       

                <section class="col-lg-4 offset-lg-1 col-md-5 mb-3">
                    <section class="mt-4 mb-5">
                    <h1 class="text-uppercase page-banner text-primaryLightGrey">
                        <a target="_blank" href="/my-blogs/"> Blog Posts </a>
                    </h1>
                    <hr class="post-Portfolio" />
                    </section>
                    <?php createBlogList() ?>
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
                    <img class="mention-img offset-3 offset-md-2 img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/technically.png">
                </div>
                <div class="col-md-4">
                    <p class="mb-0">
                    <a href="https://www.sparkvisionnow.com/millennial-voices-sean-astrakhan/" target="_blank">
                    <i class="small fa fa-quote-left"></i>
                    Believes collaboration across generations can help businesses thrive and when egos are put aside
                    ...<span class="text-secondaryDark">read on</span><i class="small fa fa-quote-right"></i>
                    </p>
                    </a>
                    <img class="mention-img offset-3 offset-md-2 img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/sparkvision.png">
                </div>
                <div class="col-md-4">
                    <p class="mb-0">
                    <a href="https://www.osibaltimore.org/impact-series/baltimore-dance-crews-project/" target="_blank">
                    <i class="small fa fa-quote-left"></i>
                        a software engineer who started mentoring with BDCP in his free time, after seeing the group perform
                        ...<span class="text-secondaryDark">read on</span><i class="small fa fa-quote-right"></i>
                    </a>
                    </p>
                    <img class="mention-img offset-3 offset-md-2 img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/osi.png">
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
                                    <h4 class="pt-2 volunteerCardText" style=""><strong> <span class="d-sm-none d-none d-md">Project</span></strong></h4>
                                </div>
                                <!-- Card content -->
                                <div class="card-body card-body-cascade bg-primaryLightGrey">
                                    <!-- Title -->
                                    <h4 class="card-title">Baltimore Dance Crews Project</h4>
                                    <!-- Text -->
                                    <p class="card-text">
                                        Tutor students and perform hiphop dance to strengthen relationships to support youth from school to career.    
                                    </p>
                                </div>
                            </a>
                        </div>
                    </section>
                    <section class="col-md-6">
                        <div class="card card-cascade narrower mb-3">
                            <a href="http://www.codeforbaltimore.org/team/" target="_blank">
                                <div class="view view-cascade overlay code4bmore-image darken-overlay">
                                            <h3 class="pt-2 volunteerCardText"><strong></strong></h3>
                                    </div>
                                    <!-- Card content -->
                                    <div class="card-body card-body-cascade bg-primaryLightGrey">
                                        <!-- Title -->
                                            <h4 class="card-title">Code 4 Baltimore</h4>
                                        <!-- Text -->
                                        <p class="card-text">
                                            Volunteer on tech projects to create solutions that aid local government in data transparency.  
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
           echo       '<div class="col-lg-2 col-md-0 wrapper">';
           echo          '<img class="rounded-circle img-responsive circle d-lg-block d-md-none" src="' . $blogPost -> imgURL . '" alt="' . $blogPost -> imgAltText . '" title="' . $blogPost -> title . '">';
           echo       '</div>';
           echo       '<div class="offset-1 col-md-12 col-lg-9">';
           echo         '<a href="' . $blogPost -> link . '#">';
           echo           '<h4 class="card-title-shrink text-primaryVeryLight">' . $blogPost -> title . '</h4>';
           echo           '<p class="text-primaryLightGrey">' . $description_trimmed . '</p>';
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