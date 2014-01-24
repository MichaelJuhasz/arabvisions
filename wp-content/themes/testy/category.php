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

	<div id="primary" class="content-area container">
		<div id="content" class="page-content" role="main">

			<div class="banner">

				<?php if ( have_posts() ) : ?>

				<div class="row">
					<h1 class="col-md-4 col-md-offset-1"><?php single_cat_title(); ?></h1>
				</div>
				<div class="row">
					<?php
						// Show an optional term description.
						$term_description = term_description();
						if ( ! empty( $term_description ) ) :
							printf( '<div class="col-md-3 col-md-offset-1 field-description">%s</div>', $term_description );
						endif;
					?>
				</div>

				<div class="push row">
					<?php
							// Start the Loop.
							while ( have_posts() ) : the_post();

							/*
							 * Include the post format-specific template for the content. If you want to
							 * use this in a child theme, then include a file called called content-___.php
							 * (where ___ is the post format) and that will be used instead.
							 */
							get_template_part( 'content-arab', get_post_format() );

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
		</div><!-- #content -->
	</section><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
