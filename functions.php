<?php

/* 子テーマのCSS読み込み */
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
  wp_enqueue_style('google-fonts-montserrat', '//fonts.googleapis.com/css?family=Montserrat:500,700display=swap', array(), null);
  wp_enqueue_style('google-fonts-notosans', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap', array(), null);
  wp_enqueue_style('material-icons', '//fonts.googleapis.com/icon?family=Material+Icons+Round', array(), null);
  wp_enqueue_style('reset', get_template_directory_uri() . '/css/ress.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('style'));
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), false, true);
}

//以下に処理を記載する

/* 一例としてGoogleフォントを読み込んでいます。不要なら削除してください。 */
function my_css_js()
{
  wp_enqueue_style('google-fonts-playfair', '//fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&display=swap"', array(), null);
}
add_action('wp_enqueue_scripts', 'my_css_js');
