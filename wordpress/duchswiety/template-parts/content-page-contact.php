<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Duch_Swiety
 */
$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
<?php if( has_post_thumbnail() ) { ?>

<header class="entry-header">
	<section id="block-feature-image">
		<div class="container-fluid">
			<div class="row h-100 justify-content-center align-items-center">
				<div class="col-12 pl-0 pr-0 ">
					<div data-jarallax data-speed="0.2" class="jarallax">
			
						<img src="<?php echo $thumbnail_url; ?>" class="jarallax-img">
						<h2 class="top-image-text-default"><?php the_title(); ?></h2>

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
				 
					<h2 class="top-image-text-default-none"><?php the_title(); ?></h2>

				</div>	
			</div>	
		</div>
	</section> 
</header>

<?php } ?>

<section id="block-page" class=" ">
	<div class="container-fluid">
		<div class="row">
            <div class="col-8 mx-auto">
                <div class="entry-content">
                    <?php
                    the_content();
                    ?>
		        </div>
	        </div>
		</div>
	</div>
</section>

<?php if ( get_edit_post_link() ) : ?>

<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
