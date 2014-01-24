

<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/" class="navbar-form" role="search">
	<div class="input-group">
		<input type="text" value="<?php the_search_query(); ?>"class="form-control" name="s" id="s">
		<div class="input-group-btn">
    		<button class="btn btn-clear" type="submit"></button>
		</div>
	</div>
</form>