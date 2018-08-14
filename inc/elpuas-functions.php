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

/**
 *	Loads an alternate stylesheet, rather than the default style.css required by WordPress
 *	This does not replace the requirement of including a style.css in your theme
 *
 *	@author Ren Ventura <EngageWP.com>
 *	@link http://www.engagewp.com/load-minified-stylesheet-without-theme-header-wordpress
 *
 *	@param (string) $stylesheet_uri - Stylesheet URI for the current theme/child theme
 *	@param (string) $stylesheet_dir_uri - Stylesheet directory URI for the current theme/child theme
 *	@return (string) Path to alternate stylesheet
 */

add_filter( 'stylesheet_uri', 'elpuas_load_alternate_stylesheet', 10, 2 );

function elpuas_load_alternate_stylesheet( $stylesheet_uri, $stylesheet_dir_uri ) {

	// Make sure this URI path is correct for your file
    return trailingslashit( $stylesheet_dir_uri ) . 'style.min.css';
    
}

/*
 * Remove Query Strings From Static Resources
 */


function elpuas_remove_script_version( $src ){ 

        $parts = explode( '?', $src ); 	
        return $parts[0]; 
    } 

    add_filter( 'script_loader_src', 'elpuas_remove_script_version', 15, 1 ); 

    add_filter( 'style_loader_src', 'elpuas_remove_script_version', 15, 1 );


/**
 * Registers an editor stylesheet for the Theme Dashboard.
 */

function my_admin_theme_style() {

    wp_enqueue_style('my-admin-style', get_template_directory_uri() . '/elpuas-editor-style.css');
}

add_action('admin_enqueue_scripts', 'my_admin_theme_style');

/**
* Ad Custom Styles to Login Form
*/

function elpuas_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/elpuas-editor-style.css' );
}
add_action( 'login_enqueue_scripts', 'elpuas_stylesheet' );


/*
 * Gutenberg Ready
*/

add_theme_support( 'align-wide' );

/*
 * Enqueue block editor style
 */

function elpuas_block_editor_styles() {
    
    wp_enqueue_style( 'elpuas-block-editor-styles', get_theme_file_uri( '/elpuas-editor-style.css' ), false, '1.0', 'all' );
}

add_action( 'enqueue_block_editor_assets', 'elpuas_block_editor_styles' );

