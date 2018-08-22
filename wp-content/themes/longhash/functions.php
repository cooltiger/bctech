<?php

//======================================================================
// 1. Theme set up
//======================================================================
if ( ! function_exists( 'karaoke_setup' ) ) {
  function karaoke_setup() {

    // アイキャッチを使用できるようにします。
    add_theme_support( 'post-thumbnails' );

    // アイキャッチ画像のサイズを設定します
    set_post_thumbnail_size( 300, 200, true );

  }
}
add_action( 'after_setup_theme', 'karaoke_setup' );


//概要（抜粋）の省略文字
function my_excerpt_more($more) {
  return '…';
}
add_filter('excerpt_more', 'my_excerpt_more');

//概要（抜粋）の文字数調整
function my_excerpt_length($length) {
  return 90;
}
add_filter('excerpt_length', 'my_excerpt_length');

?>