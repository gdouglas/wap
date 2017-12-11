<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       grmdgs.com
 * @since      1.0.0
 *
 * @package    Wap
 * @subpackage Wap/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wap
 * @subpackage Wap/admin
 * @author     Graham Douglas <grm.dgs@gmail.com>
 */
class Wap_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}
	/**
	 * Add the warning messages, hide by default.
	 *
	 * @since    1.0.0
	 */
	public function admin_add_warnings() {
		echo
			'<script> 
				window.onload = function() {
					$(function($){
						$("#post-visibility-select").append("<div class=\"warning\">Files added to this page will still be publicly available. This website is not intended for hosting private or sensitive content.</div>");
					});
				}
			</script>';
	}
	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * Add styles
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wap_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wap_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wap-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wap_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wap_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wap-admin.js', array( 'jquery' ), $this->version, false );

	}

}
