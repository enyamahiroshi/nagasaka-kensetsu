<?php $theme_name = end(explode('/', STYLESHEETPATH));//テーマ名を読み込み（判別用） ?>
<?php
//  archive-works.php
//  カスタムポスト[施工実績]のカテゴリ一覧

if( $theme_name == "arc" ) {
  $thumb_size = "trim-small";
}else{
  $thumb_size = "trim-xsmall";
}

get_header(); ?>

<section id="main">

<?php require_once("asset/h1_title.php"); //H1タイトル ?>

		<?php //2カラム ?>
		<div class="two_column_wrap clr">
		
			<div class="left_column">

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>


	<div class="col3_wrap wrap_works_tax clr">
	
<?php
  if (have_posts()) : while (have_posts()) : the_post();
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_size );
    $url = $thumb['0'];
?>
		<a class="list_col" href="<?php the_permalink(); ?>">
			<div class="list_photo">
				<img src="<?php echo $url; ?>" alt="<?php the_title(); ?>">
			</div>
			<div class="list_col_data">
				<h3 class="list_title"><?php the_title(); ?></h3>
				<div class="works_for_entry"><span><img src="<?php echo get_template_directory_uri(); ?>/img/common/logo_mark01.png" alt="M-STYLE HOUSE">詳細はこちら</span></div>
			</div>
		</a>
<?php endwhile; endif; ?>

	</div><?php // EO .col3_wrap ?>


<?php //  ページナビ
if(function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>
  

<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>
  
			</div><?php // -- left_column ?>
			
			<div class="right_column">
			<?php if( $theme_name == "arc_pc" ) {//（PCのみ）
				require_once ("asset/sidebar_PC.php");
			} elseif( $theme_name == "arc" ) {//（SPのみ）
				require_once ("asset/sidebar_SP.php");
			} ?>
			</div><?php // -- right_column ?>
			
		</div><?php // -- カラム ?>

</section>

<?php get_footer(); ?>
