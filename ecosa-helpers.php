<?php 
/**
 * @package Ecosa Helpers
 * @version 1.0.0
 */
/*
Plugin Name: Ecosa Helpers
Plugin URI: #
Description: ...
Author: Amebae
Version: 1.0.0
Author URI: #Amebae
*/

{
  /**
   * Define
   */
  define('EH_VER', '1.0.0');
  define('EH_DIR', plugin_dir_path(__FILE__));
  define('EH_URI', plugin_dir_url(__FILE__));
}

{
  /**
   * Inc
   */
  require(EH_DIR . '/inc/helpers.php');
  require(EH_DIR . '/inc/options.php');
  require(EH_DIR . '/inc/shortcode.php');
  require(EH_DIR . '/inc/register-block.php');
  require(EH_DIR . '/inc/template-tag.php');
}