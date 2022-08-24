<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_wrap_large">

	<?php //自由設計住宅 WB HOUSE ?>
	<div class="lineup_subtitle">上質な居心地と快適な家を提供する</div>
	<div class="lineup_wrap lineup_jiyu">
		<div class="lineup_header_wrap">
			<div class="lineup_header">
				<h2 class="lineup_header_title">自由設計の家<br>WB工法<br>WB HOUSE</h2>
				<div class="lineup_header_text">
					<p>家づくりでは、住まう、暮らす、活かす、楽しむ、を考えながら計画をしていきます。家づくりとは、いわば生活の拠点となる環境づくりであるといえます。<br>十人十色の家づくりがあるように、人にはそれぞれの生活スタイルがあります。<br>お客様一人ひとりの生活に上質な居心地と快適な性能を併せてまとめ上げるのが、私たち長坂建設の家づくりの原点となります。</p>
				</div>
			</div>
			<div class="lineup_header_mv"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/jiyu_mv.jpg" alt="自由設計住宅イメージ"></div>
		</div>
		<div class="lineup_block">
			<div class="lineup_block_photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/jiyu_ph1.jpg" alt="自由設計住宅　フロア"></div>
			<div class="lineup_block_text">
				<h3 class="lineup_block_title">得意なこと</h3>
				<p>できあがったばかりの家なのに、どうしても入らないこの掃除機。そんなことがないように、プランニングでは、とことんご要望をお聞きします。<br>お客様のイメージはもちろん外観からはじまり玄関、ホール、リビング、キッチンを優先し、意外と見落としがちなのが玄関収納（シューズクローク）や納戸、物入れです。<br>例えば、キッチンまわりのユーティリティスペースが間取りに花を咲かせます。棚を壁いっぱいに取り入れた、より機能的な家事を応援するスペースです。</p>
			</div>
		</div>
		<div class="lineup_block">
			<div class="lineup_block_photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/jiyu_ph1-2.jpg" alt=""></div>
			<div class="lineup_block_text">
				<p>寝室に併設したウォークインクローゼットには、お客様が大切にされてきた洋服ダンスや着物入れを入れこむことに。愛着のあるタンスを採寸して、新しいウォークインクローゼットにレイアウトしながら効率よく空間を計画します。</p>
			</div>
		</div>
		<div class="lineup_block lineup_block__02">
			<div class="lineup_block_photo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/jiyu_ph3-1.jpg" alt="">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/jiyu_ph3-2.jpg" alt="">
			</div>
			<div class="lineup_block_text">
				<p>もう一つ、私たちは水まわりの空間づくりも大切にしています。洗面室や脱衣室、トイレなどの水まわりは毎日使うのに意外と工夫を忘れがちです。水まわりのひと工夫や空間づくりこそが、日々の暮らしに彩りを与えます。機能性を高めると同時に空間にも楽しみを添えることができるように、お客様の要望をお聴きしながら丁寧にご提案します</p>
				<p>私たちの得意なことは、デザインとともに生活に潤いを与えることです。</p>
			</div>
		</div>
		<div class="btn-wrap-right">
			<a class="btn-base btn-orange" href="<?php echo esc_html(home_url()); ?>/works/">施工事例一覧</a>
		</div>
		<div class="lineup_block lineup_block--imgR">
			<div class="lineup_block_text">
				<h3 class="lineup_block_title">一年中爽やかな空気</h3>
				<p>四季を通じて「こもらない」のが「通気断熱WB工法」WB HOUSEです。<br>深い森の中のような自然豊かな場所で思わず深呼吸する。そんな場面のように、長坂建設のWB HOUSEは住まいの中で“深呼吸したくなる”ことを実感していただけます。<br>湿気を透す壁を備え、気温に反応する形状記憶合金が約17℃を境いに各通気口を開閉して通気のコントロールを行うことで、冬は気密性と断熱性、夏には壁の中の通気性を保ちます。通気機能や透湿性といった自然のチカラを利用し、季節に合わせて馴染みながら暮らしていくことができます。<br>信州の厳しい寒暖の差を健康的に乗り切る秘策がここにあります。</p>
			</div>
			<div class="lineup_block_photo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/jiyu_ph2.jpg" alt="WB HOUSE">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/jiyu_ph2-2.jpg" alt="">
			</div>
		</div>
		<div class="btn-wrap-right">
			<a class="btn-base btn-wb" href="https://www.wb-house.jp/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/wb_logo.png" width="120" alt="WB HOUSE"></a>
		</div>

	</div>

	<?php //くつろ木の家 新築分譲住宅 ?>
	<div class="lineup_wrap lineup_tateuri">
		<div class="lineup_header_wrap">
			<div class="lineup_header">
				<h2 class="lineup_header_title">くつろ木の家<br>新築分譲住宅</h2>
				<div class="lineup_header_text">
					<p>
						家ってゆっくりまったりくつろげる空間でなければなりません。<br>
						そこには安心があり家族の笑顔やわらい声が生まれます。<br>
						そんな生活の拠点として末永くお使い頂ける住宅を<br>
						徹底的に管理した木構造と最新の設備で仕上げました。<br>
						各職人は地元の腕利きを採用しております。<br>
						造り手の顔が見える、生産者が見えることを基本としております。
					</p>
				</div>
			</div>
		</div>
		<div class="lineup_block">
			<div class="lineup_block_photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/kuturogi_ph1.jpg" alt="くつろ木の家　外観" width="401"></div>
			<div class="lineup_block_text">
				<h3 class="lineup_block_title">くつろ木の家とは</h3>
				<p>くつろ木の家は30坪前後の使いやすい間取りの住宅を、優良な土地に完成形で引き渡すいわゆる新築分譲です。お客様はあとはカーテンを掛けるだけ。明日からマイホームでの夢の生活がはじまります。</p>
			</div>
		</div>
		<div class="lineup_block">
			<div class="lineup_block_photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup/kuturogi_ph2-2.jpg" alt=""></div>
			<div class="lineup_block_text">
				<h3 class="lineup_block_title">くつろ木の家のよいところ</h3>
				<p>私達は地元の不動産のことを詳しく知っています。その土地の環境や、地盤の特徴まで。くつろ木の家ではその中でも優良な物件を厳選しています。</p>
				<p>建物は無駄をなくしコスト意識をもって計画します。当然のことですが、家造りの工程1つ1つに妥協はありません。注文住宅と同じように副会長の長坂袈裟四郎が厳選して木材を選び専属の腕利き大工棟梁が造作を受け持ちます。その他関わる職方も全て地元です。顔の見える造り手、生産者がわかることにこだわります。大手建売メーカーは広告宣伝にかなりの費用をかけています。その分、材料費や職人手間を抑えこみ、本来費用をかけるべき建物へとしわ寄せがきます。私たちは本来の家造りを目指し、何を大事にするべきかその基本を忘れずに、末永くお使い頂けることを念頭に誠実に仕上げてまいります。</p>
			</div>
		</div>
	</div>

</div>


	<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
