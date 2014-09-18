<?php

/*----------------------------------------------------------------------------------*/
/*------------------ Temporary Notification ----------------*/
/*----------------------------------------------------------------------------------*/

// add_action('genesis_entry_content', 'sch_custom_notification', 1);
// add_action('genesis_before_footer', 'sch_custom_notification');
// add_action('genesis_before_comments','sch_custom_notification');

//remove filter in template-full_width.php

function sch_custom_notification(){
  ?>
    <div class="alert alert-danger" role="alert">Some alert message. <a href="#" class="btn btn-success btn-large">Button</a></div>
  <?php
}



