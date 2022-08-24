<?php
//  カスタムポスト[施工事例]詳細ページ
get_header();
require_once TEMPLATEPATH . '/asset/gallery-functions.php'; //記事に投稿されたギャラリーをデザインするファイルを読込み
?>

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

	<div class="works_single_title_wrap">
		<h2 class="works_single_title"><?php the_title(); ?></h2>
	</div>

<?php
//カスタムフィールドの値を読み込み(http://kotori-blog.com/wordpress/acf_output/)
//コメント：Wysiwyg エディタ
$cf_comment = get_field('cf_comment');
//建築地
$cf_prace = get_field('cf_prace');
//家族構成
$cf_family = get_field('cf_family');
//敷地面積(m2)
$cf_shikichi_m = get_field('cf_shikichi_m');
//敷地面積(坪)
$cf_shikichi_t = get_field('cf_shikichi_t');
//延床面積(m2)
$cf_nobeyuka_m = get_field('cf_nobeyuka_m');
//延床面積(坪)
$cf_nobeyuka_t = get_field('cf_nobeyuka_t');
//工法
$cf_build = get_field('cf_build');
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php /*
	<?php //施工データ：カスタムフィールド内容表示 ?>
	<h4 class="works_data_title">施工データ</h4>
	<div class="works_data">
		<ul class="works_data_list">
			<?php if($cf_prace){ echo "<li>建築地：".$cf_prace."</li>"; } ?>
			<?php if($cf_family){ echo "<li>家族構成：".$cf_family."</li>"; } ?>
		</ul>
		<ul class="works_data_list">
			<?php if($cf_build){ echo "<li>工法：".$cf_build."</li>"; } ?>
			<?php
			if($cf_shikichi_m){ echo "<li>敷地面積：".$cf_shikichi_m." m<sup>2</sup>"; }
			if($cf_shikichi_t){ echo "（".$cf_shikichi_t." 坪）"; }
			if($cf_shikichi_m || $cf_shikichi_t){ echo "</li>"; }
			?>
			<?php
			if($cf_nobeyuka_m){ echo "<li>延床面積：".$cf_nobeyuka_m." m<sup>2</sup>"; }
			if($cf_nobeyuka_t){ echo "（".$cf_nobeyuka_t." 坪）"; }
			if($cf_nobeyuka_m || $cf_nobeyuka_t){ echo "</li>"; }
			?>
		</ul>
	</div>
  */ ?>

	<?php //ギャラリースライダー表示 ?>
	<div class="works_detail">
		<?php
		// スライダー：記事に投稿されたギャラリーを表示（スライド用にフルサイズ表示）
		// 但し、上で読み込む gallery-functions.php で内容が書き換えられる
		the_content();
		?>
	</div>

	<?php //コメント：カスタムフィールド内容表示 ?>
	<div class="works_comment">
		<?php if($cf_comment){ echo $cf_comment; } ?>
	</div>

<?php endwhile; endif; ?>


<?php //ページナビ（カスタムポストに対応var）
  $current_post_id = get_the_ID();
  $args = array(
			'post_type' => 'works',
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
  $after_post_id = $array[$key + 1];
  $before_post_id = $array[$key - 1];
  $after = get_post($after_post_id);
  $before = get_post($before_post_id);
?>
	<div class="pagenation">
		<div class="prev"><?php if($before_post_id): ?><a href="<?php echo get_permalink( $before_post_id ); ?>"><i class="fa fa-chevron-left"></i>前の事例へ</a><?php endif; ?></div>
		<div class="button"><a href="<?php echo esc_url(home_url('')); ?>/works"><i class="fa fa-undo"></i>一覧</a></div>
		<div class="next"><?php if($after_post_id): ?><a href="<?php echo get_permalink( $after_post_id ); ?>">次の事例へ<i class="fa fa-chevron-right"></i></a><?php endif; ?></div>
	</div>


</div><?php //.content_wrap_ ?>


<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
