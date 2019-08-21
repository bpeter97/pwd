<?php

/* *********** Table of Contents ***********
#
#  1. Requirements
#  2. Theme Support
#     2.1 pwd_theme_setup()
#  3. Widgets
#     3.1 pdw_init_widgets($id)
*/

// *********** 1. Requirements ***********
require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/inc/customizer.php';

define('FS_METHOD', 'direct');
add_filter( 'widget_text', 'do_shortcode' );
add_theme_support( 'post-thumbnails' );

/* *********** 2. Theme Support ***********
#
#  2.1 pdw_init_widgets($id)
#
*/
function pwd_theme_setup(){
  // Support for nav menus
  register_nav_menus( array(
    'primary' => __( 'Primary Menu'),
  ));
}
add_action('after_setup_theme', 'pwd_theme_setup');

/* *********** 3. Widgets ***********
#
#  3.1 pdw_init_widgets($id)
#
*/
// function pwd_init_widgets($id) {
//   register_sidebar(array(
//     'name' => 'Contact Form',
//     'id' => 'contact_form',
//     'before_widget' => '<div>',
//     'after_widget' => '</div>'
//   ));
// }