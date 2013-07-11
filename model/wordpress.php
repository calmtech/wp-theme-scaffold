
<?php
/**
 * WordPressコア用の設定
 *
 * @package WordPress
 * @subpackage My Theme
 */
//メニュー機能の有効化
add_theme_support( 'menus' );
//アイキャッチの有効化
add_theme_support( 'post-thumbnails' );

//管理画面以外ではCDNから各スクリプト読み込み
function load_cdn() {
	if ( !is_admin() ) {
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', array(), '1.8.3');
	}
}
add_action('init', 'load_cdn');
?>