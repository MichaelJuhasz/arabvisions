<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '-', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="navbar-header">
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		      <span class="sr-only">Toggle navigation</span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
		    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<div>
				<?php 
					$args = array(
								'menu'=>'nav',
								'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
					);
					wp_nav_menu( $args ); ?>
			</div>

			<div class="navbar-form navbar-right" role="search">
				<a href="#" class="col-md-3" data-toggle="modal" data-target="#modalPost" title="Add a post">
		  				Add a post
				</a>
		      <div class="form-group">
		        <?php get_search_form(); ?>
		      </div> 
		    </div>
		</div>
	</div><!--header-->
	<div id="main" class="site-main">
					<!-- Modal -->
				<div class="modal fade" id="modalPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 class="modal-title" id="myModalLabel">Post Submission</h4>
				      </div>
				      <div class="modal-body">
				        <?php if(is_user_logged_in()) : ?>
				        	<div><?php user_submitted_posts();?></div>
				        <?php else : ?>
				        	<p>Please <a class="login wpml-btn login-window" href="#login-box">login</a> to add content.</p>
				      	<?php endif;?>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
