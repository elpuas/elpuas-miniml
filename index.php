<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elpuas
 */
get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
		<?php
		if ( is_front_page() && ! is_home() ) :

			echo '<div class="elpuas__intro-nav-menu">' . wp_nav_menu() . '</div>';
			
			echo wp_footer();

			endif;
		?>	
	</div><!-- #primary -->
<?php
if ( is_front_page() && ! is_home() ) :

		echo '<div class="elpuas__intro-block">' . get_custom_logo() . '</div>';

	 else :

		echo '</div><!-- #content -->';
		
		the_custom_logo();

		include( 'template-parts/navigation.php' );

		// get_sidebar();

		get_footer();

	endif;
