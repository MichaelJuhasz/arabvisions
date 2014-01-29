<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<!-- 	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="banner"> -->
<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="page-content" role="main">

			<div class="banner <?php get_cat_slug(); ?>">

				<?php if ( have_posts() ) : ?>

				<div class="row">
					<h1 class="col-md-4 col-md-offset-1"><?php single_cat_title(); ?></h1>
				</div>
				<div class="row">
					<?php
						// Show an optional term description.
						$term_description = term_description();
						if ( ! empty( $term_description ) ) :
							printf( '<div class="col-md-4 col-md-offset-1 field-description">%s</div>', $term_description );
						endif;
					?>
				</div>
			</div><!-- .banner -->
				<div class="container">
					<div class="push row">
						<div class="col-md-8 col-md-offset-2">
							<?php
									// Start the Loop.
									while ( have_posts() ) : the_post();
									// the_title();
									// the_excerpt();
									get_template_part( 'content-arab', get_post_format() );

								// if(is_user_logged_in()){
									if(function_exists('the_ratings')) { the_ratings(); }
								// } 
									
									endwhile;
									// Previous/next page navigation.
									twentyfourteen_paging_nav();

								else :
									// If no content, include the "No posts found" template.
									get_template_part( 'content-arab', 'none' );

								endif;
							?>
						</div>
					</div>
				</div><!-- .container -->

		</div><!-- #content -->
	</section><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
