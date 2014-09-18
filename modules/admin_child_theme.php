<?php
// Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'schurpf' );
define( 'CHILD_THEME_URL', 'http://schurpf.com' );
define( 'CHILD_THEME_VERSION', '1.0' );

// Add HTML5 markup structure
add_theme_support( 'html5' );

// Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

// Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

// Remove Gensis Admin Menu (http://genesistutorials.com/define-genesis-default-options/)
remove_theme_support( 'genesis-admin-menu' );

// Set options due to removed admin menu, callbacks in helper_functions.php
add_filter( 'genesis_pre_get_option_trackbacks_pages', 'sch_return_true' );
add_filter( 'genesis_pre_get_option_comments_pages', 'sch_return_true' );
add_filter( 'genesis_pre_get_option_comments_posts', 'sch_return_true' );
add_filter('genesis_pre_get_option_posts_nav', 'sch_posts_nav_numeric' );



