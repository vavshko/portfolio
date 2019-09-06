<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Duch_Swiety
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 			 
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

	<?php if ( has_post_thumbnail() ){ ?>
		<div class="post-image">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php } ?>
	<div class="post-excerpt">
	<?php the_excerpt(); ?>
	<div class="post-edit-badge">
		<div class="hovereffect-edit"> 
			<div class="overlay-edit">
				<?php edit_post_link('Redaguj', ''); ?>
			</div>
		</div>
	</div>
</div>

<!-- 
	<footer class="entry-footer">
		<?php duchswiety_entry_footer(); ?>
	</footer> -->
</article><!-- #post-<?php the_ID(); ?> -->
