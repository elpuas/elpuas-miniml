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
    wp_enqueue_style( 'elpuas-google-fonts', 'https://fonts.googleapis.com/css?family=Anton', false );
}

add_action( 'wp_enqueue_scripts', 'elpuas_enqueue_fonts' );

/*
 * Add Font Awesome 
 */

function elpuas_enqueue_icons(){
    wp_enqueue_style( 'elpuas-fa-icons',  get_template_directory_uri() . '/assets/css/fontawesome.min.css', get_the_time('U') );
    // wp_enqueue_script( 'elpuas-fa-icons',  get_template_directory_uri() . '/assets/js/fontawesome.min.js', true );
}

add_action( 'wp_enqueue_scripts', 'elpuas_enqueue_icons' );

/*
 * Replace Site Info Credits 
 */

add_filter('footer_credits', 'elpuas_footer_creds_filter');

function elpuas_footer_creds_filter(  ) {
	echo  '<ul>
    <li>
        <a href="#"><i class="fab fa-github"></i></a>
    </li>
    <li>
        <a href="#"><i class="fab fa-wordpress"></i></a>
    </li>
    <li>
        <a href="#"><i class="fab fa-wordpress"></i></a>
    </li>
</ul>';
	
}

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function elpuas_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( ' Read More', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'elpuas_excerpt_more' );

