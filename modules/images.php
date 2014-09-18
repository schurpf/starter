<?php 
/*
All functions related to images 
 */

// Favicon
add_filter( 'genesis_pre_load_favicon', 'sp_favicon_filter' );
function sp_favicon_filter( $favicon_url ) {
  return get_stylesheet_directory_uri().'/img/favicon.ico';
}

// Add new image sizes, use https://wordpress.org/plugins/regenerate-thumbnails/
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'homepage-thumb', 300, 300, true ); //(cropped)
}

/**
 * Return markup for an image wraped in ihover effects
 * @author 	   schurpf
 * @url        http://schurpf.com
 * @version    0.0.0
 * @date       2014-09-17
 * @dependency ihover.css, wp image size: portfolio
 * @param      int             	  $img_id       wp image id
 * @param      string             $heading      heading for image overlay
 * @param      string             $description  description for image overlay
 * @param      string             $link         
 * @param      string             $effect_class classes to append, see ihover docs for other effects
 * @return     html                           
 */
function get_ihover_img($img_id, $heading='heading here', $description='description here', $link='#', $effect_class='square effect13 left_to_right'){
  global $post;
  $img_src_desktop = wp_get_attachment_image_src( $img_id, 'portfolio');
  $out = '<div class="ih-item '.$effect_class.'"><a href="'.$link.'">
        <div class="img"><img src="'.$img_src_desktop[0].'" alt="'.$post->post_title.'"></div>
        <div class="info">
          <h3>'.$heading.'</h3>
          <p>'.$description.'</p>
        </div></a></div>';
  return $out;
}