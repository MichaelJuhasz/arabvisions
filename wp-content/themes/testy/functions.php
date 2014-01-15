<?php
# Empty functions.php file for your childtheme
# The parents functions.php contents will be loaded.
# Add any additional or overwriting functions here.

# http://wordpress.org/support/topic/limiting-posts-to-registered-users
add_shortcode( 'member', 'member_check_shortcode' );

function member_check_shortcode( $atts, $content = null ) {
	 if ( is_user_logged_in() && !is_null( $content ) && !is_feed() ){
		return do_shortcode($content);
	}
	return '<p>Please register to add content.</p> [wp-modal-login login_text="Login" logout_text="Logout"]';//<?php add_modal_login_button( $login_text = 'Login', $logout_text = 'Logout', $logout_url = '', $show_admin = false ); 
}

/**
* This custom function is for PLUGIN: WP Modal Login - Hook to implement shortcode logic inside WordPress nav menu items
* Shortcode code can be added using WordPress menu admin menu in description field
*/
function shortcode_menu( $item_output, $item ) {

	if ( !empty($item->description)) {
		$output = do_shortcode($item->description);

		if ( $output != $item->description )
		$item_output = $output;
	}

	return $item_output;
}

add_filter("walker_nav_menu_start_el", "shortcode_menu" , 10 , 2);

/**
* This function is also for WP Modal Login and comes from the author
* It changes the login redirect location
*/
function my_awesome_redirect( $redirect ) {
   $redirect = site_url('/?page_id=5');

   return $redirect;
}
add_filter( 'wpml_redirect_to', 'my_awesome_redirect' );