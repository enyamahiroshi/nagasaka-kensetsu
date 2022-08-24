<!DOCTYPE html>
<html lang="ja">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title><?php wp_title('&laquo;', true, 'right'); ?></title>
<?php // FontAwesome CDN ?>
<script src="https://use.fontawesome.com/560b345d17.js"></script>
<?php // スライダー（Slick）：http://kenwheeler.github.io/slick/ ?>
<?php if(is_front_page()): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick/slick.css" media="all">
<?php endif; ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" media="all">
<?php // fotorama ?>
<?php if( is_singular('works') ): //施工事例個別ページ ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fotorama/fotorama.css" media="all">
<?php endif; ?>
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-68172122-1', 'auto');
  ga('send', 'pageview');
</script>
</head>

<body <?php body_class(); ?>>

	<header>
		<div class="header_wrap">
			<?php // ヘッダーのナビエリア ?>
			<div class="header_navi_area">
				<?php // ヘッダーのナビ上 ?>
				<div class="header_navi_top">
					<?php // ロゴ ?>
					<div class="header_logo">
						<a href="<?php echo esc_html(home_url()); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" alt="長坂建設"></a>
					</div>
					<?php // サブメニュー ?>
					<div class="header_navi_submenu">
						<?php // グローバルナビ（カスタムメニュー呼び出し）
						wp_nav_menu(array(
							'menu' => 'subnavi', // 呼び出すカスタムメニュー名
							'menu_id' => '', // ul 要素に適用するID : {メニューのスラッグ}-{連番}
							'menu_class' => 'subnavi', // ul 要素に適用するCSS クラス名 : menu
						)); ?>
					</div>
					<?php //スマホ開閉メニュー ?>
					<div class="header_navi_spmenu">
					<?php // グローバルナビの開閉ボタン ?>
					<div class="swt_gnavi"><span class="swt_btn"></span><span class="swt_btn_txt">MENU</span></div>
					<?php // グローバルナビ（カスタムメニュー呼び出し）
					wp_nav_menu(array(
						'menu' => 'gnavi_sp', // 呼び出すカスタムメニュー名
						'menu_id' => '', // ul要素に適用するID : {メニューのスラッグ}-{連番}
						'menu_class' => 'gnavi_sp', // ul要素に適用するCSS クラス名 : menu
					)); ?>
					</div>
				</div>
				<?php // ヘッダーのナビ下 ?>
				<div class="header_navi_bottom">
					<?php // メインメニュー ?>
					<div class="header_navi_mainmenu">
						<?php // グローバルナビ（カスタムメニュー呼び出し）
						wp_nav_menu(array(
							'menu' => 'gnavi', // 呼び出すカスタムメニュー名
							'menu_id' => '', // ul 要素に適用するID : {メニューのスラッグ}-{連番}
							'menu_class' => 'gnavi', // ul 要素に適用するCSS クラス名 : menu
						)); ?>
					</div>
				</div>
			</div><?php // .header_navi_area ?>
			<?php // WBエリア ?>
			<div class="header_wb_area">
					<div class="sns_area">
						<a href="https://twitter.com/officialnagaken" target="_blank" class="tw_button">twitter</a>
						<a href="http://blog.nagasaka-k.co.jp/" target="_blank" class="bl_button">blog</a>
					</div><!-- /sns_area -->
				<a href="https://www.wb-house.jp/" target="_blank" class="wb_logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/common/wb_logo.svg" alt="通気断熱WBロゴ">
				</a>
			</div>
			<?php // SPのみ お問い合わせ・資料請求エリア ?>
			<div class="header_contact_area">
				<a href="<?php echo esc_html(home_url()); ?>/contact/" class="header_contact_btn">
					<img src="<?php echo get_template_directory_uri(); ?>/img/common/header_contact_btn.png" alt="お問い合わせ・資料請求">
				</a>
			</div>
		</div><?php // .header_wrap ?>
    <?php // 地域ビルダー認定 ?>
    <div class="comment_our">
      <span>長坂建設は千曲市注文住宅着工棟数総合部門第1位です！<br>※2017年全国No.１ホームビルダー大全集より（JSK調べ）</span>
    </div>
	</header>

	<?php //メインビジュアル ?>
	<?php if( is_front_page() ): ?>
	<div class="wideslider">
		<ul>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/home/mv01.jpg" alt=""><em>上質な居心地を実感する「木」の家</em></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/home/mv02.jpg" alt=""><em>創業70年地域の皆様とともに</em></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/home/mv03.jpg" alt=""><em>信州の住まいの原点を考える</em></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/home/mv04.jpg" alt=""><em>深呼吸したくなる「木」の家</em></li>
		</ul>
	</div>
	<?php endif; ?>

	<div class="content_wrap">
		<?php //メインコンテンツボックスここから ?>
		<div class="main_content">

		<?php // パンくずとH1読込み（HOME、フォーム以外）
		if( !is_front_page() ): ?>
			<?php // YoastSEOのパンくず
			if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<div class="breadcrumbs">','</div>');
			} ?>
			<?php //H1タイトル読込み ?>
			<div class="title_page_wrap">
				<?php require_once("asset/h1_title.php"); ?>
			</div>
		<?php endif; ?>
