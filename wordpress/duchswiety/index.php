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
 * @package Duch_Swiety
 */

$img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full');
$title = get_the_title((get_option('page_for_posts')),'full');
$blog_page_image = $img[0];

// $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ;
get_header();
?>

<?php if (is_home() && get_option('page_for_posts') && wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full') ) { ?>

	<header class="entry-header">
		<section id="block-feature-image">
			<div class="container-fluid">
				<div class="row h-100 justify-content-center align-items-center">
					<div class="col-12 pl-0 pr-0 ">

						<div data-jarallax data-speed="0.2" class="jarallax">
						<img src="<?echo $blog_page_image;?>" class="jarallax-img">
						<h1 class="blog-title"><?echo $title;?></h1>
						</div>
					</div>	
				</div>	
			</div>
		</section> 
	</header>

	<?php } else { ?> 

	<header class="entry-header">
		<section id="block-feature-image">
			<div class="container-fluid">
				<div class="row h-100 justify-content-center align-items-center">
					<div class="col-12 pl-0 pr-0 ">

						<h1 class="blog-title-none"><?echo $title;?></h1>
						 
					</div>	
				</div>	
			</div>
		</section> 
	</header>

<?php };?>

<!-- BLOG -->
<section id="block-blog" class=" ">
	<div class="container-fluid">
		<div class="row" id="primary">
            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 ml-5 mr-3 mt-3">
				<div class="entry-content">
					<main id="content" role="main">
						<?php
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) :
								?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
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
								get_template_part( 'template-parts/content-blog', get_post_type() );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
					?>
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
	</div>
</section>

<?php

get_footer();
