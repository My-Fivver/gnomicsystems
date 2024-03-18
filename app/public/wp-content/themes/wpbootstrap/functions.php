


<?php
/**
 * Register Custom Navigation Walker
 */

function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

register_nav_menus(array(
    'primary' => __('Primary Menu', 'THEMENAME'),
));






// set_excert_lenght Blog Text
function set_excert_lenght()
{
    return 20;
}
add_filter('excerpt_lengh', '');




//suport Images option in Blog Post
add_theme_support('post-thumbnails'); // Enable support for featured images/thumbnails

// Optionally, register a custom image size
add_image_size('homepage-image', 800, 600, true); // Adjust dimensions as needed

// Register a custom field for dynamic images (if not using ACF)
function register_custom_fields()
{
    register_post_meta('post', 'dynamic_image', array(
        'type' => 'string',
        'single' => true,
        'show_in_rest' => true,
    ));
}
add_action('init', 'register_custom_fields');




//Email







// Register customization options for custom text, link, and image (Main page)
add_action('customize_register', 'customize_main');

function customize_main($wp_customize)
{
    // Add a new section for custom text, link, and image
    $wp_customize->add_section('custom_text_link_image_section', array(
        'title' => __('Main Page', 'my_theme'),
        'priority' => 30,
    ));

    //1  Register customization options for custom text
    $wp_customize->add_setting('main_title', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('custom_text_control', array(
        'label' => __('Title', 'my_theme'),
        'section' => 'custom_text_link_image_section',
        'settings' => 'main_title',
        'type' => 'textarea',
    ));

    //2  Register customization options for custom text
    $wp_customize->add_setting('main_discription', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('custom_text_control_discription', array(
        'label' => __('Beschreibung', 'my_theme'),
        'section' => 'custom_text_link_image_section',
        'settings' => 'main_discription',
        'type' => 'textarea',
    ));



    //3  Register customization options for custom link
    $wp_customize->add_setting('custom_link', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('custom_link_control', array(
        'label' => __('Custom Link', 'my_theme'),
        'section' => 'custom_text_link_image_section',
        'settings' => 'custom_link',
        'type' => 'text',
    ));

    //4 Register customization options for custom image
    $wp_customize->add_setting('custom_image_main', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_image_control', array(
        'label' => __('Custom Image', 'my_theme'),
        'section' => 'custom_text_link_image_section',
        'settings' => 'custom_image_main',
    )));
}





// Section 2 Über uns
add_action('customize_register', 'customize_aboutus');
function customize_aboutus($wp_customize)
{
    // Add a new section for custom text and link
    $wp_customize->add_section('about_us_section', array(
        'title' => __('Über uns', 'my_theme'),
        'priority' => 30,
    ));

    // custom text title
    $wp_customize->add_setting('about_title', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('custom_text_title', array(
        'label' => __('Title', 'my_theme'),
        'section' => 'about_us_section',
        'settings' => 'about_title',
        'type' => 'textarea',
    ));

    //  custom text discription
    $wp_customize->add_setting('about_dis', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('custom_text_dis', array(
        'label' => __('Beschreibung', 'my_theme'),
        'section' => 'about_us_section',
        'settings' => 'about_dis',
        'type' => 'textarea',
    ));

    // Register customization options for custom link
    $wp_customize->add_setting('about_link', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('custom_link_about', array(
        'label' => __('Link', 'my_theme'),
        'section' => 'about_us_section',
        'settings' => 'about_link',
        'type' => 'text',
    ));

    // Register customization options for custom image
    $wp_customize->add_setting('custom_image_about', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_image_control_about', array(
        'label' => __('Custom Image', 'my_theme'),
        'section' => 'about_us_section',
        'settings' => 'custom_image_about',
    )));
}



//Logo image


// Section 2 Über uns
add_action('customize_register', 'customize_logo_image');
function customize_logo_image($wp_customize)
{
    // Add a new section for custom text and link
    $wp_customize->add_section('image_section', array(
        'title' => __('Logo', 'my_theme'),
        'priority' => 30,
    ));



    // Register customization options for custom image
    $wp_customize->add_setting('custom_logo', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_image_control_about', array(
        'label' => __('Custom Image', 'my_theme'),
        'section' => 'image_section',
        'settings' => 'custom_logo',
    )));
}
