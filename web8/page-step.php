<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_wrap_large">

	<div class="page_intro_wrap">
		<h2 class="title_sub2">お客様の不安やお悩みを<br>一つ一つ解決しながら進める理想の家づくり</h2>
	</div>

	<div class="step_intro_box">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/step/intro.jpg" alt="家づくりの流れイメージ">
		<div class="step_intro_text">
			<p>これから家を建てたいと検討されているほとんどのお客様が「土地を探しているけれど、子どもを転校させたくない」「予算に見合った理想の家を建てられるかしら」「何十年も住宅ローンを支払っていくことを考えると、それだけで不安になる」など、様々な不安を抱えています。</p>
			<p>長坂建設は創業から70年余り、地域の皆さまからも信頼をいただいて参りました。<br>これまでの実績に基づき、施主様の不安やお悩みを、階段を一歩一歩登るように解決しながら進めます。<br>家づくりの流れで不安な点やわからないこと等ございましたら、お気軽にご相談ください。</p>
		</div>
	</div>

	<?php //step ?>
	<div class="step_block">
		<h2 class="step_title"><span>STEP 01</span>初回ご相談（ご希望事項のヒアリング）</h2>
		<div class="step_data">
			<div class="step_text">
				<p>お客様のご都合に合わせて、初回の面談をさせていただきます。<br>経験豊かなスタッフが親身にお客様のご要望をお聞きします。<br>土地、建物に対する想い、細かなご要望も遠慮なくお申し付けください。どんなことでも構いません。</p>
			</div>
		</div>
	</div>

	<?php //step ?>
	<div class="step_block">
		<h2 class="step_title"><span>STEP 02</span>土地の選定</h2>
		<div class="step_data">
			<div class="step_text">
				<p>STEP01での初回面談ご希望事項のヒアリングの内容を踏まえて、お客様に最適な土地をご紹介致します。<br>地元の不動産に精通し、千曲市内最大級の土地情報にご期待ください。</p>
			</div>
		</div>
	</div>

	<?php //step ?>
	<div class="step_block">
		<h2 class="step_title"><span>STEP 03</span>家づくり全般のご相談、設計担当者のご紹介</h2>
		<div class="step_data">
			<div class="step_text">
				<p>家づくりのイメージ共有と設計担当者のご紹介<br>設計担当者が同席し、長坂建設の家づくりの理念とシステムのご案内、プロフィールやこれまでの施工事例をご紹介し、プランご提案から図面作成、お引き渡しまでの概要をご説明します。</p>
				<p>次回の具体的なプランご提案に向け、お客様が理想とするデザイン、外観、間取り、ご家族の生活リズムや行動パターンなどをお聞きします。施工事例やお客様がご持参された参考イメージ資料を元に、新居への想像が広がり、家づくりをする上で最も夢のふくらむ瞬間です。</p>
			</div>
		</div>
	</div>

	<?php //step ?>
	<div class="step_block step-plan">
		<h2 class="step_title"><span>STEP 04</span>プランのご決定</h2>
		<div class="step_data">
			<div class="step_text">
				<div class="step_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/step/step-plan.jpg"></div>
				<p>お客様からお聞かせいただいたデザインイメージや、家族構成に合せた部屋の間取り、生活リズムや行動パターンに合せた動線を具体的な設計図面にし、基本となる家のプランをご提案します。<br>この図面を元に更に詳細を詰めていきます。</p>
			</div>
		</div>
	</div>

	<?php //step ?>
	<div class="step_block">
		<h2 class="step_title"><span>STEP 05</span>工事資金計画書のご提示</h2>
		<div class="step_data">
			<div class="step_text">
				<p>家の規模やデザインが大まかに決まった段階で、予算内に納まるかの目安となる資金計画書をお出しします。<br>お客様に不明な点がないよう、資金計画書に含まれる項目を一つ一つ丁寧にご説明します。</p>
			</div>
		</div>
	</div>

	<?php //step ?>
	<div class="step_block">
		<h2 class="step_title"><span>STEP 06</span>詳細お見積り</h2>
		<div class="step_data">
			<div class="step_text">
				<p>意匠図、設備図、構造図などの設計図書に基づき、トータル資金計画書と合わせて建築工事の詳細なお見積書を提示いたします。お借入れ・お支払い方法のご相談にも対応させていただきます。</p>
			</div>
		</div>
	</div>

	<?php //step ?>
	<div class="step_block">
		<h2 class="step_title"><span>STEP 07</span>建築工事請負契約</h2>
		<div class="step_data">
			<div class="step_text">
				<p>すべてご納得いただけましたら、いよいよご契約となります。着工までのスケジュール確認、住宅ローンの手続き、構造計算チェック、建築確認申請・瑕疵担保保証の手続きを行います。</p>
			</div>
		</div>
	</div>

	<?php //step ?>
	<div class="step_block">
		<h2 class="step_title"><span>STEP 08</span>工事着工</h2>
		<div class="step_data">
			<div class="step_text">
				<p>工事請負契約が完了後、古家がある場合は解体工事をして更地にします。<br>地縄張り、地鎮祭が完了すると、いよいよ工事が始まります。<br>基礎工事が始まる前にご近所様に挨拶まわりをしていただくようお願いしております。</p>
			</div>
		</div>
	</div>

	<?php //step ?>
	<div class="step_block step-joto">
		<h2 class="step_title"><span>STEP 09</span>上棟</h2>
		<div class="step_data">
			<div class="step_text">
        <div class="step_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/step/step-joto.jpg"></div>
				<p>これまで図面やパースでみていたマイホームが現実に建ち、全体像が体感できる感激の一日です。</p>
				<p>夕方の作業完了時には上棟式を行います。上棟式は建て方が無事にできた喜びと感謝を示し、今後の工事が安全に確実に行われ無事に竣工できることを祈願する儀式です。</p>
			</div>
		</div>
	</div>

	<?php //step ?>
	<div class="step_block step-hikiwatasi">
		<h2 class="step_title"><span>STEP 10</span>竣工検査・お引き渡し</h2>
		<div class="step_data">
			<div class="step_text">
				<div class="step_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/step/step-hikiwatasi.jpg"></div>
        <p>厳格な竣工検査を経て、お客様にもお立会いをいただき、傷などがないかご確認をいただきます。</p>
				<p>システムキッチンやお風呂給湯器などの機能説明を行います。</p>
        <p>新居の鍵や各種書類、メーカーの取扱説明書等をファイリングして引き渡しを致します。</p>
			</div>
		</div>
	</div>

	<?php //step ?>
	<div class="step_block">
		<h2 class="step_title"><span>STEP 11</span>アフターメンテナンス</h2>
		<div class="step_data">
			<div class="step_text">
				<p>お引渡し後は一年後、適宜に担当者が伺い不具合の有無や使い勝手のご不明な点をお聞きしたり、点検を行います。また、随時お客様のお困り事にお応えして参ります。</p>
				<p>家は親から子へまたその子へと大切に受け継がれていくものです。<br>弊社ではお客様が家に愛着をもって大切に末長くお使いいただけるよう、万全のサポートで対応して参ります。</p>
        <p>お子様の成長やご家族の生活パターンに合わせたリフォーム、キッチン、お風呂、トイレ等の水まわりの改修工事や屋根、外壁、雨樋等の外まわりのリニューアル工事を検討される際にもお気軽にご相談ください。</p>
			</div>
		</div>
	</div>

</div>


	<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
