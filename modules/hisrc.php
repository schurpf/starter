<?php
/*
All functions related to hisrc functionality and processing 
 */

/**
 * return hisrc marked up thumbnail image based on post id
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
function get_hisrc_img_thumb($post, $width_mobile='200', $height_mobile='200'){
  $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
  return get_hisrc_img($post_thumbnail_id, get_permalink( $post->ID ), $width_mobile, $height_mobile);
}

/**
 * Get portfolio image marked up in HISRC markup
 *
 * @param string  $link          url
 * @param string  $width_mobile  number
 * @param string  $height_mobile number
 * @return string                html
 */
function get_hisrc_img_portfolio( $link='', $width_mobile='200', $height_mobile='200' ) {
  global $post;
  $img_id = get_field( 'portfolio_image', $post->ID );
  return get_hisrc_img( $img_id, $link, $width_mobile, $height_mobile );
}

/**
 * return an image from attachment ID wrapped in HISRC markup
 *
 * @param string  $link          url
 * @param string  $width_mobile  number
 * @param string  $height_mobile numer
 * @return string                html image
 */
function get_hisrc_img( $img_id, $link='', $width_mobile='200', $height_mobile='200', $hisrc_class='' ) {
    // global $post;
  $out = '';
  if ( $img_id !='' ) {
    $img_src_mobile = wp_get_attachment_image_src( $img_id, array( $width_mobile, $height_mobile ) );
    $img_src_desktop = wp_get_attachment_image_src( $img_id, 'portfolio');
    $out .= '<div class="hisrc">';
    if ( $link != '' ) {
      $out .= '<a href="'.$link.'"><img class="'.$hisrc_class.'" src="'.$img_src_mobile[0].'" width="'.$width_mobile.'" height="'.$height_mobile.'"
              data-1x="'.$img_src_desktop[0].'" alt="'.$post->post_title.'" /></a>';
    } else {
      $out .= '<img class="'.$hisrc_class.'" src="'.$img_src_mobile[0].'" width="'.$width_mobile.'" height="'.$height_mobile.'"
              data-1x="'.$img_src_desktop[0].'" alt="'.$post->post_title.'" />';
    }
    $out .= '</div>';
  }
  return $out;
}
