<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_wrap_middle">


	<?php
	//個別ページに一覧表示させるページを作る
	//http://idotdesign.net/blog/web/wordpress/all-post-template/
	?>
	<?php
	$paged = (int) get_query_var('paged');
	$args = array(
	 'posts_per_page' => 10, //記事表示数
	 'paged' => $paged, //WP-PageNaviプラグイン用
	 'orderby' => 'post_date',
	 'order' => 'DESC',
	 'post_type' => array('post','event'), //表示すうる投稿タイプ
	 'post_status' => 'publish'
	);
	$the_query = new WP_Query($args);
	?>

	<ul class="entry_list_typeB">
	<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
		<li class="entry_list_li">
			<div class="entry_list_date"><?php the_time('Y.m.d'); ?></div>
			<div class="entry_list_category <?php echo $post_type_class; ?>"><?php echo $post_type_name; ?></div>
			<div class="entry_list_title"><a class="entry_list_link" href="<?php the_permalink(); ?>"><i class="fa fa-chevron-circle-right"></i><?php the_title(); ?></a></div>
		</li>
	<?php endwhile; endif; ?>
	</ul>

	<?php //ページネーション  ?>
	<div class="wp-pagenavi">
		<?php
		if ($the_query->max_num_pages > 1) {
		echo paginate_links(array(
		'base' => get_pagenum_link(1) . '%_%',
		'format' => 'page/%#%/',
		'current' => max(1, $paged),
		'total' => $the_query->max_num_pages
		));
		}
		?>
	</div>

	<?php wp_reset_postdata(); ?>

</div>


	<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
