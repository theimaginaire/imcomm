<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */


$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/navwalker.php',   // Navwalker
  'lib/options-page.php',   // Options Page
  'lib/acf.php',   // Custom fields Page
  'lib/cpt.php',   // Custom fields Page
  'lib/lazyload.php',   // Lazyload
  'lib/shortcodes.php',   // Shortcodes
  'lib/customizer.php' // Theme customizer
];


foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

function load_custom_wp_admin_style($hook) {
  wp_enqueue_style('custom_admin', get_template_directory_uri().'/dist/styles/admin.css', false, null);
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');

function my_custom_login() {
  echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login.css" />';
}
add_action('login_head', 'my_custom_login');