<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Duch_Swiety
 */
$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<section id=" " class=" ">
	<div class="container-fluid">
		<div class="row" id="primary">
            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 ml-5 mr-3 mt-3">
				<div class="entry-content">
					<main id="content" role="main">
						<header class="entry-header">
							<?php
								if ( is_singular() ) :
									the_title( '<h3 class="entry-title">', '</h3>' );
								else :
									the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
								endif;

								if ( 'post' === get_post_type() ) :
							?>
							<div class="post-details">
								<!-- <div class="post-author-badge">
									<i class="fas fa-user"></i><?php the_author(); ?>
								</div> -->
								<div class="post-date-badge">
									<i class="fas fa-clock"></i><time><?php the_date(); ?></time>
								</div>
								<div class="post-category-badge">
									<i class="fas fa-folder"></i><?php the_category(', '); ?>
								</div>
								<div class="post-tags-badge">
									<i class="fas fa-tags"></i><?php the_tags(); ?>
								</div>
								<div class="post-comment-badge">
									<a href="<?php comments_link(); ?>"><i class="fas fa-comments"></i><?php comments_number(0, 1, '%'); ?></a>
								</div>
							</div>
								<?php endif; ?>
						</header> 
						<?php if ( has_post_thumbnail() ){ ?>
							<div class="post-image">
								<?php the_post_thumbnail(); ?>
							</div>
						<?php } ?>
						<div class="post-excerpt">
						<?php the_excerpt(); ?>
					</div>
					<div class="post-edit-badge">
						<div class="hovereffect-edit"> 
							<div class="overlay-edit">
								<?php edit_post_link('Redaguj', ''); ?>
							</div>
						</div>
					</div>
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

<!-- <div class="entry-content">
	<?php
	the_content( sprintf(
		wp_kses(
			/* translators: %s: Name of current post. Only visible to screen readers */
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'duchswiety' ),
			array(
				'span' => array(
					'class' => array(),
				),
			)
		),
		get_the_title()
	) );

	wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'duchswiety' ),
		'after'  => '</div>',
	) );
	?>
</div> -->

<footer class="entry-footer">
	<!-- <?php duchswiety_entry_footer(); ?> -->
</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
