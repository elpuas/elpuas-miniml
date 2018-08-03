<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elpuas
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :

			the_post_thumbnail('large');

			the_title( '<h1 class="entry-title">', '</h1>' );

			if ( 'post' === get_post_type() ) : ?>

				<div class="entry-meta">

					<?php

					elpuas_posted_on();

					elpuas_posted_by();

					?>
				</div><!-- .entry-meta -->
				
		<?php
		else :
			
		endif; ?>

		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php

		if ( is_singular() ) :

		the_content( sprintf(
			
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'elpuas' ),

				array(

					'span' => array(

						'class' => array(),
					),
				)
			),

			get_the_title()
		) );

		else : ?>

		<div class="elpuas__blogpost" style="background:url(<?php the_post_thumbnail_url('large'); ?> )">

		<?php

		// elpuas_post_thumbnail();

		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

		elpuas_posted_on();

		the_excerpt( sprintf(

			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'elpuas' ),

				array(
					'span' => array(
						'class' => array(),
					),
				)
			),

			 get_the_title()

		) ); ?>

		</div> 

		<?php endif; 

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elpuas' ),
			'after'  => '</div>',
		) );

		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
		<?php // elpuas_entry_footer(); ?>

	</footer><!-- .entry-footer -->
	
</article><!-- #post-<?php the_ID(); ?> -->
