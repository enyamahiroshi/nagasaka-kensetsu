<?php
//
//	H1タイトル
//
?>
<?php // ページ ---------------------------------------------------------------- ?>
<?php
//お住まい訪問記
if( is_page( 'customer_w' ) ): ?>
<h1 class="title_page">お住まい訪問記</h1>
<?php
//その他
elseif( is_page() ): ?>
<h1 class="title_page"><?php the_title(); ?></h1>

<?php // アーカイブ ---------------------------------------------------------------- ?>
<?php
//カスタム投稿：施工事例のアーカイブ
elseif( is_post_type_archive('works') || is_tax('works') ): ?>
<h1 class="title_page">自由設計住宅 施工事例</h1>

<?php
//カテゴリー：イベント
elseif( is_archive( 'event' ) ): ?>
<h1 class="title_page">イベント</h1>

<?php
//その他
elseif( is_archive() ): ?>
<h1 class="title_page"><?php the_title(); ?></h1>

<?php // カスタムポスト ---------------------------------------------------------------- ?>
<?php
//施工事例
elseif( ( get_post_type() == 'works') ): ?>
<h1 class="title_page">自由設計住宅 施工事例</h1>

<?php // シングル ---------------------------------------------------------------- ?>
<?php
//カテゴリー イベント に含まれる
elseif( in_category( 'event' ) ): ?>
<h1 class="title_page">イベント</h1>

<?php
//その他
elseif( is_single() ): ?>
<h1 class="title_page">お知らせ</h1>

<?php // 上記以外 ---------------------------------------------------------------- ?>
<?php else: ?>
<h1 class="title_page"><?php the_title(); ?></h1>

<?php endif; ?>
