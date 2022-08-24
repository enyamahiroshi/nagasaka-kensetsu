<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_wrap_large">

	<?php //別の訪問記へリンク ?>
	<div class="cv_linkbox">
		<a href="<?php echo esc_html(home_url()); ?>/customer_voice/customer_w/">千曲市　W様</a>
	</div>

	<?php //見出し ?>
	<div class="cv_title_wrap">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/customer_voice/s/cap.png" class="cv_title_cap">
		<h2 class="cv_title">千曲市　S様</h2>
	</div>

	<?php //住宅情報：カスタムフィールドの情報 ?>
	<table class="cv_meta">
		<tr>
			<th>居住エリア</th>
			<td>千曲市雨宮</td>
			<th>施主様名</th>
			<td>hair salon Sierra （オーナーS様）</td>
		</tr>
		<tr>
			<th>延床面積</th>
			<td>118.66m2</td>
			<th>家族構成</th>
			<td>本人＋スタッフ</td>
		</tr>
	</table>

	<?php //メインイメージ ?>
	<div class="cv_mv">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/customer_voice/s/mv.jpg">
	</div>

	<?php //本文 ?>
	<dl class="cv_voice">

		<?php //段落 ?>
		<dt class="cv_voice_title">
			<span>1</span>美容院を建てようと思ったきっかけはなんですか？
		</dt>
		<dd class="cv_voice_txt cv_voice_txt--left cf">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/customer_voice/s/voice1.jpg">
			<p>長野市の美容院に20年ほど勤めていたのですが、独立をしようと思いお店を建てる土地を探し始めました。お店の立地条件としては、千曲市内で、住宅街に入り込みすぎず、かと言って国道や大通りに面していない、お客様が車で通いやすい場所を探しました。<br>1年経たないうちに、予算にも条件にもあった理想的な土地が見つかりました。</p>
		</dd>
		<?php //段落 ?>
		<dt class="cv_voice_title">
			<span>2</span>美容院を建てるにあたり、長坂建設を知った・ご連絡をいただいたきっかけは何ですか？
		</dt>
		<dd class="cv_voice_txt cv_voice_txt--right cf">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/customer_voice/s/voice2.jpg">
			<p>最初は他の土地を候補にしていたんです。買い物に行く途中、何気なく通りかかった場所に売地の看板が立っていて、以前からこの辺りに美容室があったらいいのになと思っていました。その看板に長坂建設様の連絡先があったので電話をかけたことがきっかけです。<br>最終的には長坂建設様に色々ご相談した結果、最初に問い合せた土地は建てたいお店の広さや条件が合わず、現在の土地を紹介していただくこととなりました。</p>
		</dd>
		<?php //段落 ?>
		<dt class="cv_voice_title">
			<span>3</span>他にもハウスメーカー・工務店を何社か検討されましたか？
		</dt>
		<dd class="cv_voice_txt cv_voice_txt--left cf">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/customer_voice/s/voice3.jpg">
			<p>私の場合は、場所を決めてからと思っていたので、ハウスメーカーや工務店には問い合せませんでした。<br>良い土地に出会うのも、タイミングとか運命的なものですね。</p>
		</dd>
		<?php //段落 ?>
		<dt class="cv_voice_title">
			<span>4</span>長坂建設をお選びいただいた最大の決め手は何でしたか？
		</dt>
		<dd class="cv_voice_txt cv_voice_txt--right cf">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/customer_voice/s/voice3-2.jpg">
			<p>長坂建設様は打ち合わせの中でとても丁寧にお話を聞いてくださって、美容院に来るお客様のことまで考えてくださいました。その親身になって相談に乗っていただけたことと、千曲市内に多く所有されている土地情報の中から、最も希望に近い土地を紹介していただけた、ということですね。</p>
		</dd>
		<?php //段落 ?>
		<dt class="cv_voice_title">
			<span>5</span>家づくりで一番大変だったことは何ですか？それをどのように解決しましたか？
		</dt>
		<dd class="cv_voice_txt">
			<p>外観を決めるときが一番大変でした！図案だけ見ても、私は素人ですからイメージができませんし、私のイメージを口頭で伝えることも難しかったので、色々な雑誌や本、インターネットで探したイメージを持って行き「こんな感じ」と頭の中にある形を共有しました。<br>内観のイメージも木がふんだんに使ってあって、ぬくもりのある居心地の良さそうな空間のイメージ写真をお見せしました。</p>
			<p>あと、店内の動線ですね。お客様をお迎えしてから、シャンプー、カット、お会計、お見送りまで一連の動きがスムーズにできるよう、動線にはこだわりました。</p>
		</dd>
		<?php //段落 ?>
		<dt class="cv_voice_title">
			<span>6</span>家づくりをする上でこだわったことはありますか？
		</dt>
		<dd class="cv_voice_txt cv_voice_txt--left cf">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/customer_voice/s/voice4.jpg">
			<p>家具、床、梁の色に統一感を出していただきました。店内のお客様の目にとまる壁は壁紙ではなく塗り壁にし、少し費用はかかりましたが外壁も塗りにこだわりました。重厚感と高級感が出てとても良かったと思っています。<br>また、美容院には美容師法で様々な規定がありますので、その規定に沿って設備などを設置していただきました。</p>
		</dd>
		<?php //段落 ?>
		<dt class="cv_voice_title">
			<span>7</span>実際に美容院を始めてみて、一番気に入っているところはどこですか？また、それはなぜですか？
		</dt>
		<dd class="cv_voice_txt cv_voice_txt--right cf">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/customer_voice/s/voice6.jpg">
			<p>着付けスペースを作ったのですが、お客様が靴を脱ぐのが大変だろうと思い、最初はフローリングにしようと思っていました。ところが設計士さんの提案で、畳のスペースにしたんです。3畳の狭いスペースですが、着物を着付けるには充分な広さで、今ではキッズスペースとしてお客様のお子様たちのくつろぎ空間にもなっています。。</p>
			<p>店内は吹き抜けにしたのですが、とても開放感があって気に入っています。<br>日中、吹き抜けにある南側の窓から太陽が差し込みすぎることまで計算して、設計士さんが日よけのためのキャットウォークを作ってくださいました。一日の太陽の動きまで細かく考えていただいたことに感動しました。</p>
		</dd>
		<?php //段落 ?>
		<dt class="cv_voice_title">
			<span>8</span>これから家を建てたいと検討されている方へ、何かアドバイスがあれば教えてください。
		</dt>
		<dd class="cv_voice_txt cv_voice_txt--left cf">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/customer_voice/s/voice5.jpg">
			<p>私の場合は、住宅兼店舗でしたので、いつもお世話になっている美容関係の業者さんにも相談しました。<br>わからないことは専門家に聞いたり、納得いかないことは納得いくまで聞くと良いと思います。</p>
		</dd>

	</dl>

	<?php //別の訪問記へリンク ?>
	<div class="cv_linkbox">
		<a href="<?php echo esc_html(home_url()); ?>/customer_voice/customer_w/">千曲市　W様</a>
	</div>

</div>


	<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
