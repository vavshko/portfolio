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
            <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 mt-3 mx-auto">
                <div class="entry-content">
                    <?php
                    the_content();
					?>
					<?php if ( get_edit_post_link() ) : ?>
					<div class="hovereffect-edit"> 
						<div class="overlay-edit">
							<?php
							edit_post_link(
								sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Redaguj<span class="screen-reader-text">%s</span>', 'duchswiety' ),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									get_the_title()
								),
								'<span class="edit-link">',
								'</span>'
							);
							?>
						</div>
					</div>
					<?php endif; ?>
		        </div>
	        </div>
		</div>
	</div>
</section>

</article><!-- #post-<?php the_ID(); ?> -->
