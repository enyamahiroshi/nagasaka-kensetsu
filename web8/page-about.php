<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_wrap_large">

	<ul class="inline_list_1">
		<li><a href="#gaiyo">会社概要</a></li>
		<li><a href="#aisatu">代表あいさつ</a></li>
		<li><a href="#enkaku">沿革</a></li>
	</ul>

	<?php //会社概要 ?>
	<h2 id="gaiyo" class="title_sub1">会社概要</h2>
	<div class="data_table_wrap">
	  <div class="data_table">
	    <div class="data_table_title">商号</div>
	    <div class="data_table_data">
	      長坂建設株式会社<br>
				<img src="<?php echo get_template_directory_uri(); ?>/img/about/ph_gaikan.jpg" alt="長坂建設株式会社外観" class="gaikan_photo">
				<div class="gaikan_txt">
					<p>「地域社会に貢献できる会社になろう」<br>「こころ惹かれる仕事でお返ししよう」</p>
					これらを会社のモットーとして、スタッフ全員でどんな小さな住まいの悩み事も不具合もお聞きして解決へのお手伝いを申し上げられるよう頑張って参ります。
				</div><!-- /gaikan_txt -->
	    </div>
	  </div>
	  <div class="data_table">
	    <div class="data_table_title">創業・設立</div>
	    <div class="data_table_data">
	      創業　昭和24年（1949年）<br>法人設立　昭和41年（1966年）
	    </div>
	  </div>
	  <div class="data_table">
	    <div class="data_table_title">資本金</div>
	    <div class="data_table_data">
	      3,000万円
	    </div>
	  </div>
	  <div class="data_table">
	    <div class="data_table_title">所在地・連絡先</div>
	    <div class="data_table_data">
	      [本社]<br>
	      〒387-0021　長野県千曲市大字稲荷山7番地<br>
	      TEL.026-272-2762　FAX.026-272-2265<br>
	      e-mail : <a href="mailto:nagasaka@nagasaka-k.co.jp">nagasaka@nagasaka-k.co.jp</a>
	      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3206.1690537203567!2d138.0913690511243!3d36.5259156906921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d82ba4c4f2977%3A0xeaaba4c4f56153e4!2z6ZW35Z2C5bu66Kit77yI5qCq77yJ!5e0!3m2!1sja!2sjp!4v1475737396136" frameborder="0" allowfullscreen></iframe>
	    </div>
	  </div>
	  <div class="data_table">
	    <div class="data_table_title">従業員</div>
	    <div class="data_table_data">
	      36名<br>
	      （1・2級建築士、1・2級建築施工管理技士、1・2級土木施工管理技士、1・2級管工事施工管理技士、1・2級造園施工管理技士、1・2級舗装施工管理技術者、1・2級建設業経理士、宅地建物取引士 等）
	    </div>
	  </div>
	  <div class="data_table">
	    <div class="data_table_title">事業内容</div>
	    <div class="data_table_data">
        <div class="imageph"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/image1.jpg"></div>
	      ■特定建設業 ≪長野県知事許可（特-29）第3100号≫<br>
	      土木、建築、大工、左官、とび・土工、石、屋根、管、タイル・れんが・ブロック、鋼構造物、鉄筋、舗装、しゅんせつ、板金、ガラス、塗装、防水、内装仕上、造園、建具、水道施設、解体　各工事施工及び管理<br>
	      ■建築工事の設計監理 ≪一級建築士事務所 長野県知事登録（長野）I第19253号≫<br>
	      ■不動産取引業 ≪長野県知事（14）第784号≫<br>
	      不動産の売買、賃貸、管理及びその仲介
	    </div>
	  </div>
	  <div class="data_table">
	  <div class="data_table_title">主な工事経歴</div>
	    <div class="data_table_data">
	      <div class="keireki">
	        <dl>
						<dt>■﻿建築工事</dt>
						<dd>長野信用金庫稲荷山支店</dd>
						<dd>ＪＡながの坂城支所</dd>
						<dd>長野県信用組合更埴支店 </dd>
						<dd>戸倉上山田中学校</dd>
						<dd>更埴西中学校</dd>
						<dd>屋代中学校</dd>
						<dd>埴生中学校</dd>
						<dd>東小学校</dd>
						<dd>八幡小学校</dd>
						<dd>埴生小学校</dd>
						<dd>あんず・雨宮統合保育園</dd>
						<dd>五加保育園</dd>
						<dd>杭瀬下保育園</dd>
						<dd>徳応院保育園</dd>
						<dd>稲荷山幼稚園（聖十字学園）、稲荷山くるみこども園</dd>
						<dd>アルファベットキッズインターナショナル保育園</dd>
						<dd>稲荷山児童センター</dd>
						<dd>千曲市第二給食センター</dd>
						<dd>千曲市新庁舎等建設工事立体駐車場</dd>
						<dd>武水別神社</dd>
						<dd>治田神社、高市社</dd>
						<dd>稲荷山諸聖徒教会</dd>
						<dd>松田家保存整備、斎館</dd>
						<dd>屋代高校</dd>
						<dd>屋代南高校</dd>
						<dd>長野商業高校</dd>
						<dd>にしざわ貯金箱館</dd>
						<dd>更埴ふる里漫画館</dd>
						<dd>大池総合案内所</dd>
						<dd>西部土地改良区</dd>
						<dd>長野県警察本部青木島宿舎</dd>
						<dd>千曲警察署</dd>
						<dd>更埴中央公園市民プール</dd>
						<dd>起返排水機場</dd>
						<dd>歴史文化財センター上山田</dd>
	        </dl>
	        <dl>
						<dt>■土木工事</dt>
						<dd>北陸新幹線長野赤沼高架橋（鉄道・運輸機構）</dd>
						<dd>小中島排水樋門（国土交通省）</dd>
						<dd>国道403号土口バイパス築造工事（千曲建設事務所）</dd>
						<dd>防災・安全交付金（道路）坂城インター線中之条（千曲建設事務所）</dd>
						<dd>公共土木施設災害復旧工事（上田建設事務所）</dd>
						<dd>社会資本整備活力創出基盤整備街路工事長野市吉田（長野建設事務所）</dd>
						<dd>上山田地区舗装復旧工事（上田水道管理事務所）</dd>
						<dd>県単地すべり対策工事小川村馬曲（土尻川砂防事務所）</dd>
						<dd>地すべり対策天間芦沢地区地すべり防止工事（長野地方事務所）</dd>
						<dd>信州新町新町地区配水管敷設替工事（長野市水道局）</dd>
						<dd>篠ノ井地区二ツ柳配水管布設工事（川中島水道管理事務所）</dd>
						<dd>吉田三丁目地区配水管布設工事（長野市水道局）</dd>
						<dd>千曲市サッカー場（千曲市）</dd>
						<dd>森将軍塚古墳（千曲市）</dd>
						<dd>内川公園（千曲市）</dd>
						<dd>稲荷山公園（千曲市）</dd>
						<dd>大田原マレットゴルフ場（千曲市）</dd>
						<dd>更埴西中学校グランド改良工事（千曲市）</dd>
						<dd>屋代高校第2グランド（屋代高校）</dd>
						<dd>千曲市営桑原雁塚霊園桜花苑（千曲市）</dd>
						<dd>市道1-21号線道路改良工事（千曲市）</dd>
						<dd>市道佐野川線橋梁希望橋工事（千曲市）</dd>
						<dd>西部水道八幡上水道導水管敷設替工事（千曲市）</dd>
						<dd>国補災害復旧事業平和橋緑地復旧工事（千曲市）</dd>
	        </dl>
	        <dl>
						<dt>■解体工事</dt>
						<dd>県営住宅上駒沢新町第2団地除却工事（長野県）</dd>
						<dd>千曲市第1学校給食センター解体工事（千曲市）</dd>
						<dd>地方職員共済組合戸倉保養所名月荘解体工事（地方職員共済組合）</dd>
						<dd>戸倉上山田中学校解体撤去工事（千曲市）</dd>
						<dd>千曲市新庁舎等建設工事（先行解体工事）（千曲市）</dd>
						<dd>温泉健康増進施設白鳥園整備解体工事（千曲市）</dd>
	        </dl>
	      </div>
	      <a class="link_type_1" href="<?php echo esc_html(home_url()); ?>/public_works/">公共・商業施設工事の事例について詳しくはこちら</a>
	    </div>
	  </div>
	</div>

	<ul class="inline_list_1">
		<li><a href="#gaiyo">会社概要</a></li>
		<li><a href="#aisatu">代表あいさつ</a></li>
		<li><a href="#enkaku">沿革</a></li>
	</ul>

	<?php //代表あいさつ ?>
	<h2 id="aisatu" class="title_sub1">代表あいさつ</h2>
	<div class="aisatu_wrap">
		<div class="aisatu_txt">
			<h3 class="aisatu_title">「変化していく時代の流れの中で」</h3>
			<p>
				昭和24年、建設業として創業以来、地域社会に根差し「信頼の家造り」を信条に歩んでまいりました。昭和41年に長坂建設有限会社を設立、昭和48年には長坂建設株式会社へ組織変更をし、総合建設業として「地域社会に貢献できる会社になり、こころ惹かれる仕事でお返ししよう」をモットーに、一般住宅をはじめ官公庁の建築工事及び土木工事と幅広く受注し現在に至っております。これもひとえに地域の皆様のご愛顧、ご支援によるものと感謝申し上げます。<br>
        ますます多様化し変化していく時代の流れの中で、人は常にゆとりと潤いを求め続けています。私たちはそのニーズに応えるべく、これからも社員一丸となり叡智と技術力を集結し、豊かな暮らしを生む街造りに努力を重ねてまいりたいと考えております。<br>
        今後とも、より一層のご愛顧ご支援を賜りますようお願い申し上げます。
			</p>
			<div class="aisatu_daihyo">
				<span>代表取締役</span><em>長坂　広明</em>
			</div>
		</div>
	</div>

	<ul class="inline_list_1">
		<li><a href="#gaiyo">会社概要</a></li>
		<li><a href="#aisatu">代表あいさつ</a></li>
		<li><a href="#enkaku">沿革</a></li>
	</ul>

	<?php //沿革 ?>
	<h2 id="enkaku" class="title_sub1">沿革</h2>
	<div class="data_table_wrap">
	  <div class="data_table">
	    <div class="data_table_title">昭和21年（1946年）</div>
	    <div class="data_table_data">
	      創業者長坂正司が大工として就業
	    </div>
	  </div>
	  <div class="data_table">
	    <div class="data_table_title">昭和24年（1949年）</div>
	    <div class="data_table_data">
	      建築請負業を創業
	    </div>
	  </div>
	  <div class="data_table">
	    <div class="data_table_title">昭和41年（1966年）</div>
	    <div class="data_table_data">
	      長坂建設有限会社を設立
	    </div>
	  </div>
	  <div class="data_table">
	    <div class="data_table_title">昭和45年（1970年）</div>
	    <div class="data_table_data">
	      宅地建物取引業免許取得
	    </div>
	  </div>
	  <div class="data_table">
	    <div class="data_table_title">昭和46年（1971年）</div>
	    <div class="data_table_data">
	      建築士事務所登録
	    </div>
	  </div>
	  <div class="data_table">
	    <div class="data_table_title">昭和48年（1973年）</div>
	    <div class="data_table_data">
	      長坂建設株式会社に組織変更
	    </div>
	  </div>
    <div class="ph_kaigi"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/kaigi.jpg"></div>
	</div>


	<ul class="inline_list_1">
		<li><a href="#gaiyo">会社概要</a></li>
		<li><a href="#aisatu">代表あいさつ</a></li>
		<li><a href="#enkaku">沿革</a></li>
	</ul>


</div>


	<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
