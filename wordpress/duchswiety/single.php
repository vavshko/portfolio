<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Duch_Swiety
 */

get_header();
?>

<section id="block-post" class=" ">
	<div class="container-fluid">
		<div class="row">
            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 ml-5 mr-3 mt-3">
                <div class="entry-content">
				 
                   	<?php
					   while ( have_posts() ) :
						   the_post();
			   
						   get_template_part( 'template-parts/content-single', get_post_type() );
			   
						//    the_post_navigation();
			   
						   // If comments are open or we have at least one comment, load up the comment template.
						   if ( comments_open() || get_comments_number() ) :
							   comments_template();
						   endif;
			   
					   endwhile; // End of the loop.
					   ?>
					   
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
