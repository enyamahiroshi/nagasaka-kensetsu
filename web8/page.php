<?php get_header(); ?>

<?php /*
//
// 下層ページのベース。ここから各ページ.php にパーツをコピペして利用
//
*/ ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php require_once("asset/h1_title.php"); //H1タイトル読込み ?>

<?php the_content(); ?>

<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
