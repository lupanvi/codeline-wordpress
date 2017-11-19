<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'unite-bootstrap','unite-icons' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

function the_content_films_index( $content) {
	
	if ( is_post_type_archive('films') ) {
		echo '<p>' . $content . '</p>';
	    echo '<p>' . the_terms( get_the_ID(), 'country', 'Country: ', ', ', ' ' ) .'</p>';			
	    echo '<p>' . the_terms( get_the_ID(), 'genre', 'Genres: ', ', ', ' ' ) . '</p>';
		echo '<p> Ticket Price: ' . get_field('ticket_price', get_the_ID()) .'</p>';
		echo '<p> Release date: ' . get_field('release_date', get_the_ID()) . '</p>';	
	}else{
		echo '<p>' . $content . '</p>';
	}
    
}

add_action( 'the_content', 'the_content_films_index' );


function display_films_post_type(){
    $args = array(
        'post_type' => 'films',
        'post_status' => 'publish',
        'posts_per_page'   => 5,
        'order' => 'DESC'        
    );

    $string = '<h3>Last films</h3>';
    $query = new WP_Query( $args );
    if( $query->have_posts() ){
        $string .= '<ul>';
        while( $query->have_posts() ){
            $query->the_post();
            $string .= '<li><a href="'.esc_url(get_the_permalink()).'">' . get_the_title() . '</a>' . '</li>';
        }
        $string .= '</ul>';
    }
    wp_reset_postdata();
    return $string;
}

add_shortcode( 'films_last_five', 'display_films_post_type' );