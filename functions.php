<?php

add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style('css-of-parent', get_template_directory_uri() . '/style.css');
});

require_once 'mywidget.php';
add_action('widgets_init', function() {
    register_widget('MyWidget');
});
