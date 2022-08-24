<?php get_header(); ?>

<?php // カテゴリー情報を取得
$cat = get_the_category();
$cat = $cat[0];
$cat_id = $cat->cat_ID; //カテゴリID
$cat_name = $cat->cat_name; //カテゴリ名
$cat_slag = $cat->category_nicename; //スラッグ名
$link = get_category_link($cat_id); //カテゴリへリンク
?>


<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>


<div class="content_wrap_middle">

<?php require_once("asset/h1_title.php"); //H1タイトル読込み ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
//投稿タイプにより日付の横に表示する文字を変える
$this_post_type = get_post_type( $post );
if($this_post_type == 'post'){
$post_type_class = 'cat_post';
$post_type_name = 'お知らせ';
} elseif($this_post_type == 'event'){
$post_type_class = 'cat_event';
$post_type_name = 'イベント';
}
?>
	<div class="entry_date"><?php the_time('Y.m.d'); ?></div>
	<div class="entry_category <?php echo $post_type_class; ?>"><?php echo $post_type_name; ?></div>
	<h2 class="single_title"><?php the_title(); ?></h2>
	<article class="mce">
	<?php the_content(); ?>
	</article>
<?php endwhile; endif; ?>

<?php //ページナビ（カスタムポストに対応var）
  $current_post_id = get_the_ID();
  $args = array(
			'post_type' => 'post',
			'posts_per_page' => -1,
			'cat' => $cat_id
  		);
  $the_query = new WP_Query( $args );
  $array = array();
  while ( $the_query->have_posts() ) : $the_query->the_post();
  	$array[] =  $post->ID;
  endwhile;
  wp_reset_postdata();
  $key = array_search($current_post_id, $array);
  $prev_post_id = $array[$key - 1];
  $next_post_id = $array[$key + 1];
  $prev = get_post($prev_post_id);
  $next = get_post($next_post_id);
?>
	<div class="pagenation">
		<div class="prev"><?php if($next_post_id): ?><a href="<?php echo get_permalink( $next_post_id ); ?>"><i class="fa fa-chevron-left"></i>前の記事へ</a><?php endif; ?></div>
		<div class="button"><a href="<?php echo esc_url(home_url()); ?>/news/"><i class="fa fa-undo"></i>一覧へ</a></div>
		<div class="next"><?php if($prev_post_id): ?><a href="<?php echo get_permalink( $prev_post_id ); ?>">次の記事へ<i class="fa fa-chevron-right"></i></a><?php endif; ?></div>
	</div>


</div><?php //.content_wrap_middle ?>


<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
