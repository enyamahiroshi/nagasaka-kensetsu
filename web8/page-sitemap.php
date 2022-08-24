<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_wrap_small">


<?php the_content(); ?>


</div>


	<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
