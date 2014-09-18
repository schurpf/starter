<?php
// Start the Genesis engine. DO NOT REMOVE.
include_once get_template_directory() . '/lib/init.php';

// Include developer modules, needs WP_LOCAL_DEV set
include_once get_stylesheet_directory() . '/modules/dev.php';

// General Genesis Child Theme Declarations
include_once get_stylesheet_directory() . '/modules/admin_child_theme.php';

// Functions related to images 
include_once get_stylesheet_directory() . '/modules/images.php';

// Hisrc functionality 
include_once get_stylesheet_directory() . '/modules/hisrc.php';

// Register global styles and scripts
include_once get_stylesheet_directory() . '/modules/register.php';

// Navigation with Bootstrap 
include_once get_stylesheet_directory() . '/modules/nav.php';

// CPT and ACF 
include_once get_stylesheet_directory() . '/modules/cpt_acf.php';

// Reusable content blocks
include_once get_stylesheet_directory() . '/modules/blocks.php';

// Footer content
include_once get_stylesheet_directory() . '/modules/footer.php';

// Snippets
include_once get_stylesheet_directory() . '/modules/snippets.php';

// Notifications 
include_once get_stylesheet_directory() . '/modules/notifications.php';