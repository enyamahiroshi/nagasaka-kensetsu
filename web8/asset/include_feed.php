	<?php
	// 外部のフィードを記事中の最初の画像と表示する方法
	// 参考：http://2inc.org/blog/2012/07/15/1814/
	include_once( ABSPATH . WPINC . '/feed.php' );
	$rss = fetch_feed ( $feedurl ); // 読み込むfeed
	if ( !is_wp_error( $rss ) ) {
		$rss->set_item_limit( 10 );
		$rss->set_cache_duration( 0 );
		$rss->init();
		$maxitems = $rss->get_item_quantity( 4 ); // 表示する記事の数
		$rss_items = $rss->get_items( 0, $maxitems );
	}
	?>
	<?php if ( !empty( $maxitems ) ) : ?>
	<ul class="feed-list">
    <?php foreach ( $rss_items as $item ) : ?>
    <li class="feed-list-block">
      <a href="<?php echo $item->get_permalink(); ?>" class="feed-list-item">
        <?php
        $first_img = '';
        // 記事中の1枚目の画像を取得
        if ( preg_match( '/<img.+?src=[\'"]([^\'"]+?)[\'"].*?>/msi', $item->get_content(), $matches ) ) { $first_img = $matches[1]; } ?>
        <?php if ( !empty( $first_img ) ) : ?>
        <div class="feed-list-img-wrap">
          <img src="<?php echo esc_attr( $first_img ); ?>" alt="<?php echo $item->get_title(); ?>" class="feed-list-img">
        </div>
				<?php else: ?>
				<div class="feed-list-noimg">no image</div>
        <?php endif; ?>
        <div class="feed-list-txt_box">
					<div class="feed-list-date"><?php echo $item->get_date("Y.m.d"); ?></div>
					<h3 class="feed-list-title"><?php echo $item->get_title(); ?></h3>
				</div>
      </a>
    </li>
    <?php endforeach; ?>
	</ul>
	<?php else: ?>
	<p class="not-entry">
		記事がありません
	</p>
	<?php endif; ?>
