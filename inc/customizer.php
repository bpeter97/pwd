<?php

/* ********** TABLE OF CONTENTS **********
*
*   1. About Page
*     1.1 Header Section
*         1.1.1 about_page_header_image
*         1.1.2 about_page_header_title
*         1.1.3 about_page_header_text
*         1.1.4 about_page_youtube_id
*     1.2 Team Members
*         1.2.1 Brian Peter's Section
*               1.2.1.1 about_page_team_brian_name
*               1.2.1.2 about_page_team_brian_title
*               1.2.1.3 about_page_team_brian_image
*               1.2.1.4 about_page_team_brian_image_alt
*         1.2.2 Chelsea's Section
*               1.2.2.1 about_page_team_chelsea_name
*               1.2.2.2 about_page_team_chelsea_title
*               1.2.2.3 about_page_team_chelsea_image
*               1.2.2.4 about_page_team_chelsea_image_alt
*   2. Contact Form
*     2.1 contact_form_shortcode
*     2.2 contact_form_message
*   3. Mission Statement
*     3.1 mission_statement_message
*   4. Contact Page
*     4.1 contact_page_header_image
*     4.2 contact_page_header_message
*   5. Social Links
*     5.1 facebook_link
*     5.2 twitter_link
*     5.3 linkedin_link
*     5.1 instagram_link
*/

function pdw_customize_register( $wp_customize ) {

  // ********** 1. About Page Page **********
    $wp_customize->add_panel('about_page', array(
      'priority'    => 111,
      'title'       => __('About Page', 'peterwebdev'),
      'description' => __('Edit the options for the about page', 'peterwebdev')
    ));

    // ********** 1.1 About Page Header Section **********
    $wp_customize->add_section('about_page_header', array(
      'title'       => __('Header Options', 'peterwebdev'),
      'panel'       => 'about_page',
      'description' => __('Options for the Header Section', 'peterwebdev'),
      'priority'    => 1
    ));

    // ********** 1.1.1 About Page Header Image **********
    $wp_customize->add_setting('about_page_header_image', array(
      'default' => get_bloginfo('template_directory').'/assets/imgs/headers/about-bg.jpg',
      'type'    => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_page_header_image', array(
      'label'    => __('Header Image', 'peterwebdev'),
      'section'  => 'about_page_header',
      'settings' => 'about_page_header_image',
      'priority' => 1
    )));

    // ********** 1.1.2 About Page Header Title **********
    $wp_customize->add_setting('about_page_header_title', array(
      'default' => 'About',
      'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('about_page_header_title', array(
      'type'     => 'text',
      'label'    => __('Header Title', 'peterwebdev'),
      'section'  => 'about_page_header',
      'settings' => 'about_page_header_title',
      'priority' => 2
    ));

    // ********** 1.1.3 About Page Header Text **********
    $wp_customize->add_setting('about_page_header_text', array(
      'default' => 'Header Text: Edit this in the customizer.',
      'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('about_page_header_text', array(
      'type'     => 'textarea',
      'label'    => __('Header Text', 'peterwebdev'),
      'section'  => 'about_page_header',
      'settings' => 'about_page_header_text',
      'priority' => 3
    ));

    // ********** 1.1.4 About Page Video URL **********
    $wp_customize->add_setting('about_page_youtube_id', array(
      'default' => 'Header Text: Edit this in the customizer.',
      'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('about_page_youtube_id', array(
      'type'     => 'text',
      'label'    => __('Youtube Video ID', 'peterwebdev'),
      'section'  => 'about_page_header',
      'settings' => 'about_page_youtube_id',
      'priority' => 4
    ));

    // ********** 1.2 Team Members **********
    $wp_customize->add_section('about_page_team', array(
      'title'       => __('Team Member Options', 'peterwebdev'),
      'panel'       => 'about_page',
      'description' => __('Options for the Team Members Section', 'peterwebdev'),
      'priority'    => 2
    ));

    // ********** 1.2.1 Brian's Section **********
      // ********** 1.2.1.1 Brian's Name **********
      $wp_customize->add_setting('about_page_team_brian_name', array(
        'default' => 'Brian L. Peter Jr.',
        'type'    => 'theme_mod'
      ));
      $wp_customize->add_control('about_page_team_brian_name', array(
        'type'     => 'text',
        'label'    => __('Brian\'s Name', 'peterwebdev'),
        'section'  => 'about_page_team',
        'settings' => 'about_page_team_brian_name',
        'priority' => 1
      ));

      // ********** 1.2.1.2 Brian's Title **********
      $wp_customize->add_setting('about_page_team_brian_title', array(
        'default' => 'Owner / Web Developer',
        'type'    => 'theme_mod'
      ));
      $wp_customize->add_control('about_page_team_brian_title', array(
        'type'     => 'text',
        'label'    => __('Brian\'s Title', 'peterwebdev'),
        'section'  => 'about_page_team',
        'settings' => 'about_page_team_brian_title',
        'priority' => 2
      ));

      // ********** 1.2.1.3 Brian's Image **********
      $wp_customize->add_setting('about_page_team_brian_image', array(
        'default' => get_bloginfo('template_directory').'/assets/imgs/team/brian.png',
        'type'    => 'theme_mod'
      ));
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_page_team_brian_image', array(
        'label'    => __('Brian\'s Image', 'peterwebdev'),
        'section'  => 'about_page_team',
        'settings' => 'about_page_team_brian_image',
        'priority' => 3
      )));

      // ********** 1.2.1.4 Brian's Image Alt **********
      $wp_customize->add_setting('about_page_team_brian_image_alt', array(
        'default' => 'An image of Brian L. Peter Jr.',
        'type'    => 'theme_mod'
      ));
      $wp_customize->add_control('about_page_team_brian_image_alt', array(
        'type'     => 'text',
        'label'    => __('Brian\'s Image Alt', 'peterwebdev'),
        'section'  => 'about_page_team',
        'settings' => 'about_page_team_brian_image_alt',
        'priority' => 4
      ));

    // ********** 1.2.2 Chelsea's Section **********
    // ********** 1.2.2.1 Chelsea's Name **********
    $wp_customize->add_setting('about_page_team_chelsea_name', array(
      'default' => 'Chelsea C. Peter',
      'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('about_page_team_chelsea_name', array(
      'type'     => 'text',
      'label'    => __('Chelsea\'s Name', 'peterwebdev'),
      'section'  => 'about_page_team',
      'settings' => 'about_page_team_chelsea_name',
      'priority' => 5
    ));
  
    // ********** 1.2.2.2 Chelsea's Title **********
    $wp_customize->add_setting('about_page_team_chelsea_title', array(
      'default' => 'Co-Owner / Consultant',
      'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('about_page_team_chelsea_title', array(
      'type'     => 'text',
      'label'    => __('Chelsea\'s Title', 'peterwebdev'),
      'section'  => 'about_page_team',
      'settings' => 'about_page_team_chelsea_title',
      'priority' => 6
    ));

    // ********** 1.2.2.3 Chelsea's Image **********
    $wp_customize->add_setting('about_page_team_chelsea_image', array(
      'default' => get_bloginfo('template_directory').'/assets/imgs/team/chelsea.png',
      'type'    => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_page_team_chelsea_image', array(
      'label'    => __('Chelsea\'s Image', 'peterwebdev'),
      'section'  => 'about_page_team',
      'settings' => 'about_page_team_chelsea_image',
      'priority' => 7
    )));

    // ********** 1.2.1.4 Chelsea's Image Alt **********
    $wp_customize->add_setting('about_page_team_chelsea_image_alt', array(
      'default' => 'An image of Chelsea C. Peter',
      'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('about_page_team_chelsea_image_alt', array(
      'type'     => 'text',
      'label'    => __('Chelsea\'s Image Alt', 'peterwebdev'),
      'section'  => 'about_page_team',
      'settings' => 'about_page_team_chelsea_image_alt',
      'priority' => 8
    ));

  // ************************************************************************

  // ********** 2. Contact Form **********
    $wp_customize->add_section('contact_form', array(
      'title'       => __('Contact Form', 'peterwebdev'),
      'description' => __('Options for the Contact Form Section', 'peterwebdev'),
      'priority'    => 113
    ));

    // ********** 2.1 Contact Form Shortcode **********
      $wp_customize->add_setting('contact_form_shortcode', array(
        'default' => 'Contact Form Shortcode: Edit this in the customizer.',
        'type'    => 'theme_mod'
      ));
      $wp_customize->add_control('contact_form_shortcode', array(
        'type'     => 'text',
        'label'    => __('Contact Form Shortcode', 'peterwebdev'),
        'section'  => 'contact_form',
        'settings' => 'contact_form_shortcode',
        'priority' => 1
      ));

    // ********** 2.2 Contact Form Message **********
      $wp_customize->add_setting('contact_form_message', array(
        'default' => 'Contact Form Message: Edit this in the customizer.',
        'type'    => 'theme_mod'
      ));
      $wp_customize->add_control('contact_form_message', array(
        'type'     => 'textarea',
        'label'    => __('Contact Form Message', 'peterwebdev'),
        'section'  => 'contact_form',
        'settings' => 'contact_form_message',
        'priority' => 2
      ));

  // ************************************************************************

  // ********** 3. Mission Statement **********
    $wp_customize->add_section('mission_statement', array(
      'title'       => __('Mission Statement', 'peterwebdev'),
      'description' => __('Options for the Mission Statement Section', 'peterwebdev'),
      'priority'    => 110
    ));
  
    // ********** 3.1 Mission Statement Message **********
      $wp_customize->add_setting('mission_statement_message', array(
        'default' => 'Mission Statement Message: Edit this in the customizer.',
        'type'    => 'theme_mod'
      ));
      $wp_customize->add_control('mission_statement_message', array(
        'type'     => 'text',
        'label'    => __('Mission Statement Message', 'peterwebdev'),
        'section'  => 'mission_statement',
        'settings' => 'mission_statement_message',
        'priority' => 1
      ));

  // ************************************************************************

  // ********** 4. Contact Page **********
    $wp_customize->add_section('contact_page', array(
      'title'       => __('Contact Page', 'peterwebdev'),
      'description' => __('Options for the Contact Pace', 'peterwebdev'),
      'priority'    => 114
    ));

    // ********** 4.1 Contact Page Header Image **********
      $wp_customize->add_setting('contact_page_header_image', array(
        'default' => get_bloginfo('template_directory').'/assets/imgs/headers/contact.jpg',
        'type'    => 'theme_mod'
      ));
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_page_header_image', array(
        'label'    => __('Header Image', 'peterwebdev'),
        'section'  => 'contact_page',
        'settings' => 'contact_page_header_image',
        'priority' => 1
      )));

    // ********** 4.2 Contact Page Message **********
      $wp_customize->add_setting('contact_page_message', array(
        'default' => 'Contact Page Message: Edit this in the customizer.',
        'type'    => 'theme_mod'
      ));
      $wp_customize->add_control('contact_page_message', array(
        'type'     => 'textarea',
        'label'    => __('Contact Page Message', 'peterwebdev'),
        'section'  => 'contact_page',
        'settings' => 'contact_page_message',
        'priority' => 2
      ));
  // ************************************************************************

  // ********** 5. Social Links **********
    $wp_customize->add_section('social_links', array(
      'title'       => __('Social Links', 'peterwebdev'),
      'description' => __('Options for the social links', 'peterwebdev'),
      'priority'    => 115
    ));

    // ********** 5.1 Facebook **********
    $wp_customize->add_setting('facebook_link', array(
      'default' => 'http://www.facebook.com',
      'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('facebook_link', array(
      'type'     => 'text',
      'label'    => __('Facebook Link', 'peterwebdev'),
      'section'  => 'social_links',
      'settings' => 'facebook_link',
      'priority' => 1
    ));

    // ********** 5.2 Twitter **********
    $wp_customize->add_setting('twitter_link', array(
      'default' => 'http://www.twitter.com',
      'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('twitter_link', array(
      'type'     => 'text',
      'label'    => __('Twitter Link', 'peterwebdev'),
      'section'  => 'social_links',
      'settings' => 'twitter_link',
      'priority' => 2
    ));

    // ********** 5.3 LinkedIn **********
    $wp_customize->add_setting('linkedin_link', array(
      'default' => 'http://www.linkedin.com',
      'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('linkedin_link', array(
      'type'     => 'text',
      'label'    => __('LinkedIn Link', 'peterwebdev'),
      'section'  => 'social_links',
      'settings' => 'linkedin_link',
      'priority' => 3
    ));

    // ********** 5.4 Instagram **********
    $wp_customize->add_setting('instagram_link', array(
      'default' => 'http://www.instagram.com',
      'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('instagram_link', array(
      'type'     => 'text',
      'label'    => __('Instagram Link', 'peterwebdev'),
      'section'  => 'social_links',
      'settings' => 'instagram_link',
      'priority' => 3
    ));
  // ************************************************************************
}
add_action( 'customize_register', 'pdw_customize_register' );