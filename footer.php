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
            <div class="col-md-6">
                <h3> sastrakhan@gmail.com</h3>
                <a href="https://www.github.com/sastrakhan?tab=stars" target="_blank"><span class="fa fa-2x fa-github"></span></a>
                <a href="https://www.linkedin.com/in/sean-astrakhan-4261b272" target="_blank"><span class="fa fa-2x fa-linkedin"></span></a>
            </div> 
            <div class="col-md-6">
                <h6 class="text-white font-weight-bold mt-2">Say hi!</h6>
                <hr class="contactFormLine">
                <?php echo do_shortcode('[contact-form-7 id="97" title="Footer Form"]'); ?>
            </div> 
        <div>
    </summary>
</footer><!-- #colophon -->



