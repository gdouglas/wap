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
	 * @since 1.0.0
	 * @param string $plugin_name The name of this plugin.
	 * @param string $version The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}
	/**
	 * Add the warning messages, hide by default.
	 *
	 * @since    1.0.0
	 */
	public function admin_add_warnings() {
		// Add css.
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wap-admin.css', array(), $this->version, 'all' );

		// Register the script.
		wp_register_script( 'wap-script', plugins_url( 'js/wap-admin.js', __FILE__ ), array( 'jquery' ), '1.1', true );

		// Localize the script with the message to be displayed.
		$translation_array = array(
			'msg' => __( '
			<div class="warning">
				Any media uploaded to this website will be publicly available. This platform is not for hosting private or sensitive content.
					<div><a href="https://cms.ubc.ca/about/media-uploads/" target="_blank">[More info]</a>
				</div>
			</div>
			', 'plugin-domain' ),
		);
		wp_localize_script( 'wap-script', 'wap', $translation_array );

		// Enqueued script with localized data.
		wp_enqueue_script( 'wap-script' );
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

	}

}
