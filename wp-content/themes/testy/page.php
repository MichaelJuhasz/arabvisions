<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();
?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

<!-- Button trigger modal -->
<!-- 			<button class="btn btn-primary" data-toggle="modal" data-target="#myModal" href="#">
			Launch demo modal
			</button>
			<div class="modal fade" id="myModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header"><button class="close" type="button" data-dismiss="modal">×</button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body"> -->

							<?php
							// Start the Loop.
							while ( have_posts() ) : the_post();

							// Include the page content template.
							get_template_part( 'content', 'page' );

							endwhile;
							?>

<!-- 						</div>
					<div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
						<button class="btn btn-primary" type="button">Save changes</button></div>
					</div>
				<!-- /.modal-content -->

				</div>
				<!-- /.modal-dialog -->

			</div>
			<!-- /.modal --> -->
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
