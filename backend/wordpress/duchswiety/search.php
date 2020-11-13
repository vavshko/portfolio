<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Duch_Swiety
 */

get_header();
?>

<section id="primary" class="content-area">
		
	<div class="container-fluid">
		<div class="row" id="primary">
			<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 ml-5 mr-3 mt-3">
				<main id="main" class="site-main">
				<?php if ( have_posts() ) : ?>
					<h2 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Wyniki wyszukiwania dla: %s', 'duchswiety' ), '<span>' . get_search_query() . '</span>' );
				?>
					</h2>
				<header class="page-header">
				
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );

				endwhile;

				the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>			
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
	</main><!-- #main -->
</section><!-- #primary -->

<?php
// get_sidebar();
get_footer();
