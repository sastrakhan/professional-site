<?php
    function bootstrapstarter_wp_setup() {
        add_theme_support( 'title-tag' );
    }
    
    add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );
?>

<br />
<footer style="background: pink">
    <div class="container">    
        <h3>Footer?</h3>
    <div>
</footer><!-- #colophon -->