<?php
/* -------------------------------------------------------------
//  wp_head()で読み込むjsを一元管理
// ------------------------------------------------------------*/

function inc_scripts() {

  /* ----------- wp標準のjquery読込み */
  wp_enqueue_script( 'jquery' );


  /* ----------- ここからサイトごと個別に読み込むjs */

  // スライダー（fullwideslider）：http://black-flag.net/jquery/20130709-4710.html
  // スライダーの設定は fullwideslider.js ファイル内へ記述
  wp_enqueue_script( 'fullwideslider',get_template_directory_uri().'/js/fullwideslider.js',array('jquery'));

  // スライダー（Slick）：http://kenwheeler.github.io/slick/
  wp_enqueue_script( 'slick',get_template_directory_uri().'/js/slick/slick.min.js',array('jquery'));

  // 施工事例
if( is_singular('works') ){
  // fotorama：http://fotorama.io/
  wp_enqueue_script( 'fotorama',get_template_directory_uri().'/js/fotorama.js',array('jquery'));
}


  // jqueryプラグインのトリガーやセッティング用
  //wp_enqueue_script( 'jquery-settings',get_template_directory_uri().'/js/jquery-settings.js',array('jquery'));
  // 共通js
  wp_enqueue_script( 'script',get_template_directory_uri().'/js/script.js',array('jquery'));

}
  add_action( 'wp_enqueue_scripts', 'inc_scripts' );

?>
