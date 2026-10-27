<?php
add_action('after_setup_theme', function () {
  add_theme_support('editor-styles');
  add_editor_style('style.css');
});
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('techno-onest','https://fonts.googleapis.com/css2?family=Onest:wght@400;500;600;700;800&display=swap',[],null);
  wp_enqueue_style('techno-style',get_stylesheet_uri(),[],wp_get_theme()->get('Version'));
});