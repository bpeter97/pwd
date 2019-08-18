<?php

require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';

// Theme Support
function wpb_theme_setup(){
  // Support for nav menus
  register_nav_menus( array(
    'primary' => __( 'Primary Menu'),
  ));
}
add_action('after_setup_theme', 'wpb_theme_setup');
