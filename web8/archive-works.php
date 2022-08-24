<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>

	<?php require_once("asset/h1_title.php"); //H1タイトル読込み ?>

<div class="archive_wrap">

	<?php /* 長坂建設の施工事例 */ ?>
	<div class="jirei_area">
		<div class="jirei_wrap">
			<?php //  ページナビ
			if(function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>
			<?php /* 施工事例を読込み表示 */ ?>
			<div class="jirei_box">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>" class="jirei_item">
						<div class="jirei_item_photo"><?php the_post_thumbnail('medium'); ?></div>
						<span class="jirei_item_title"><?php the_title(); ?></span>
					</a>
				<?php endwhile; ?>
				<?php else : //記事が無い場合 ?>
					<div class="no_entry">ー只今準備中ー しばらくお待ちください</div>
				<?php endif;
				wp_reset_postdata(); //クエリのリセット ?>
			</div>
			<?php //  ページナビ
			if(function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>
		</div>
	</div>

</div>


<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
