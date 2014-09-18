<?php
/*----------------------------------------------------------------------------------*/
/*------------------ Boxes ----------------*/
/*----------------------------------------------------------------------------------*/
/**
 * add [box] shortcode to wp, replace WOOThemes box feature
 * @author schurpf
 * @url     http://schurpf.com
 * @version 1.0
 * @date    2014-07-03
 * @param   array             $atts    
 * @param   string             $content 
 * @return  string                      
 */
function sch_box( $atts, $content = null) {
    extract(shortcode_atts( array(
        'type' => 'info'
    ), $atts ));

    switch ($type) {
      case 'info':
        $type_class = "alert-info";
        break;

      case 'tick':
      case 'success':
        $type_class = "alert-success";
        break;

      case 'warning':
        $type_class = "alert-warning";

      case 'danger':
        $type_class = "alert-danger";

      default:
        $type_class = "alert-info";
        break;
    }

    return '<div class="alert '.$type_class.'" role="alert">'.$content.'</div>';;
}
add_shortcode( 'box', 'sch_box' );