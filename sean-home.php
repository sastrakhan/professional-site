<?php /* Template Name: sean-home */ ?>
<?php get_header(); ?>
 
<div id="primary" class="content-area row-m-t">
    <main id="main" class="site-main" role="main">
        <h3>My home page</h3>
    </main><!-- .site-main -->

    <button type="button" class="btn btn-info">Resume</button>
        
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <div class="nav-link active" aria-selected="true" id="backend-tab" data-toggle="tab" href="#backend" role="tab" aria-controls="home">
                    <div>
                        <h2>Back End</h2>
                        <ul>
                            <li>.Net Core</li>
                            <li>PHP</li>
                            <li>Java Yeah right</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item">
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
            <li class="nav-item">
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
            <li class="nav-item">
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

      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="backend" role="tabpanel" aria-labelledby="backend-tab">
        <?php
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
                                $post_description = get_the_excerpt();
                                $rtest = get_the_permalink();
                                $post_URL = '<a href="' . $rtest . '#">Read more</a>';

                                $description_trimmed = mb_strimwidth($post_description, 0, 50, '...');
                                //var_dump($post_trimmed);
                                echo '<li>' . $description_trimmed . $post_URL . '</li>';
                            }
                        echo '</ul>';
                    }
        ?>
        </div>
        <div class="tab-pane fade" id="js" role="tabpanel" aria-labelledby="js-tab">.Javasripty Stuffs..

        </div>
        <div class="tab-pane fade" id="data-exp" role="tabpanel" aria-labelledby="data-exp-tab">.My data stuff..

        </div>
        <div class="tab-pane fade" id="saas-exp" role="tabpanel" aria-labelledby="saas-exp-tab">.My saas stuff..

        </div>
      </div>

        
 
</div>
 
<?php 
    //dynamic_sidebar('smartslider_area_1');  //Shows blogs wtf   
    get_footer(); 
?>

