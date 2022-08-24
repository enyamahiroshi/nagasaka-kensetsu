<?php get_header(); ?>

<div class="content_wrap_large">

	<?php /* 最新のお知らせを1件表示 */ ?>
	<div class="first_news_wrap">
		<?php query_posts('category_name="notice"&posts_per_page=1'); ?>
		<?php if(have_posts()):while(have_posts()):the_post(); ?>
		<p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
		<?php endwhile; else: ?>
		<p>現在お知らせ情報はありません</p>
		<?php endif; wp_reset_query(); ?>
	</div>

	<?php /* リード */ ?>
	<div class="lead_main">
		<h2 class="lead_main_title">
			『地域に根ざして創業70年 千曲市周辺のご希望の地で健康的な木の家造り』
		</h2>
		<p class="lead_main_txt">
			<span class="no_sp">長坂建設は長野県千曲市の地で昭和24年創業─。 地域の皆さまと共に時代を歩んできました。<br>千曲市周辺で「土地も住宅もさがしている」「地震に強い木の家が欲しい」「健康的な深呼吸したくなる家がほしい」「家をリフォームしたい」とお考えでしたら、地域一番の土地情報と多数の施工実績を持つ</span>長坂建設にいつでもご相談ください！
		</p>
		<img src="<?php echo get_template_directory_uri(); ?>/img/home/lead_main_img.png" alt="マイホームと家族" class="lead_main_img" />
	</div>

	<?php /* ナガブロへのバナーリンク */ ?>
	<a href="http://blog.nagasaka-k.co.jp" target="_blank" rel="noopener noreferrer" class="bnr-nagablo"><img src="<?php echo get_template_directory_uri(); ?>/img/home/bnr-nagablo-pc.png" alt="" class="no_sp"><img src="<?php echo get_template_directory_uri(); ?>/img/home/bnr-nagablo-sp.png" alt="" class="no_pc"></a>
	<a href="https://www.nagasaka-k.co.jp/recruit/" target="_blank" rel="noopener noreferrer" class="bnr-nagablo"><img src="<?php echo get_template_directory_uri(); ?>/img/home/bnr-recruit-sp" alt="" class="no_pc"></a>

	<?php /* ラージホタンリンク */ ?>
	<div class="large_btn_link">
		<div class="two_btn_wrap">
			<a href="<?php echo esc_html(home_url()); ?>/three_reason/" class="btn_link">
				<img src="<?php echo get_template_directory_uri(); ?>/img/home/btn-riyu.jpg" alt="選ばれる3つの理由（豊富な土地情報/木へのこだわり/資金計画サポート）" />
			</a>
			<a href="<?php echo esc_html(home_url()); ?>/lineup/" class="btn_link">
				<img src="<?php echo get_template_directory_uri(); ?>/img/home/btn-iedukuri.jpg" alt="家づくりラインナップ（自由設計住宅（WB HOUSE）/新築分譲住宅）" />
			</a>
		</div>
		<div class="three_btn_wrap">
			<a href="<?php echo esc_html(home_url()); ?>/reform/" class="btn_link">
				<img src="<?php echo get_template_directory_uri(); ?>/img/home/btn-reform.jpg" alt="リフォーム事例" />
			</a>
			<a href="<?php echo esc_html(home_url()); ?>/customer_voice/" class="btn_link">
				<img src="<?php echo get_template_directory_uri(); ?>/img/home/btn-homonki.jpg" alt="お住まい訪問記" />
			</a>
			<a href="<?php echo esc_html(home_url()); ?>/step/" class="btn_link">
				<img src="<?php echo get_template_directory_uri(); ?>/img/home/btn-nagare.jpg" alt="家づくりの流れ" />
			</a>
		</div>
	</div>

</div>

<?php /* 物件をおさがしの方へ */ ?>
<div class="other_link_area">
	<?php /* 物件をおさがしの方へ */ ?>
	<h3 class="tochikara_title">物件をおさがしの方へ</h3>
	<div class="tochikara_box">
		<ul class="tochikara_list">
			<li><i class="fa fa-check-square-o" aria-hidden="true"></i>千曲市最大級の土地、中古住宅、新築住宅の情報の中からぴったりの物件をご案内！</li>
			<li><i class="fa fa-check-square-o" aria-hidden="true"></i>千曲市周辺の不動産情報でしたらどんな事でもお尋ねください！</li>
			<li class="btn_link"><em>「土地」からおさがしの方</em><a href="https://www.athome.co.jp/list/estate/buk/ks14/076480" target="_blank" rel="noopener noreferrer"class="btn-base btn-white">千曲市周辺の土地情報</a></li>
			<li class="btn_link"><em>「中古住宅・新築分譲くつろぎの家」をおさがしの方</em><a href="https://www.athome.co.jp/list/estate/buk/ks/076480" target="_blank" rel="noopener noreferrer"class="btn-base btn-white">千曲市周辺の中古住宅・くつろぎの家</a></li>
		</ul>
	</div>
	<?php /* 長坂建設のおすすめ物件 */ ?>
	<h3 class="tateuri_title">長坂建設のおすすめ物件</h3>
	<?php /* おすすめ物件を読込み表示 */ ?>
	<div class="tateuri_box">
		<?php $args = array(
			'numberposts' => 9, //表示（取得）する記事の数
			'post_type' => 'tateuri', //投稿タイプの指定
		);
		$the_query = get_posts($args);
		if($the_query) : foreach($the_query as $post) : setup_postdata( $post ); ?>
		<?php //カスタムフィールドの値を取得
			//画像(返り値は「画像ID」)
			$img = get_field('cf_tateuri_photo');
			$imgurl = wp_get_attachment_image_src($img, 'medium');
			//価格
			$kakaku = get_field('cf_tateuri_kakaku');
			//リンク先
			$tateuriurl = get_field('cf_tateuri_url');
		?>
		<a href="<?php echo $tateuriurl; ?>" class="tateuri_item" target="_blank">
			<div class="tateuri_item_photo">
				<img src="<? echo $imgurl[0]; ?>" alt="<?php the_title(); ?>">
			</div>
			<span class="tateuri_item_title"><?php the_title(); ?></span>
			<span class="tateuri_item_kakaku"><?php echo $kakaku; ?>万円</span>
		</a>
		<?php endforeach; ?>
		<?php else : //記事が無い場合 ?>
			<div class="no_entry">ー只今準備中ー しばらくお待ちください</div>
		<?php endif;
		wp_reset_postdata(); //クエリのリセット ?>
	</div>
</div>

<?php /* 長坂建設の施工事例 */ ?>
<div class="jirei_area">
	<div class="jirei_wrap">
		<h3 class="jirei_title">長坂建設の施工事例</h3>
		<?php /* 施工事例を読込み表示 */ ?>
		<div class="jirei_box">
			<?php $args = array(
				'numberposts' => 8, //表示（取得）する記事の数
				'post_type' => 'works', //投稿タイプの指定
			);
			$the_query = get_posts($args);
			if($the_query) : foreach($the_query as $post) : setup_postdata( $post ); ?>
				<a href="<?php the_permalink(); ?>" class="jirei_item">
					<div class="jirei_item_photo"><?php the_post_thumbnail('medium'); ?></div>
					<span class="jirei_item_title"><?php the_title(); ?></span>
				</a>
			<?php endforeach; ?>
			<?php else : //記事が無い場合 ?>
				<div class="no_entry">ー只今準備中ー しばらくお待ちください</div>
			<?php endif;
			wp_reset_postdata(); //クエリのリセット ?>
		</div>
		<a href="<?php echo esc_html(home_url()); ?>/works/" class="btn-base btn-white">施工事例一覧を見る</a>
	</div>
</div>

<?php /* 各記事の表示 */ ?>
<div class="entry_output_wrap">

	<?php /* お知らせ */ ?>
	<div class="entry_output_box">
		<h3 class="entry_header">
			<span class="icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></span>お知らせ<a class="show_all_entries" href="<?php echo esc_url(home_url('/')); ?>news/">一覧を見る<i class="fa fa-angle-right"></i></a>
		</h3>
		<?php /* 記事リスト表示 - タイプA（左に画像、右に日付+タイトル） */ ?>
		<ul class="entry_list_typeA">
			<?php query_posts('category_name=notice,event_info&posts_per_page=3"'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li class="entry_list_li">
					<a href="<?php the_permalink(); ?>" class="entry_list_box">
						<div class="entry_list_img"><?php the_post_thumbnail('thumbnail'); ?></div>
						<div class="entry_list_txt_box">
							<div class="entry_list_date"><?php echo date('Y.m.d', strtotime($post->post_date)); ?></div>
							<h3 class="entry_list_title"><?php the_title(); ?></h3>
						</div>
					</a>
				</li>
			<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
	</div>

	<?php /* スタッフブログ */ ?>
	<div class="entry_output_box">
		<h3 class="entry_header">
			<span class="icon"><i class="fa fa-book" aria-hidden="true"></i></span>スタッフブログ<a class="show_all_entries" href="http://blog.nagasaka-k.co.jp">一覧を見る<i class="fa fa-angle-right"></i></a>
		</h3>
		<?php // ナガブロ読込み
    $feedurl = 'http://blog.nagasaka-k.co.jp/index.rdf';
    include('asset/include_feed.php'); ?>
	</div>

</div>

<?php /* イベント情報
<div class="entry_event_wrap">
	<div class="entry_output_box">
		<h3 class="entry_header">
			<span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>イベント情報<a class="show_all_entries" href="<?php echo esc_url(home_url('/')); ?>news/">一覧を見る<i class="fa fa-angle-right"></i></a>
		</h3>
		<?php // 記事リスト表示 - タイプ-slick（jquery slickを使用して左右にスライド） ?>
		<?php include_once("asset/entry_slider_slick.php"); ?>
	</div>
</div>
*/ ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
