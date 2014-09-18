<?php
/*
Template Name: Full Page Width  
*/

add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );   

add_filter( 'genesis_pre_get_option_comments_pages', 'sch_return_false' );

genesis();