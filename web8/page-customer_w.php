<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_wrap_large">

	<?php //別の訪問記へリンク ?>
	<div class="cv_linkbox">
		<a href="<?php echo esc_html(home_url()); ?>/customer_voice/">千曲市　S様</a>
	</div>

	<?php //見出し ?>
	<div class="cv_title_wrap">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/customer_voice/w/cap.png" class="cv_title_cap">
		<h2 class="cv_title">千曲市　W様</h2>
	</div>

	<?php //住宅情報：カスタムフィールドの情報 ?>
	<table class="cv_meta">
		<tr>
			<th>居住エリア</th>
			<td>千曲市</td>
			<th>施主様名</th>
			<td>W様</td>
		</tr>
		<tr>
			<th>延床面積</th>
			<td>147.39m2</td>
			<th>家族構成</th>
			<td>ご主人, 奥様, 子供2人</td>
		</tr>
	</table>

	<?php //メインイメージ ?>
	<div class="cv_mv">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/customer_voice/w/mv.jpg">
	</div>

	<?php //本文 ?>
	<dl class="cv_voice">

		<?php //段落 ?>
		<dt class="cv_voice_title">
			<span>1</span>家を建てようと思ったきっかけはなんですか？
		</dt>
		<dd class="cv_voice_txt cv_voice_txt--left cf">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/customer_voice/w/voice1.jpg">
			<p>子どもたちが大きくなり、住んでいたアパートが手狭に感じ始めたことと、長女が進学するタイミングで家を建てたいと思っていました。それで、今まで住んでいたアパートから近いところに土地を探していました。<br>なるべく転校などさせたくなかったためです。</p>
		</dd>
		<?php //段落 ?>
		<dt class="cv_voice_title">
			<span>2</span>家を建てるにあたり、長坂建設を知った・ご連絡をいただいたきっかけは何ですか？
		</dt>
		<dd class="cv_voice_txt">
			<p>近所を散歩していたところ、畑を住宅地にする看板が出ていました。小学校や中学校から3km以内で、実家からも近く、立地条件を一番にしていましたので理想的な立地でした。</p>
		</dd>
		<?php //段落 ?>
		<dt class="cv_voice_title">
			<span>3</span>他にもハウスメーカー・工務店を何社か検討されましたか？
		</dt>
		<dd class="cv_voice_txt cv_voice_txt--right cf">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/customer_voice/w/voice2.jpg">
			<p>長野市内にある住宅展示場を見に行ったりもしましたが、展示場の家はとても素敵ですが、あくまでもモデルハウスですので、こんなふうにしたいと思っても手が届く金額ではありません。<br>間取りやデザインの参考までに見に行ったという感じですね。</p>
		</dd>
		<?php //段落 ?>
		<dt class="cv_voice_title">
			<span>4</span>工務店やハウスメーカーが多くある中で、長坂建設をお選びいただいた最大の決め手は何でしたか？
		</dt>
		<dd class="cv_voice_txt cv_voice_txt--left cf">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/customer_voice/w/voice3.jpg">
			<p>一番は、WB HOUSEが決定打でした。ウッドビルドさんの「ワンダーベース」というWB HOUSE体験施設に行ったのですが、実際に体で良さを感じ、これだと思いました。新築の家を建てて、シックハウス症候群などになっては困ります。家族の健康が大事ですからね。それと、永く持つ家ということですね。<br>家の中の空気や壁の中の空気が一定の温度で保たれているので、今年の夏もエアコンを入れたのは2〜3日ぐらい。2階でも扇風機一つで快適に過ごせます。</p>
		</dd>
		<?php //段落 ?>
		<dt class="cv_voice_title">
			<span>5</span>家づくりで一番大変だったことは何ですか？それをどのように解決しましたか？
		</dt>
		<dd class="cv_voice_txt cv_voice_txt--right cf">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/customer_voice/w/voice4.jpg">
			<p>動線を考えるのが大変でした。ここは女性陣の意見が反映されました。<br>洗面台と着替えるところを別にしたり、1日に1回は必ず家族全員の顔を見るため、玄関からすぐに階段を登る動線ではなく、帰宅後に玄関から居間を通って2階へ行く動線にすることにはこだわりました。</p>
		</dd>
		<?php //段落 ?>
		<dt class="cv_voice_title">
			<span>6</span>家づくりをする上でこだわったことはありますか？
		</dt>
		<dd class="cv_voice_txt cv_voice_txt--left cf">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/customer_voice/w/voice5.jpg">
			<p>リビングは家族全員が集えるよう15.5畳の広いスペースにしました。思春期の女の子たちがいますから、一人一人に部屋を与えると、部屋に閉じこもってしまうのではないかと心配しましたが、今では毎晩家族全員がリビングで過ごしています。</p>
			<p>また、将来的には両親と同居する予定でいるので、車椅子で入れるようトイレを広くしました。</p>
		</dd>
		<?php //段落 ?>
		<dt class="cv_voice_title">
			<span>7</span>実際に住み始めてみて、一番気に入っているところはどこですか？また、それはなぜですか？
		</dt>
		<dd class="cv_voice_txt">
			<p>4畳半の書斎を作ったのですが、とても気に入っています。それほど広くはないのですが、本を読んだりのんびりするには最適です。将来的にはパソコンなど置いて仕事ができればいいなと思っています。</p>
		</dd>
		<?php //段落 ?>
		<dt class="cv_voice_title">
			<span>8</span>これから家を建てたいと検討されている方へ、何かアドバイスがあれば教えてください。
		</dt>
		<dd class="cv_voice_txt cv_voice_txt--right cf">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/customer_voice/w/voice6.jpg">
			<p>目先のことよりも50歳、60歳、70歳になった時、どのような生活スタイルになっているかを想定しプランニングしたほうがいいと思います。私の場合は、長男として親の面倒をみるということを考慮して設計していただきました。<br>例えば、お風呂とトイレが近いとか、トイレと寝室が近いなど動線はよく考えたほうたよいと思います。</p>
			<p>また、見た目のデザインの良さだけではなく、どのような工法で建てるかも検討したほうがいいですね。WB HOUSEはおすすめです。</p>
		</dd>

	</dl>

	<?php //別の訪問記へリンク ?>
	<div class="cv_linkbox">
		<a href="<?php echo esc_html(home_url()); ?>/customer_voice/">千曲市　S様</a>
	</div>

</div>


	<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
