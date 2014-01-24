<?php

get_header(); ?>

<div id="main-content" class="main-content-front">

	<div id="primary" class="content-area container">
		<div id="content" class="site-content row" role="main">
			<div class="row explanation-text">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-md-4"><?php the_content(); ?></div>
				<?php endwhile;?>
			</div>
			<div class="row">
				<div class="col-md-3 col-md-offset-2 nav-box">
					<h2>Browse</h2>
					<h3>By category</h3> 
					<ul class="news-navigation">
		               <?php
		               $args = array(
		                               'title_li' => '',
		                               'orderby' => 'count',
		                               'order' => 'DESC',
		                               'show_count' => 1,
		                       );
		 
		               wp_list_categories( $args ); ?>
	        		</ul>
	        	</div>
				<div class="col-md-3 col-md-offset-2 nav-box">
					<h2>View</h2>
					<h3>Trending posts</h3>
					<?php
						$args = array(
								'posts_per_page' => 5,
								'meta_key' => 'ratings_average', 
								'orderby' => 'meta_value_num',
								'order' => 'DESC',
								);
						$new_query = new WP_Query( $args );
						
						if( $new_query->have_posts() ): while( $new_query->have_posts() ):  $new_query->the_post();

					?>
						<a href="<?php the_permalink(); ?>">
							<p><?php the_title(); ?></p>
						</a>		
					<?php endwhile;

						else :
							// If no content, include the "No posts found" template.
							get_template_part( 'content', 'none' );

						endif;
					?>
				</div>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
