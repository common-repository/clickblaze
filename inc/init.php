<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


if (!defined('CLICKBLAZE_VERSION_KEY'))
    define('CLICKBLAZE_VERSION_KEY', 'clickblaze');

if (!defined('CLICKBLAZE_VERSION_NUM'))
    define('CLICKBLAZE_VERSION_NUM', '1.0.0');

add_option(CLICKBLAZE_VERSION_KEY, CLICKBLAZE_VERSION_NUM);


function clickblaze_add_admin_settings_menu() {
add_submenu_page( 'options-general.php' , 'Click Blaze Settings', 'Click Blaze Settings' , 'manage_options' , 'clickblaze_settings' , 'clickblaze_display_setting_panels');
}

add_action('admin_menu', 'clickblaze_add_admin_settings_menu');

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/cb-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/cb-config.php' );
}



function clickblaze_required_scripts() {

  wp_register_script( 'cb-scripts', plugin_dir_url( __FILE__ ) . 'js/scripts.js', array('jquery') );
  wp_enqueue_script('cb-scripts');

}
add_action('wp_enqueue_scripts', 'clickblaze_required_scripts');

//includes
include('cb-settings.php');
include('cb-config.php');
include('cb-header-notify.php');
?>
