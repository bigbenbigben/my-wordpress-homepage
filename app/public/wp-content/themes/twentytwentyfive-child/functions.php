<?php

function  theme_enqueue_styles() {
    //親テーマのCSSファイルを読み込む
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css', array());
    //子テーマのCSSファイルを読み込む
    wp_enqueue_style('child-style', get_stylesheet_uri(),array('parent-style'));
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

?>