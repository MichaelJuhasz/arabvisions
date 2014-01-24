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

get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area container">
		<div id="content" class="page-content" role="main">

			<div class="banner">
				<?php
				// Start the Loop.
					while ( have_posts() ) : the_post();
				?>
				<div class="row">
					<h1 class="col-md-4 col-md-offset-1"><?php the_title(); ?></h1>
				</div>
				<div class="row">
					<p class="col-md-3 col-md-offset-1 field-description"><?php the_field('page-description');?></p>	
				</div>
				<div class="row">
					<button class="btn btn-primary col-md-3 col-md-offset-1" data-toggle="modal" data-target="#myModal">
		  				Add a post
					</button>
				</div>	

			
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title" id="myModalLabel">Post Submission</h4>
			      </div>
			      <div class="modal-body">
			        <div><?php the_content(); ?></div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

			<?php endwhile;
			?>

			<div class="row">
				<div class="col-md-1"></div>	
				<?php 
				$category_ids = get_all_category_ids();
				foreach ($category_ids as $cat_id): 

				$cat_name = get_cat_name($cat_id); 
				$cat_desc = category_description($cat_id); ?>
				<div class="col-md-3 post-listing cat_names">
					<a href="<?php echo esc_url(get_category_link($cat_id)); ?>">
						<h2 class=""><?php echo $cat_name; ?></h2>
						<!-- <p class="description"><?php echo $cat_desc; ?></p> -->
					</a>
					
					<?php 
						$args = array(
								'posts_per_page' => 5,
								'cat' => $cat_id,
								'meta_key' => 'ratings_average', 
								'orderby' => 'meta_value_num',
								'order' => 'DESC',
								);
						$new_query = new WP_Query( $args );
						
						if( $new_query->have_posts() ): while( $new_query->have_posts() ):  $new_query->the_post();

					?>
						<a href="<?php the_permalink(); ?>">
							<p class="post_names"><?php the_title(); ?></p>
						</a>
						<div class="post_info">
							<a href="<?php the_author(); ?>"><?php the_author(); ?></a> 
							- <?php the_date(); ?>
						</div>		
					<?php endwhile;

						else :
							// If no content, include the "No posts found" template.
							get_template_part( 'content', 'none' );

						endif;
						wp_reset_postdata();
						?>
					</div>
				<?php endforeach;?>
			</div>		
			</div> <!-- Banner -->
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
