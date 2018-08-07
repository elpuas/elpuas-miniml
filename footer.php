<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elpuas
 */

?>
     <?php if( !is_front_page() ) : ?>
		 <div class="socialMe"><i class="fas fa-bullhorn"></i></div>
	<?php   else :
		  // Do Nothing
	endif; ?>
		<footer id="colophon" class="site-footer">
		<div class="site-info">
			<ul>
				<li>
					<a href="https://twitter.com/3lpu4s" target="_blank"><i class="fab fa-twitter"></i></a>
				</li>
				
				<li>
					<a href="https://github.com/elpuas" target="_blank"><i class="fab fa-github"></i></a>
				</li>
				<li>
					<a href="https://profiles.wordpress.org/elpuas/" target="_blank"><i class="fab fa-wordpress"></i></a>
				</li>
			
			</ul>
			<!--
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'elpuas' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf( esc_html__( 'Proudly powered by %s', 'elpuas' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'elpuas' ), 'elpuas', '<a href="https://elpuas.com">elpuas</a>' );
				?>
			-->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
