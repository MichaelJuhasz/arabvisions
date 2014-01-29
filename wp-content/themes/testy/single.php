<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="page-content" role="main">
			<?php 
				while ( have_posts() ) : the_post(); 
				$cat = get_the_category();
			?>
			<div class="banner <?php echo $cat[0]->slug ; ?>">
			
				<div class="row">
					<h1 class="col-md-4 col-md-offset-1 cat-title"><?php echo $cat[0]->name; ?></h1>
				</div>
				<div class="row">
					<div class="col-md-3 col-md-offset-1 field-description">
						<?php 
							$description = $cat[0]->category_description;
							echo $description;
						?>
					</div>
				</div>
			</div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<?php get_template_part( 'content-arab', get_post_format() ); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-md-offset-2">
							<?php 
								// if(is_user_logged_in()){
									if(function_exists('the_ratings')) { the_ratings(); }
								// } 
							?>
						</div>
					</div>
					<div class="row">
						
							<?php if (is_user_logged_in()):  ?>
									<?php if ( comments_open() || get_comments_number() ) : ?>
										<div class="col-md-4 col-md-offset-2"><?php comments_template();?></div>
									<?php endif; ?>
								
								<?php else :?>
									<p class="col-md-3 col-md-offset-2 login-message">Please <a class="login wpml-btn login-window" href="#login-box">login</a> to add a comment.</p>
							<?php endif; ?>

					</div>
				<?php endwhile; ?>
				</div><!-- .container -->
		</div><!-- #content -->
	</div><!-- #primary -->
</div>

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
