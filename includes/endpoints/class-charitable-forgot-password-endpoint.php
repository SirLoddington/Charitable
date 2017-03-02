<?php
/**
 * forgot_password endpoint.
 *
 * @version     1.5.0
 * @package     Charitable/Classes/Charitable_Forgot_Password_Endpoint
 * @author      Eric Daams
 * @copyright   Copyright (c) 2017, Studio 164a
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

if ( ! defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly

if ( ! class_exists( 'Charitable_Forgot_Password_Endpoint' ) ) :

	/**
	 * Charitable_Forgot_Password_Endpoint
	 *
	 * @abstract
	 * @since       1.5.0
	 */
	class Charitable_Forgot_Password_Endpoint extends Charitable_Endpoint {

		/**
		 * @var     string
		 */
		const ID = 'forgot_password';

		/**
		 * Return the endpoint ID.
		 *
		 * @return 	string
		 * @access 	public
		 * @static
		 * @since 	1.5.0
		 */
		public static function get_endpoint_id() {
			return self::ID;
		}

		/**
		 * Add rewrite rules for the endpoint.
		 *
		 * @access 	public
		 * @since 	1.5.0
		 */
		public function setup_rewrite_rules() {

			add_rewrite_endpoint( 'forgot_password', EP_PERMALINK );
			add_rewrite_rule( '(.?.+?)(?:/([0-9]+))?/forgot-password/?$', 'index.php?pagename=$matches[1]&page=$matches[2]&forgot_password=1', 'top' );

		}

		/**
		 * Return the endpoint URL.
		 *
		 * @global 	WP_Rewrite $wp_rewrite
		 * @param 	array      $args
		 * @return  string
		 * @access  public
		 * @since   1.5.0
		 */
		public function get_page_url( $args = array() ) {

			global $wp_rewrite;

			$login_page = charitable_get_permalink( 'login_page' );

			/* If we are using the default WordPress login process, return the lostpassword URL. */
			if ( wp_login_url() == $login_page ) {
				return wp_lostpassword_url();
			}

			if ( $wp_rewrite->using_permalinks() ) {
				return trailingslashit( $login_page ) . 'forgot-password/';
			}

			return esc_url_raw( add_query_arg( array( 'forgot_password' => 1 ), $login_page ) );

		}

		/**
		 * Return whether we are currently viewing the endpoint.
		 *
		 * @global  WP_Query $wp_query
		 * @param 	array    $args
		 * @return  boolean
		 * @access  public
		 * @since   1.5.0
		 */
		public function is_page( $args = array() ) {

			global $wp_query;

			$login_page = charitable_get_option( 'login_page', 'wp' );

			if ( 'wp' == $login_page ) {
				return wp_lostpassword_url() == charitable_get_current_url();
			}

			return $wp_query->is_main_query()
				&& array_key_exists( 'forgot_password', $wp_query->query_vars );

		}
	}

endif;
