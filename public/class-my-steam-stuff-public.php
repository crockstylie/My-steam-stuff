<?php
/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @link       http://crock.fr
 * @since      1.0.0 *
 * @package    My_Steam_Stuff
 * @subpackage My_Steam_Stuff/public
 * @author     Your Name <antoine.hory@gmail.com>
 */
class My_Steam_Stuff_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $my_steam_stuff    The ID of this plugin.
	 */
	private $my_steam_stuff;

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
	 * @param      string    $my_steam_stuff       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $my_steam_stuff, $version ) {

		$this->my_steam_stuff = $my_steam_stuff;
		$this->version = $version;

	}

	public function mss_game_list_shortcode(){
		ob_start();
		require_once plugin_dir_path( __FILE__ ) . 'partials/my-steam-stuff-public-display.php';
		$content = ob_get_clean();
		return $content;
	}
	public function mss_game_list($atts, $content = ""){
		return do_shortcode($this->mss_game_list_shortcode());
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in My_Steam_Stuff_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The My_Steam_Stuff_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->my_steam_stuff, plugin_dir_url( __FILE__ ) . 'css/my-steam-stuff-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in My_Steam_Stuff_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The My_Steam_Stuff_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->my_steam_stuff, plugin_dir_url( __FILE__ ) . 'js/my-steam-stuff-public.js', array( 'jquery' ), $this->version, false );

	}

}
