<?php
/*
 * Plugin Name: Unblock CSS & JS for Googlebot
 * Plugin URI: http://www.wpsos.io/wordpress-plugin-unblock-css-js-for-googlebot/
 * Author: WPSOS
 * Description: Modifies robots.txt to allow Googlebot access JS and CSS files.
 * Version: 1.0
 * Author URI: http://www.wpsos.io/
 * Licence: GPLv2 or later
*/
/**
 * 
 * @param String $rv The output of the readme.txt
 * @return string
 */
function wpsos_allow_googlebot($rv, $public)
{
	//New text to add to the readme.txt
    $added_txt =
    'User-Agent: Googlebot
Allow: .js
Allow: .css';
    //Add the text to the existing text
    $rv.=$added_txt;
    return $rv;
}
add_filter('robots_txt', 'wpsos_allow_googlebot', 10, 2);

/**
 * Add links to WPSOS
 */
function wpsos_ucjg_set_plugin_meta( $links, $file ) {

	if ( strpos( $file, 'unblock-css-js-for-googlebot.php' ) !== false ) {

		$links = array_merge( $links, array( '<a href="http://www.wpsos.io/wordpress-plugin-unblock-css-js-for-googlebot/">' . __( 'Plugin details' ) . '</a>' ) );
		$links = array_merge( $links, array( '<a href="http://www.wpsos.io/">WPSOS - WordPress Security & Hack Repair</a>' ) );
	}
	return $links;
}
add_filter( 'plugin_row_meta', 'wpsos_ucjg_set_plugin_meta', 10, 2 );
?>