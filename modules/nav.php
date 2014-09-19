<?php
//Bootstrap  navigation
require_once __DIR__.'/../vendorphp/twittem/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php';
remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_after_header', 'genesis_do_subnav' );

// Header Nav
remove_action( 'genesis_header', 'genesis_do_header' );

add_action( 'genesis_header', 'sch_do_nav' );
function sch_do_nav(  ) {
?>
<nav class="navbar" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="wrap">
        <div class="navbar-header">
            <a class="navbar-brand logo" href="<?php bloginfo( 'url' ); ?>">
                <?php bloginfo( 'name' ); ?>
            </a>
        </div>

        <?php
    wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker() )
    );
?>
    </div>
</nav>
<?php
}

/** Remove Title & Description */
remove_action( 'genesis_site_title', 'genesis_seo_site_title' );
remove_action( 'genesis_site_description', 'genesis_seo_site_description' );
