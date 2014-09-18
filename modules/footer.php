<?php
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'sch_footer' );

function sch_footer() { 
//custom footer here 
}

