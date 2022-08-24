<?php
/* -------------------------------------------------------------
//  カスタム投稿タイプをファイル(functions/edit-custom-post-type.php)から読み込む
//  デフォルトの「投稿」ポストの編集
//  ダッシュボードサイドメニューの並び替え設定
// ------------------------------------------------------------*/
include_once("functions/edit-custom-post-type.php");
/* -------------------------------------------------------------
//  コンテンツマーケティング採用時
// ------------------------------------------------------------*/
//include_once("functions/edit-custom-post-type_topic.php");

/* -------------------------------------------------------------
//  自動更新設定
// ------------------------------------------------------------*/
//プラグインの自動更新を有効化
add_filter( 'auto_update_plugin', '__return_true' );
//テーマの自動更新を有効化
//add_filter( 'auto_update_theme', '__return_true' );
//メジャーアップグレードの自動更新を有効化
add_filter( 'allow_major_auto_core_updates', '__return_true' );

/* -------------------------------------------------------------
//  ウィジェットの設定
// ------------------------------------------------------------*/
include_once("functions/edit-widjet.php");

/* -------------------------------------------------------------
//  wp_head()で読み込むJSを一元管理
// ------------------------------------------------------------*/
include_once("functions/inc-js.php");

/* -------------------------------------------------------------
//  wordpress デフォルト設定変更
// ------------------------------------------------------------*/
remove_action('wp_head', 'rsd_link');                         /* Really Simple Discoveryリンクの削除 */
remove_action('wp_head', 'wlwmanifest_link');                 /* Windows Live Writerの削除 */
remove_action('wp_head', 'wp_generator');                     /* WPのバージョン削除 */
remove_action('wp_head', 'index_rel_link' );                  /* linkタグの削除 */
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');  /* link rel='next…'関連の削除 */
remove_action('wp_head', 'parent_post_rel_link', 10, 0 );     /* link rel='next…'関連の削除 */
remove_action('wp_head', 'start_post_rel_link', 10, 0 );      /* link rel='next…'関連の削除 */
remove_action('wp_head', 'wp_shortlink_wp_head');             /* ショートリンクの削除 */
remove_action('wp_head', 'feed_links', 2 );                   /* サイト全体のフィードの削除*/
remove_action('wp_head', 'feed_links_extra',3);               /* コメントフィードの削除 */


/* -------------------------------------------------------------
//  絵文字無効化
// ------------------------------------------------------------*/
function disable_emoji() {
     remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
     remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
     remove_action( 'wp_print_styles', 'print_emoji_styles' );
     remove_action( 'admin_print_styles', 'print_emoji_styles' );
     remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
     remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
     remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'disable_emoji' );


/* -------------------------------------------------------------
//  投稿時の設定
// ------------------------------------------------------------*/
//リビジョンの無効化
define('WP_POST_REVISIONS', false);
/*
  全てのタグ・全ての属性を許可（空の <span> タグや <div> タグなどが削除されるのを防ぐ）
  <a> タグに全てのタグを入れられるようにする
  自動的に <p> タグで囲われることを防ぐ
  http://qiita.com/jyokyoku/items/c560b0d1eacc1df61620
*/
function override_mce_options( $init_array ) {
    global $allowedposttags;
    $init_array['valid_elements']          = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';
    $init_array['valid_children']          = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']';
    $init_array['indent']                  = true;
    $init_array['wpautop']                 = false;
    $init_array['force_p_newlines']        = false;
    return $init_array;
}

add_filter( 'tiny_mce_before_init', 'override_mce_options' );


/* -------------------------------------------------------------
//  body_classでスラッグを出力する
//  http://terabenote.net/archives/1712/
// ------------------------------------------------------------*/
function pagename_class($classes = '') {
  if (is_page()) {
    $page = get_page(get_the_ID());
    $classes[] = "page-" . $page->post_name;
  }
  return $classes;
}
add_filter('body_class','pagename_class');


/* -------------------------------------------------------------
//  現在のページのページスラッグを表示する
//  <?php echo get_page_slag($wp_query->post->ID); ?>で取得出来る
// ------------------------------------------------------------*/
function get_page_slag($page_id) {
	$page = get_page($page_id);
	return $page->post_name;
}


/* -------------------------------------------------------------
//  ページスラッグからIDを取得する
// ------------------------------------------------------------*/
function get_ids_from_slugs($slugs){
  $slugs = preg_split("/,¥s?/", $slugs);
  $ids = array();
  foreach($slugs as $page_slug){
    $page = get_page_by_path($page_slug);
    array_push($ids, $page->ID);
  }
  return implode(",", $ids);
}


/* -------------------------------------------------------------
//  固定ページの親ページと子ページをスラッグで判定する：http://qiita.com/thanks2music@github/items/5ee9151592d35eef3bd1
//  if (is_page('hoge') || is_parent_slug() === 'hoge') {…} で出力
// ------------------------------------------------------------*/
function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}


/* -------------------------------------------------------------
//  ▼有効化
//    カスタムメニュー
//    アイキャッチ画像
//    エディタスタイル
// ------------------------------------------------------------*/
add_theme_support('menus');
// カスタムメニューの li に付与される要らないクラスを削除する
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
    return is_array($var) ? array_intersect($var,  array( 'current-menu-item' , 'nav01', 'nav02', 'nav03', 'nav04') ) : '';
}
add_theme_support('post-thumbnails');
function my_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'after_setup_theme', 'my_theme_add_editor_styles' );

/* -------------------------------------------------------------
//  既定のアイキャッチ画像サイズを変更する
// ------------------------------------------------------------*/
//set_post_thumbnail_size( 190, 130, array( 'center', 'center')  ); // 元の画像の真ん中を基準とした切り出し
/* -------------------------------------------------------------
//  新しい画像サイズを追加する
// ------------------------------------------------------------*/
//add_image_size( 'no-trim', 1000, 1000, false );
//add_image_size( 'no-trim-small', 600, 600, false );
//add_image_size( 'trim', 1000, 800, true );
//add_image_size( 'trim-small', 600, 480, true );
//add_image_size( 'trim-xsmall', 300, 240, true );



/* -------------------------------------------------------------
//  画像挿入時の添付ファイルのページの選択肢を消す
//  http://www.seotemplate.biz/blog/wordpress-tips/12786/#ga01
// ------------------------------------------------------------*/
function media_script_buffer_start() {
  ob_start();
}
function media_script_buffer_get() {
  $scripts = ob_get_clean();
  $scripts = preg_replace( '#<option value="post">.*?</option>#s', '', $scripts );
  echo $scripts;
}
function gs_attachment_template_redirect() {
  //attachment_id=ページに404を返す
  if ( is_attachment() ) { // 添付ファイルの個別ページなら
    global $wp_query;
    $wp_query->set_404();
    status_header(404);
  }
}
add_action( 'post-upload-ui', 'media_script_buffer_start' );
add_action( 'print_media_templates', 'media_script_buffer_get' );
add_action( 'template_redirect', 'gs_attachment_template_redirect' );


/* -------------------------------------------------------------
//  アーカイブページで現在のカテゴリー・タグ・タームを取得する
// ------------------------------------------------------------*/
function get_current_term(){
  $id;
  $tax_slug;
  if(is_category()){
    $tax_slug = "category";
    $id = get_query_var('cat');
  }else if(is_tag()){
    $tax_slug = "post_tag";
    $id = get_query_var('tag_id');
  }else if(is_tax()){
    $tax_slug = get_query_var('taxonomy');
    $term_slug = get_query_var('term');
    $term = get_term_by("slug",$term_slug,$tax_slug);
    $id = $term->term_id;
  }
  return get_term($id,$tax_slug);
}


/* -------------------------------------------------------------
//  1ページに表示する最大投稿数をページごとに変える
//  http://daisukebe.net/wordpress-change-posts-per-page/
// ------------------------------------------------------------*/
function change_pre_get_posts($query){
  if(!is_admin() && $query->is_main_query()){
    /*
    // フロントページ
    if(is_front_page()){
      $query->set('posts_per_page', 5);
    }
    // カテゴリーアーカイブ
    if(is_category()){
      $query->set('posts_per_page', 15);
    }
    // タグアーカイブ
    if(is_tag()){
      $query->set('posts_per_page', 20);
    }
    */
    // カスタム投稿（施工事例）
    if(is_post_type_archive('works')){
      $query->set('posts_per_page', 24);
    }
  }
}
add_action('pre_get_posts', 'change_pre_get_posts');


/* -------------------------------------------------------------
//  テンプレート内でスマホ、PCで条件分岐する(http://wispyon.com/is-mobile-category/)
<?php if( is_mobile() ) { ?>
<!--ここに書くと、スマホのみで表示・実行されます-->
<?php } else { ?>
<!--ここに書くと、タブレット＆PCのみで表示・実行されます-->
<?php } ?>
// ------------------------------------------------------------*/
//スマホのみ条件分岐
function is_mobile(){
    $useragents = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        'Android.*Mobile', // 1.5+ Android *** Only mobile
        'Windows.*Phone', // *** Windows Phone
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}


/* -------------------------------------------------------------
//  郵便番号入力時に自動で住所入力
//  http://megane-blog.com/2014/08/06/1204
// ------------------------------------------------------------*/
function ajaxzip3_scripts() {
    wp_enqueue_script( 'ajaxzip3-script', 'https://ajaxzip3.googlecode.com/svn/trunk/ajaxzip3/ajaxzip3-https.js', array( 'jquery' ), '20140807', true );
}
add_action( 'wp_enqueue_scripts', 'ajaxzip3_scripts' );


/****************************************************************
 ダッシュボード関連
*****************************************************************/
/* -------------------------------------------------------------
//  ログイン画面：ロゴの変更（ロゴ画像はテンプレートの /img/admin/logo_login.png）
//  リンク先は下のCSS（pointer-events: none;）で発動しないようにしている。
//  リンクする必要がある場合はCSSを修正して WP Total Hack プラグインで行う。
// ------------------------------------------------------------*/
function custom_login_logo() {
 echo '<style type="text/css">h1 a { pointer-events: none; display: block; width: 320px !important; height: 84px !important; background: url(' . get_stylesheet_directory_uri() . '/img/admin/logo_login.png) 50% 50% no-repeat !important; }</style>';
 }
add_action('login_head', 'custom_login_logo');


/* -------------------------------------------------------------
//  ダッシュボード左上のロゴを非表示にする
// ------------------------------------------------------------*/
function hide_before_admin_bar_render() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu( 'wp-logo' );
}
add_action('wp_before_admin_bar_render', 'hide_before_admin_bar_render' );


/* -------------------------------------------------------------
//  管理画面のサイドメニュー表示をユーザーレベルで制御
// ------------------------------------------------------------*/
// ▽▽▽ 管理者(level10)以外の非表示設定
if (!current_user_can('level_10')) { //level10（管理者）以外のユーザーの場合

	// バージョンアップ通知を非表示にする
	function update_nag_hide() {
    	remove_action( 'admin_notices', 'update_nag', 3 );
	}
	add_action( 'admin_init', 'update_nag_hide' );

	// 管理バーの表示オプションを消して変更できなくする
	function remove_screen_options(){
		return true;
	}
	add_filter( 'screen_options_show_screen', 'remove_screen_options' );

	// 管理バーのメニューの一部を非表示
	function my_admin_head(){
	 echo '<style type="text/css">#contextual-help-link-wrap {display:none;}</style>';
	 echo '<style type="text/css">#wp-admin-bar-wpseo-menu {display:none;}</style>'; //wepSEO
	}
	add_action('admin_head', 'my_admin_head');

	// ダッシュボードのウィジェット非表示
	function example_remove_dashboard_widgets() {
	 global $wp_meta_boxes;
	 // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); // 現在の状況
	 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // 最近のコメント
	 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']); // 被リンク
	 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']); // プラグイン
	 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // クイック投稿
	 // unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']); // 最近の下書き
	 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // WordPressブログ
	 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); // WordPressフォーラム
	}
	add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets');

	// ダッシュボードのメニューを非表示（参考：http://htdsn.com/blog/archives/wordpress-admin-customize.html）
	function remove_menus () {
	 remove_menu_page('wpcf7'); //Contact Form 7 を非表示
	 remove_menu_page('wpseo_dashboard'); //wpSEO を非表示
	 remove_menu_page('mw-wp-form'); //MW WP Form を非表示
   remove_menu_page( 'jetpack' ); //jetpack を非表示
	 global $menu;
	 // unset($menu[2]); // ダッシュボード
	 // unset($menu[4]); // メニューの線1
	 // unset($menu[5]); // 投稿
	 // unset($menu[10]); // メディア
	 unset($menu[15]); // リンク
	 // unset($menu[20]); // ページ
	 unset($menu[25]); // コメント
	 unset($menu[59]); // メニューの線2
	 unset($menu[60]); // テーマ
	 unset($menu[65]); // プラグイン
	 // unset($menu[70]); // プロフィール
	 unset($menu[75]); // ツール
	 unset($menu[80]); // 設定
	 unset($menu[90]); // メニューの線3
	}
	add_action('admin_menu', 'remove_menus');

	// CSSを反映
	add_action('admin_print_styles', 'admin_css_custom');
	function admin_css_custom() {

		echo '<style>'
		. '.switch-html {display: none;}' // テキストエディタ切り替えタブを非表示
		. 'select[name="seo_filter"] {display: none;}' // プラグイン Yost SEO で追加される絞込検索「すべてのSEOスコア」を非表示
		. '</style>';
	}

}
// △△△ ここまで：管理者(level10)以外の非表示設定


/* -------------------------------------------------------------
//  フッターのWordPressリンクを非表示に
// ------------------------------------------------------------*/
function custom_admin_footer() {
 echo ' ';
 }
add_filter('admin_footer_text', 'custom_admin_footer');


/* -------------------------------------------------------------
//  プロフィール内の項目を削除
// ------------------------------------------------------------*/
function custom_profile_fields( $contactmethods ) {
	unset($contactmethods['aim']);		// AIM
	unset($contactmethods['yim']);		// Yahoo IM
	unset($contactmethods['jabber']);	// Jabber / Google Talk
	return $contactmethods;
}
add_filter('user_contactmethods','custom_profile_fields',10,1);



?>
