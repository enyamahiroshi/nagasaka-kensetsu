<?php
/*
// jquery Slick を使用してエントリーをスワイプ表示 : http://kenwheeler.github.io/slick/
// header.php - css , footer.php - jquery
*/
?>
	<?php
	// 記事取得ループ
	global $post;
	$args = array(
		'posts_per_page' => 6, // 取得する記事数
		'post_type' => 'event', // ポストタイプ
	);
	$items = get_posts( $args );
  if($items):?>
  <ul class="entry-slider">
	<?php foreach( $items as $post ) : setup_postdata($post); ?>
	<li class="entry-slider-li">
		<a href="<?php the_permalink() ?>" class="entry-slider-box">
			<div class="entry-slider-img"><?php the_post_thumbnail('medium'); ?></div>
			<div class="entry-slider-txt-box">
				<div class="entry-slider-date"><?php the_time('Y.m.d') ?> </div>
				<h3 class="entry-slider-title"><?php the_title(); ?></h3>
				<div class="entry-slider-txt"><?php echo mb_substr(get_the_excerpt(), 0, 30); ?>…</div>
			</div>
		</a>
	</li>
	<?php endforeach; wp_reset_postdata(); ?>
  </ul>
  <?php else: ?>
    <div class="coming_msg">お楽しみに！</div>
  <?php endif; ?>
