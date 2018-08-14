<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package elpuas
 */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'elpuas' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or just listen to one of my Spotify playlists?', 'elpuas' ); ?></p>
					<ul class="playlist-spotify">
						<li>
							<iframe src="https://open.spotify.com/embed/user/alfredo.navas/playlist/6kkrSVxKD9wgLhaxFiQd5E" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
						</li>
						<li>
							<iframe src="https://open.spotify.com/embed/user/alfredo.navas/playlist/4uR3swviDYzKZGWP1bb3US" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
						</li>
						<li>
						<iframe src="https://open.spotify.com/embed/user/alfredo.navas/playlist/6WkG1vLY6na3aJTcCEOCCo" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
						</li>
					</ul>

					<?php
					// get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'elpuas' ); ?></h2>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$elpuas_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'elpuas' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$elpuas_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
the_custom_logo();

get_template_part( 'template-parts/navigation' );

get_footer();

// get_sidebar();
