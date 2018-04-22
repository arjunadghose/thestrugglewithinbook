<?php 

function tswb_add_excerpts_to_posts() {
     add_post_type_support( 'post', 'excerpt' );
}

add_action( 'init', 'tswb_add_excerpts_to_posts' );

function exclude_category( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'cat', '99' );
    }
}
add_action( 'pre_get_posts', 'exclude_category' );