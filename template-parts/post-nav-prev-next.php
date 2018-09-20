
<?php
    function sean_the_post_navigation( $args = array() ) {
        $args = wp_parse_args( $args, array(
            'prev_text'          => '<span class="nav-previous"><i class="fa fa-arrow-circle-left"></i> Previous:</span> <i>%title.</i>',
            'next_text'          => '<i>%title.</i> <span class="nav-next"> Next: <i class="fa fa-arrow-circle-right secondaryLight"></i>',
            'in_same_term'       => true,
            // 'excluded_terms'     => '',
            // 'taxonomy'           => 'category',
            //  'screen_reader_text' => __( 'Post Nnavigation' )
        ) );

        $navigation = '';

        $previous = get_previous_post_link(
            '<div>%link</div>',
            $args['prev_text'],
            $args['in_same_term']//,
            // $args['excluded_terms'],
            // $args['taxonomy']
        );

        $next = get_next_post_link(
            '<div class="">%link</div>',
            $args['next_text'],
            $args['in_same_term']//,
            // $args['excluded_terms'],
            // $args['taxonomy']
        );

        // Only add markup if there's somewhere to navigate to.
        if ( $previous || $next ) {
            $navigation = _navigation_markup( $previous . $next, 'post-navigation-heading', $screen_reader_text = 'NAVIGATION' );
        }

        return $navigation;
    }

    //Used above previously in next_text to get blog infor
    //'next_text'          => 'Next: %title <img src="'.get_bloginfo('stylesheet_directory').'/img/blue-arrow.png" class="arrow" />',

?>


