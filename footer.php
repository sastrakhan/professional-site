<?php
    function bootstrapstarter_wp_setup() {
        add_theme_support( 'title-tag' );
    }
    
    add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );
?>

<br />
<footer class="bg-primaryLight">
    <summary class="container">
        <div class="row">   
            <div class="col-md-6 pb-5">
                <h6 class="font-weight-bold mt-4 text-white">CONTACT</h6>
                <hr class="contactFormLine">
                <h5 class="font-weight-light mt-2"> sastrakhan@gmail.com</h5>
                <a href="https://www.github.com/sastrakhan?tab=stars" target="_blank"><span class="fa fa-2x fa-github"></span></a>
                <a href="https://www.linkedin.com/in/sean-astrakhan-4261b272" target="_blank"><span class="fa fa-2x fa-linkedin"></span></a>
            </div> 
            <div class="col-md-6">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading"> 
                            <h5 class="text-primaryDark mt-3 text-center">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" id="predict">
                                    <i class="fa fa-plus-circle"></i> Contact Form
                                </a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body in">
                                <?php echo do_shortcode('[contact-form-7 id="97" title="Footer Form"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                            <button id="contactFormBtn" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Contact Form
                            </button>
                            </h5>
                        </div>
                    
                        <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <?php echo do_shortcode('[contact-form-7 id="97" title="Footer Form"]'); ?>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div> 
        <div>
    </summary>

       
</footer><!-- #colophon -->


