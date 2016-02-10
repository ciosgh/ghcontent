<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main"  >
			<?php
				// Start the Loop.
				//$posts = array();
				while ( have_posts() ) : the_post();
				$thePostID = $post->ID;

				//$posts[] += $post->ID;
				//$current = array_search( get_the_ID(), $posts );
				//$prevID = $posts[$current-1];
				//echo $prevID; 
				//$nextID = $posts[$current+1]; 
				
			?>
				 <div id="buttons">
                      <a href="/" title="Back To Home"><img src="/wp-content/themes/landscaping/img/close.gif" width="" height="" alt="Close" /></a>
                      <img src="/wp-content/themes/landscaping/img/prev.gif" width="" height="" alt="Previous" />
                      <img src="/wp-content/themes/landscaping/img/next.gif" width="" height="" alt="Next" />
                  </div>
                   <div id="content-right">
                   		 <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1920,1280 ), false, '' ); ?>
                         <img src="<?php _e($src[0]);?>" width="100%" height="auto" alt="Placeholder" />
                   </div>   
                   <div id="content-left">
                              <div class="title"><h1><?php the_title(); ?></h1></div>
                              <div class="strapline"><h2><?php  _e(get_post_meta($thePostID, 'Strapline', true));?></h2></div>
                              <div class="content"><?php the_content(); ?></div>
                   </div>      
                          
                   <div id="show-gallery">
	                   <?php _e(do_shortcode( '[ess_grid alias="'.strtolower(str_replace(" ", "-", get_the_title())).'"]' )); ?>
                   </div>
                   
                          
                  

                          
                          
                    
	<?php endwhile;	?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();