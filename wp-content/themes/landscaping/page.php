<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
			<div id="main-content">
                <?php the_content(); ?>
			</div>
            <?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1920,614 ), false, '' );
				} 
				?>
             <?php if ($src[0]) { ?>
	            <div id="main-banner" style="width:100%; background:url('<?php _e($src[0]);?>'); no-repeat; background-size: cover; min-height:614px;">
            <?php } ?> 
            </div>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>