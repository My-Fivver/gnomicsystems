<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?> )" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    <?php bloginfo('name'); ?>
    <?php is_front_page() ? bloginfo('discription') :  wp_title(); ?>
  </title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />

  <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet" />

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

<style>
        <?php
        // Get the value of the custom_image setting
        $custom_image_url = get_theme_mod('custom_image_main', '');

        // Output inline CSS using the custom_image URL
        if ($custom_image_url) {
            echo '.full-screen {
                    background-image: url("' . esc_url($custom_image_url) . '");
                }';
        }
        ?>
    </style>
  <?php wp_head(); ?>
</head>


<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <?php
      // Custom image
      $custom_image = get_theme_mod('custom_logo');
      if (!empty($custom_image)) {
        echo '<img class="img-fluid "  src="' . esc_url($custom_image) . '" alt="Custom Image">';
      }
      ?>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <?php
          wp_nav_menu(array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            // 'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          ));
          ?>
        </ul>
      </div>
    </div>
  </nav>