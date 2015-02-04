<?php 

/**
 * Charitable Core Admin Functions
 *
 * General core functions available only within the admin area.
 *
 * @author 		Studio164a
 * @category 	Core
 * @package 	Charitable/Admin/Functions
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Load a view from the admin/views folder. 
 * 
 * If the view is not found, an Exception will be thrown.
 *
 * Example usage: charitable_admin_view('metaboxes/cause-metabox');
 *
 * @return 	void
 * @since 	1.0.0
 */
function charitable_admin_view($view) {
	$filename = get_charitable()->get_path( 'admin' ) . 'views/' . $view . '.php';

	if ( ! is_readable( $filename ) ) {
		echo '<pre>';
		throw new Exception( sprintf( '<strong>%s</strong>: %s (%s)', 
			__( 'Error', 'charitable' ), 
			__( 'View not found or is not readable.', 'charitable' ), 
			$filename
		) );
		echo '</pre>';
	}

	include_once( $filename );
}

/**
 * Returns the Charitable_Admin_Settings helper.
 *
 * @return 	Charitable_Admin_Settings
 * @since 	1.0.0
 */
function charitable_get_admin_settings() {
	return charitable_get_helper( 'Admin_Settings' );
}