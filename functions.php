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
function pwd_init_widgets($id) {
  register_sidebar(array(
    'name' => 'Blog Right Sidebar',
    'id' => 'blog_right_1',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
  ));
}
add_action( 'widgets_init', 'pwd_init_widgets' );

add_filter( 'comment_form_default_fields', 'tu_comment_form_hide_cookies_consent' );
function tu_comment_form_hide_cookies_consent( $fields ) {
	unset( $fields['cookies'] );
	return $fields;
}

function wpsites_change_comment_form_submit_label($arg) {
  $arg['label_submit'] = 'Submit';
  $arg['submit_button'] = '<input name="%1$s" type="submit" id="%2$s" class="%3$s btn btn-primary" value="%4$s" />';
        return $arg;
}
add_filter('comment_form_defaults', 'wpsites_change_comment_form_submit_label');

// Default Gravatar
add_filter( 'avatar_defaults', 'new_gravatar' );
function new_gravatar ($avatar_defaults) {
$myavatar = 'https://peterwebdevelopment.com/wp-content/uploads/2019/08/PWD.png';
$avatar_defaults[$myavatar] = "Default Gravatar";
return $avatar_defaults;
}

/**
 * Extend Recent Posts Widget 
 *
 * Adds different formatting to the default WordPress Recent Posts Widget
 */

Class PWD_Recent_Posts_Widget extends WP_Widget_Recent_Posts {

	function widget($args, $instance) {
	
		extract( $args );
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);
				
		if( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
			$number = 10;
					
		$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
		if( $r->have_posts() ) :
			
			echo $before_widget;
			
			?>
      <div class="card mb-4">
        <h5 class="card-header"><?php if( $title ) echo $title; ?></h5>
        <div class="card-body">
          <ul class="list-group list-group-flush">
          <?php while( $r->have_posts() ) : $r->the_post(); ?>				
          <li class="list-group-item"><?php the_time( 'F d'); ?> - <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
        </ul>
        </div>
      </div>
			 
			<?php
			echo $after_widget;
		
		wp_reset_postdata();
		
		endif;
	}
}

Class PWD_Recent_Comments_Widget extends WP_Widget_Recent_Comments {

  function widget( $args, $instance ) {
    
    extract( $args );

    $title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);

    $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
		if ( ! $number ) {
			$number = 5;
    }
    
    $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;

    $r = new WP_Query(
			apply_filters(
				'widget_posts_args',
				array(
					'posts_per_page'      => $number,
					'no_found_rows'       => true,
					'post_status'         => 'publish',
					'ignore_sticky_posts' => true,
				),
				$instance
			)
    );
    
    if ( ! $r->have_posts() ) {
			return;
		}
		?>
    <?php 
    
    echo $args['before_widget'];;
			
			?>
      <div class="card mb-4">
        <h5 class="card-header"><?php if( $title ) echo $title; ?></h5>
        <div class="card-body">
          <ul class="list-group list-group-flush">
          <?php foreach ( $r->posts as $recent_post ) : ?>
            <?php
            $post_title = get_the_title( $recent_post->ID );
            $post_author = get_user_by( 'ID', $recent_post->post_author );
            $title      = ( ! empty( $post_title ) ) ? $post_title : __( '(no title)' );
            ?>
            <li class="list-group-item">
              <a href="<?php the_permalink( $recent_post->ID ); ?>"><?= $post_author->display_name . ' - ' . $title; ?></a>
              <?php if ( $show_date ) : ?>
                <span class="post-date"><?php echo get_the_date( '', $recent_post->ID ); ?></span>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
        </div>
      </div>
			 
			<?php
      echo $args['after_widget'];
  }

}
function pwd_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('PWD_Recent_Posts_Widget');
  unregister_widget('WP_Widget_Recent_Comments');
  register_widget('PWD_Recent_Comments_Widget');
}
add_action('widgets_init', 'pwd_widget_registration');
  