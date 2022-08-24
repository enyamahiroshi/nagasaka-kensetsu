<?php
/**********************************************************************************************************************
 デフォルトの「投稿」ポストの編集
**********************************************************************************************************************/

/* -------------------------------------------------------------
//  管理画面メニュー項目を名称変更（元は「投稿」）
// ------------------------------------------------------------*/
function edit_admin_menus() {
  global $menu;
  global $submenu;
  $menu[5][0] = 'お知らせ';
  $submenu['edit.php'][5][0] = 'すべての記事';
}
add_action('admin_menu', 'edit_admin_menus');



/**********************************************************************************************************************
 カスタム投稿タイプの設定
 function.php 内で読み込むことで使用可能
**********************************************************************************************************************/

/* -------------------------------------------------------------
//  ▼施工事例
// ------------------------------------------------------------*/
function works_custom_post_type(){
	//▼カスタム投稿タイプを作成
	$labels = array(
		'name'               => '施工事例', //管理画面などで表示する名前（単数形）
		'singular_name'      => '施工事例', //管理画面などで表示する名前（単数形）
		'menu_name'          => '施工事例', //管理画面メニューで表示する名前（nameより優先される）
		'add_new'            => '新規追加', //メニューの新規追加ボタンのラベル
		'add_new_item'       => '新規項目追加', //新規作成ページのタイトルに表示される名前
		'new_item'           => '新規項目', //一覧ページの「新規追加」ボタンのラベル
		'edit_item'          => '項目を編集', //編集ページのタイトルに表示される名前
		'view_item'          => '項目を表示', //編集ページの「投稿を表示」ボタンのラベル
		'search_items'       => '項目検索', //一覧ページの検索ボタンのラベル
		'not_found'          =>  '記事が見つかりません', //一覧ページに投稿が見つからなかったときに表示
		'not_found_in_trash' => 'ゴミ箱に記事はありません', //ゴミ箱に何も入っていないときに表示
		'parent_item_colon'  => ''
	);
	$args = array(
    'label' => 'works',
		'labels' => $labels,
		'descriptions' => '概要', //カスタム投稿ページの概要文
		'public' => true, //ユーザーが内容を投稿する場合true(通常はtrue)
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive'  => true, //アーカイブページを作成するか否かを設定(trueでindexページを作成)
		'hierarchical' => true, //階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
		'exclude_from_search' => false, //WPの検索機能から検索した際、検索対象に含めるか否かを設定（※trueの場合は検索対象に含めない）
		'menu_position' => 5,
		'supports' => array( //管理画面から投稿できる項目を設定
			'title', //タイトル表示を有効に
			'editor', //本文の表示を有効に
			//'custom-fields', //カスタムフィールド
			'thumbnail' //アイキャッチ画像
		)
	);
	register_post_type( 'works',$args );
  /*
	//▼カスタムタクソノミーを作成
	//カテゴリータイプ
	$args = array(
		'label'        => 'カテゴリー',
		'public'       => true,
		'show_ui'      => true,
		'hierarchical' => true, //階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
	);
	register_taxonomy( 'works_category','works',$args );
  */
	/*
	//タグタイプ
	$args = array(
		'label'        => 'タグ',
		'public'       => true,
		'show_ui'      => true,
		'hierarchical' => false, //階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
	);
	register_taxonomy( 'AAA_tag','AAA',$args );
	*/
}
add_action( 'init', 'works_custom_post_type' );

//管理画面の投稿一覧にカスタムタクソノミーの列を表示させる(http://cms-skill.com/tech/wordpress/entry-46.html)
function show_term_area( $defaults ) {
//$defaults['★タクソノミーの英語名★'] = '★タクソノミーの日本語名★';
$defaults['works_category'] = 'カテゴリー';
return $defaults;
}
//add_filter('manage_★投稿タイプの英語名★_posts_columns', 'show_term_area', 15, 1);
add_filter('manage_works_posts_columns', 'show_term_area', 15, 1);
function show_term_area_id($column_name, $id) {
//if( $column_name == '★タクソノミーの英語名★' )
if( $column_name == 'works_category' ) {
//$terms = $terms = get_the_terms( $id, '★タクソノミーの英語名★' );
$terms = $terms = get_the_terms( $id, 'works_category' );
$cnt = 0;
foreach($terms as $var) {
echo $cnt != 0 ? ", " : "";
//echo "<a href=\"" . get_admin_url() . "edit.php?★タクソノミーの英語名★=" . $var->slug . "&post_type=★投稿タイプの英語名★" . "\">" . $var->name . "</a>";
echo "<a href=\"" . get_admin_url() . "edit.php?works_category=" . $var->slug . "&post_type=works" . "\">" . $var->name . "</a>";
++$cnt;
}}}
//add_action('manage_★投稿タイプの英語名★_posts_custom_column', 'show_term_area_id', 15, 2);
add_action('manage_works_posts_custom_column', 'show_term_area_id', 15, 2);


/* -------------------------------------------------------------
//  ▼新築分譲住宅情報
// ------------------------------------------------------------*/
function tateuri_custom_post_type(){
	//▼カスタム投稿タイプを作成
	$labels = array(
		'name'               => '新築分譲住宅情報', //管理画面などで表示する名前（単数形）
		'singular_name'      => '新築分譲住宅情報', //管理画面などで表示する名前（単数形）
		'menu_name'          => '新築分譲住宅情報', //管理画面メニューで表示する名前（nameより優先される）
		'add_new'            => '新規追加', //メニューの新規追加ボタンのラベル
		'add_new_item'       => '新規項目追加', //新規作成ページのタイトルに表示される名前
		'new_item'           => '新規項目', //一覧ページの「新規追加」ボタンのラベル
		'edit_item'          => '項目を編集', //編集ページのタイトルに表示される名前
		'view_item'          => '項目を表示', //編集ページの「投稿を表示」ボタンのラベル
		'search_items'       => '項目検索', //一覧ページの検索ボタンのラベル
		'not_found'          =>  '記事が見つかりません', //一覧ページに投稿が見つからなかったときに表示
		'not_found_in_trash' => 'ゴミ箱に記事はありません', //ゴミ箱に何も入っていないときに表示
		'parent_item_colon'  => ''
	);
	$args = array(
    'label' => 'tateuri',
		'labels' => $labels,
		'descriptions' => '概要', //カスタム投稿ページの概要文
		'public' => true, //ユーザーが内容を投稿する場合true(通常はtrue)
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive'  => true, //アーカイブページを作成するか否かを設定(trueでindexページを作成)
		'hierarchical' => true, //階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
		'exclude_from_search' => false, //WPの検索機能から検索した際、検索対象に含めるか否かを設定（※trueの場合は検索対象に含めない）
		'menu_position' => 5,
		'supports' => array( //管理画面から投稿できる項目を設定
			'title', //タイトル表示を有効に
			//'editor', //本文の表示を有効に
			//'custom-fields', //カスタムフィールド
			//'thumbnail' //アイキャッチ画像
		)
	);
	register_post_type( 'tateuri',$args );
	//▼カスタムタクソノミーを作成
	//カテゴリータイプ
  /*
	$args = array(
		'label'        => 'カテゴリー',
		'public'       => true,
		'show_ui'      => true,
		'hierarchical' => true, //階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
	);
	register_taxonomy( 'tateuri_category','tateuri',$args );
  */
	/*
	//タグタイプ
	$args = array(
		'label'        => 'タグ',
		'public'       => true,
		'show_ui'      => true,
		'hierarchical' => false, //階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
	);
	register_taxonomy( 'AAA_tag','AAA',$args );
	*/
}
add_action( 'init', 'tateuri_custom_post_type' );



?>
