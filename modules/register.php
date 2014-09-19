<?php 
// Register JS and CSS globally
add_action( 'wp_enqueue_scripts', 'sch_enque_scripts' );
function sch_enque_scripts() {

    wp_register_style('sch_animate', get_stylesheet_directory_uri() . '/vendor/animate.css/animate.min.css'  );
    wp_register_style('sch_ihover', get_stylesheet_directory_uri() . '/vendor/ihover/src/ihover.min.css'  );

    
    wp_register_script( 'sch_js', get_stylesheet_directory_uri() . '/js/sch_custom.js', array( 'jquery' ), '', true );
    
    wp_register_script( 'sch_hisrc', get_stylesheet_directory_uri() . '/vendor/hisrc/hisrc.js', array( 'jquery' ), '', true );
    
    wp_register_script( 'sch_viewportchecker', get_stylesheet_directory_uri() . '/vendor/jquery-viewport-checker/jquery.viewportchecker.js', array( 'jquery' ), '', true );

    wp_register_script( 'sch_sticky', get_stylesheet_directory_uri() . '/vendor/sticky-kit/jquery.sticky-kit.min.js', array( 'jquery' ), '', true );

    // wp_register_script( 'sch_js', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js' );
    wp_register_script( 'sch_js_transition', get_stylesheet_directory_uri() . '/vendor/bootstrap-sass/assets/javascripts/bootstrap/transition.js' );
    wp_register_script( 'sch_js_collapse', get_stylesheet_directory_uri() . '/vendor/bootstrap-sass/assets/javascripts/bootstrap/collapse.js' );
    wp_register_script( 'sch_js_dropdown', get_stylesheet_directory_uri() . '/vendor/bootstrap-sass/assets/javascripts/bootstrap/dropdown.js' );

    wp_enqueue_style('sch_animate' );
    wp_enqueue_style('sch_ihover' );

    wp_enqueue_script( 'sch_hisrc');
    wp_enqueue_script( 'sch_js');
    wp_enqueue_script( 'sch_viewportchecker');
    wp_enqueue_script( 'sch_sticky' );

    // wp_enqueue_script( 'sch_js');
    wp_enqueue_script( 'sch_js_transition');
    wp_enqueue_script( 'sch_js_collapse');
    wp_enqueue_script( 'sch_js_dropdown');

}