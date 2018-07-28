<?php

/*
* My Shit
*/

/**
* Add SVG Support
*/
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');
  
  
  /**
  * Page Slug Body Class
  */
  function add_slug_body_class( $classes ) {
      global $post;
      if ( isset( $post ) ) {
      $classes[] = $post->post_type . '-' . $post->post_name;
      }
      return $classes;
      }
      add_filter( 'body_class', 'add_slug_body_class' );

/*
* Admin footer modification
*/
function remove_footer_admin ()
{
    echo '<span id="footer-thankyou">Developed by <a href="https://www.elpuas.com" target="_blank">el.puas();</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');


/*
 *  Enqueue fonts
 */

function elpuas_enqueue_fonts(){
    wp_enqueue_style( 'greenroom-google-fonts', 'https://fonts.googleapis.com/css?family=Passion+One:700', false );
}

add_action( 'wp_enqueue_scripts', 'elpuas_enqueue_fonts' );