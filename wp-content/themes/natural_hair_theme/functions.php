<?php

function natural_hair_files() {
  wp_enqueue_style('natural_hair_main_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'natural_hair_files');

?>