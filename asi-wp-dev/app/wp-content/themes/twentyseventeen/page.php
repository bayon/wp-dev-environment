<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<?php
/*

[nk_awb awb_type="image" awb_stretch="true" awb_image="48" awb_image_size="full" awb_image_background_size="cover" awb_image_background_position="50% 50%" awb_parallax="scroll-opacity" awb_parallax_speed="0.5" awb_parallax_mobile="true" awb_mouse_parallax="true" awb_mouse_parallax_size="30" awb_mouse_parallax_speed="10000"]

*/
?>

 <!-- ==========   start animation =============================   -->

<div class="wrap">

	<div id="primary" class="content-area">
		
		<main id="main" class="site-main" role="main">

			<?php



			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

 <!-- ==========   end animation =============================   -->
<!-- [edsanimate_end]  -->
<?php get_footer();
