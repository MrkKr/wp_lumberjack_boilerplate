<?php

namespace App\Functions;

class Assets 
{
  /**
   * Enqueue scripts
   */
  public static function load($filter = 'wp_enqueue_scripts', $priority = 10)
  {
    // Register the filter
    add_filter($filter, function ($paths) {
      // styles
      wp_register_style('main-css', get_template_directory_uri() . '/dist/css/style.min.css', false, null);
      wp_enqueue_style('main-css');
      // scripts
      wp_register_script('main-scripts', get_template_directory_uri() . '/dist/js/script.min.js', array('jquery'), null, true);
      wp_enqueue_script('main-scripts');
    }, $priority);
  }
}