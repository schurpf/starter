<?php 
// Dev tools
// Live reload 
if (WP_LOCAL_DEV){
	add_action('genesis_after_footer', 'sch_livereload' );
	function sch_livereload(){
		?>
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script> 
		<?php
	}
}