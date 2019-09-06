<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Duch_Swiety
 */

get_header();
?>

<section class="error-404 not-found">
	<div class="container-fluid">
		<div class="row" id="primary">
            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 ml-5 mr-3 mt-3">
				<div class="entry-content">
					<main id="content" role="main">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Taka strona nie istnieje.', 'duchswiety' ); ?></h1>
						</header><!-- .page-header -->
						<div class="page-content">
							<p><?php esc_html_e( 'Wygląda na to, że nic nie znaleźli.', 'duchswiety' ); ?></p>

							<?php
							// get_search_form();

							// the_widget( 'WP_Widget_Recent_Posts' );
							?>

							<!-- <div class="widget widget_categories">
								<h2 class="widget-title"><?php esc_html_e( 'Najczęściej Używane Kategorie', 'duchswiety' ); ?></h2>
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
							</div> -->

							<?php
							/* translators: %1$s: smiley */
							// $duchswiety_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'duchswiety' ), convert_smilies( ':)' ) ) . '</p>';
							// the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$duchswiety_archive_content" );

							// the_widget( 'WP_Widget_Tag_Cloud' );
							?>
						</div><!-- .page-content -->
					</main>
				</div>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-3"> 
				<div class="entry-content">
					<?php
						get_sidebar();
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
