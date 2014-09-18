<?php
// Force full width page layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

//* Remove comment form allowed tags
add_filter( 'comment_form_defaults', 'sp_remove_comment_form_allowed_tags' );
function sp_remove_comment_form_allowed_tags( $defaults ) {
 
  $defaults['comment_notes_after'] = '';
  return $defaults;
}

genesis();
?>