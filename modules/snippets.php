<?php
/*
External snippets without composer control, copy pasted 
 */

/**
 * Trims a string of words to a specified number of characters, gracefully stopping at white spaces.
 * Also strips HTML tags, to prevent breaking in the middle of a tag.
 *
 * @param   string $text  The string of words to be trimmed.
 * @param   int $length  Maximum number of characters; defaults to 45.
 * @param   string $append  String to append to end, when trimmed; defaults to ellipsis.
 *
 * @return  String of words trimmed at specified character length.
 *
 * @author c.bavota
 */
function trim_characters( $text, $length = 45, $append = '&hellip;' ) {

    $length = (int) $length;
    $text = trim( strip_tags( $text ) );

    if ( strlen( $text ) > $length ) {
        $text = substr( $text, 0, $length + 1 );
        $words = preg_split( "/[\s]|&nbsp;/", $text, -1, PREG_SPLIT_NO_EMPTY );
        preg_match( "/[\s]|&nbsp;/", $text, $lastchar, 0, $length );
        if ( empty( $lastchar ) )
            array_pop( $words );

        $text = implode( ' ', $words ) . $append;
    }

    return $text;
}

//Facebook Like Box, http://coolestguidesontheplanet.com/add-facebook-like-box-html5-style-genesis-child-theme-responsively/
function gee_facebook_like () {
    echo '<div id="fb-root"></div>
     <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=283009668452238";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, \'script\', \'facebook-jssdk\'));</script>';
}
 
add_action('genesis_before','gee_facebook_like');

/**
 * replace a @name with link to twitter name
 * @author Syed Balkhi
 * @url     http://www.wpbeginner.com/wp-tutorials/how-to-automatically-link-twitter-usernames-in-wordpress/
 * @version 1.0
 * @date    2014-07-03
 * @param   string             $content 
 * @return  string                      [
 */
function twtreplace($content) {
  $twtreplace = preg_replace('/([^a-zA-Z0-9-_&])@([0-9a-zA-Z_]+)/',"$1<a href=\"http://twitter.com/$2\" target=\"_blank\" rel=\"nofollow\">@$2</a>",$content);
  return $twtreplace;
}
add_filter('the_content', 'twtreplace');  
//For Comments props to Julien Maury
add_filter('comment_text', 'twtreplace');