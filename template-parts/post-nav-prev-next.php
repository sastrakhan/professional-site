
<?php
    function sean_the_post_navigation( $args = array() ) {
        $args = wp_parse_args( $args, array(
            'prev_text'          => '<h4><i class="fa fa-lg fa-arrow-circle-left"></i> Previous:
                                        <span class="text-primaryDark"><i>%title.</i>
                                    </span></h4>',
            'next_text'          => '<h4><span class="text-primaryDark">
                                        <i>%title.</i>
                                    </span> Next: <i class="fa fa-lg fa-arrow-circle-right secondaryLight"></i></h4>',
            'in_same_term'       => true,
            // 'excluded_terms'     => '',
            // 'taxonomy'           => 'category',
            //  'screen_reader_text' => __( 'Post Nnavigation' )
        ) );

        $navigation = '';

        $previous = get_previous_post_link(
            '<div class="nav-previous">%link</div>',
            $args['prev_text'],
            $args['in_same_term']//,
            // $args['excluded_terms'],
            // $args['taxonomy']
        );

        $next = get_next_post_link(
            '<div class="nav-next">%link</div>',
            $args['next_text'],
            $args['in_same_term']//,
            // $args['excluded_terms'],
            // $args['taxonomy']
        );

        // Only add markup if there's somewhere to navigate to.
        if ( $previous || $next ) {  //post-navigation-heading 
            $navigation = _navigation_markup( $previous . $next, 'container', $screen_reader_text = 'Navigation' );
        }

        return $navigation;
    }

    //Used above previously in next_text to get blog infor
    //'next_text'          => 'Next: %title <img src="'.get_bloginfo('stylesheet_directory').'/img/blue-arrow.png" class="arrow" />',

?>


