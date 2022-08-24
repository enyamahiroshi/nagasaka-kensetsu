<?php
//  category.php
//  カテゴリー一覧汎用
get_header(); ?>


<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>

	<?php require_once("asset/h1_title.php"); //H1タイトル読込み ?>

	<div class="entry_list_wrap">

		<ul class="entry_list">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		  <li>
				<div class="entry_list_date"><i class="fa fa-chevron-circle-right"></i><?php echo date('Y.m.d', strtotime($post->post_date)); ?></div>
				<div class="entry_list_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		  </li>
	<?php endwhile; endif; ?>
		</ul>

		<?php
		//  ページナビ
		if(function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>

	</div><?php //.entry_list_wrap ?>


<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
