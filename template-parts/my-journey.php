
<?php
/*
 * Template Name: sean-my-journey
 * The template for displaying all single posts and attachments
 * @package WordPress
 */
 
    get_header(); 
    
?>
<link rel="stylesheet" type="text/css" media="screen" />

    <div id="primary" class="content-area">
        <main id="my-journey" class="site-main" role="main">
            <!-- first section - Home -->
            <div id="home" class="home">
                <div class="text-vcenter">
                    <h1>Why did I quite teaching to purpose</h1>
                    <h1>a career in web-development?</h1>
                    <a href="#about" class="btn btn-default btn-lg">Continue</a>
                </div>
            </div>
            <!-- /first section -->

            <!-- second section - About -->
            <div id="about" class="pad-section">
            <div class="container">
                <div class="row">
                <div class="col-sm-4 offset-1">
                    <img src="<?php bloginfo('template_url'); ?>/images/journey/teaching.jpg" alt="" />
                </div>
                <div class="col-sm-6 text-center">
                    <h2>I started my career as a middle school teacher.</h2>
                    <p class="lead">It was fulfilling a fulfilling three years trying to create bilingual, critical-thinking, and compassionate 
                        global citizens.
                    One day as I watched the copy machine mechanically eject grammar worksheets, the soothing sound of scanned paper entranced 
                    me to note these perfect paper stacks are a metaphor for the monotony of my life.  
                    I knew in that moment I needed to make a change.  
                    Fortunately, I was wrapping up a Masters in English and took a writing faculty position for Missouri State University.  
                    </p>
                </div>
                </div>
            </div>
            </div>
            <!-- /second section -->

            <div id="china" class="home parralax">
                <div class="text-vcenter">
                    <h1>So I moved to china</h1>
                </div>
            </div>

            <!-- third section - Services -->
            <div class="pad-section">
                <div class="row text-center">
                    <div class="col-md-8 offset-md-2">
                        <i class="glyphicon glyphicon-cloud"> </i>
                        <h2>And I kinda hated it</h4>
                        <h4>
                            It was a miserable first month and that had nothing to do with the language barrier, smog filled streets, 
                            oily food, and the fact the closest beach was in North Korea.           
                        </h4>
                        <h4>                         
                            Up to that point I never had to figure out what I wanted my life's work to be.  
                            Suddenly my attitude of "I'll just do this job for now" finally caught up to me.
                            Back home there were always distractions keeping me from addressing this question and now there was nothing - except
                            the overwhelming feeling about purposelessness.  
                        </h4>
                        <p>人山人海 ren shan ren hai (People Mountain People Sea) - a chinese proverb referring to the huge population and how 
                            I felt about my current predicament. </p>
                    </div>
                </div>
            </div>
            <!-- /third section -->

            <!-- third section - Services -->
            <div id="services" class="pad-section">
            <div class="container">
                <h2 class="text-center">And I kinda hated it</h2> <hr />
                <div class="row text-center">
                <div class="col-md-4">
                    <div class="col-8 offset-1">
                        <img class="rounded-circle" src="<?php bloginfo('template_url'); ?>/images/journey/sadchina.jpg" alt="" />
                    </div>
                    <h4>It was a miserable first month and that had nothing to do with the language barrier, smog filled streets, 
                            oily food, and the fact the closest beach was in North Korea. </h4>
                </div>
                <div class="col-md-4">
                    <div class="col-8 offset-1">
                        <img class="rounded-circle" src="<?php bloginfo('template_url'); ?>/images/journey/sadsad.jpg" alt="" />
                    </div>
                    <h4>Up to that point I never had to figure out what I wanted my life's work to be.  
                        Suddenly my attitude of "I'll just do this job for now" finally caught up to me.</h4>
                </div>
                <div class="col-md-4">
                    <i class="glyphicon glyphicon-phone-alt"> </i>
                    <h4>Back home there were always distractions keeping me from addressing this question and now there was nothing - except
                            the overwhelming feeling of purposelessness.  </h4>
                </div>
                </div>
                <div class="">
                    <p>人山人海 ren shan ren hai (People Mountain People Sea) - a chinese proverb referring to the huge population and how 
                            I felt about my current predicament.</p>
                </div>
            </div>
            </div>
            <!-- /third section -->

            <!-- fourth section - Information -->
            <div id="information" class="pad-section">
            <div class="container">
                <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Additional information</h2>
                    </div>
                    <div class="panel-body lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit adipiscing blandit. Aliquam placerat, velit a fermentum fermentum, mi felis vehicula justo, a dapibus quam augue non massa. Duis euismod, augue et tempus consequat, lorem mauris porttitor quam, consequat ultricies mauris mi a metus. Phasellus congue, leo sed ultricies tristique, nunc libero tempor ligula, at varius mi nibh in nisi. Aliquam erat volutpat. Maecenas rhoncus, neque facilisis rhoncus tempus, elit ligula varius dui, quis amet.
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Additional information</h2>
                    </div>
                    <div class="panel-body lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit adipiscing blandit. Aliquam placerat, velit a fermentum fermentum, mi felis vehicula justo, a dapibus quam augue non massa. Duis euismod, augue et tempus consequat, lorem mauris porttitor quam, consequat ultricies mauris mi a metus. Phasellus congue, leo sed ultricies tristique, nunc libero tempor ligula, at varius mi nibh in nisi. Aliquam erat volutpat. Maecenas rhoncus, neque facilisis rhoncus tempus, elit ligula varius dui, quis amet.
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <!-- /fourth section -->
 
        </main><!-- .site-main -->
    </div><!-- .content-area -->
 
<?php get_footer(); ?>