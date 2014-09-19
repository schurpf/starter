<?php

//Temporary add in CPT (needs to go in plugin later)
// define( 'ACF_LITE', true );
include_once __DIR__.'/../vendorphp/advanced-custom-fields/acf.php';

/*----------------------------------------------------------------------------------*/
/*------------------ CPT ----------------*/
/*----------------------------------------------------------------------------------*/

// add_action( 'init', 'sch_create_cpt' );

function sch_create_cpt() {

    $labels = array(
        'name' => __( 'CPT_NAME' ),
        'singular_name' => __( 'CPT_NAME' )
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array( 'slug' => 'cpt_name' )
    );

    register_post_type( 'cpt_name', $args );
}
