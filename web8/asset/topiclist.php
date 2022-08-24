<div class="tilelist">
	<div class="inner">
		<ul>
<?php
$args = array( 'posts_per_page' => 8, 'post_type' => 'topic', 'orderby' => 'date' );
$posts = get_posts( $args );
foreach ( $posts as $post ) : setup_postdata( $post );
	$terms = get_the_terms($post->ID, 'topiccat');
	if($terms) {
	  foreach( $terms as $term ) {
	    $cat = get_term($term->term_id, 'topiccat');
	    $term_name = $cat->name;
	  }
	}
	$href = get_permalink($post->ID);

  //アイキャッチ画像があればそれを使う
  if(get_post_thumbnail_id($post->ID)){
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'topic_thumb_pc' );
    $img_url = $thumb['0'];

  //アイキャッチ画像が無ければ本文中の画像を取得
  }elseif(get_content_first_image($post)){
    $attachment = get_content_first_image($post);
    $thumb = wp_get_attachment_image_src( $attachment->ID, 'topic_thumb_pc' );
    $img_url = $thumb['0'];

  //アイキャッチ画像も本文中の画像もなければ固定画像を表示
  }else{
    $img_url = get_bloginfo('template_url') . "/images/common_dummy_square.png";
  }

	//PC,SPで本文抜粋文字数を変更
	if(!is_mobile()){
		$exc_cut = 40;
	} else {
		$exc_cut = 15;
	}
?>
			<li>
				<a href="<?php echo $href; ?>" title="">
					<div class="pic">
						<img src="<?php echo $img_url; ?>" alt="<?php the_title(); ?>">
					</div>
					<div class="desc">
						<h3><?php the_title(); ?></h3>
						<p><?php echo mb_substr(get_the_excerpt(), 0, $exc_cut); ?></p>
						<p class="catname">[<?php echo $term_name; ?>]</p>
					</div>
				</a>
			</li>
<?php endforeach; wp_reset_postdata(); ?>
		</ul>

		<a class="btn_topic" href="<?php echo get_bloginfo('url'); ?>/topics" title="記事一覧">記事一覧</a>

	</div>
</div><!-- /#topiclist -->
