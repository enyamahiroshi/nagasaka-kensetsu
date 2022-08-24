
<?php //シングル（記事個別）の場合 -----------------------------
if ( is_category() ): ?>
<?php //ドロップダウンのカテゴリーリスト ?>
<form class="select_nav">
<?php
 	$args = array(
	'show_option_all'    => '',
	'show_option_none'   => 'カテゴリーを選択',
	'option_none_value'  => '',
	'orderby'            => 'name', 
	'order'              => 'ASC',
	'show_count'         => 0,
	'hide_empty'         => 1, 
	'child_of'           => 0,
	'exclude'            => '',
	'echo'               => 1,
	'selected'           => 0,
	'hierarchical'       => 0, 
	'name'               => 'cat',
	'id'                 => '',
	'class'              => 'postform',
	'depth'              => 0,
	'tab_index'          => 0,
	'taxonomy'           => 'category',
	'hide_if_empty'      => false,
	'value_field'	     => 'slug'
	);
	wp_dropdown_categories( $args );
?>
</form>
	

<?php //施工実績（works）の場合 -----------------------------
elseif ( is_post_type_archive( 'works' ) || is_page_template( 'page_child_works.php' ) ): ?>
	<form class="select_nav">
	  <select>
		<option value="<?php echo esc_url(home_url('/')); ?>works">新着一覧</option>
		<option value="<?php echo esc_url(home_url('/')); ?>outside/">外観</option>
		<option value="<?php echo esc_url(home_url('/')); ?>living-room/">リビング</option>
		<option value="<?php echo esc_url(home_url('/')); ?>kitchen-dining-room/">ダイニングキッチン</option>
		<option value="<?php echo esc_url(home_url('/')); ?>bathroom-wash_basin-toilet/">バス・洗面・トイレ</option>
		<option value="<?php echo esc_url(home_url('/')); ?>original-furniture/">オリジナル家具</option>
		<option value="<?php echo esc_url(home_url('/')); ?>point/">こだわりポイント</option>
		<option value="<?php echo esc_url(home_url('/')); ?>skip-floor/">スキップフロア</option>
		<option value="<?php echo esc_url(home_url('/')); ?>built-in-garage/">ビルドインガレージ</option>
		<option value="<?php echo esc_url(home_url('/')); ?>roof-balcony/">ルーフバルコニー</option>
		<option value="<?php echo esc_url(home_url('/')); ?>three-story/">３階建て</option>
	  </select>
	</form>
	

<?php //土地情報の場合 -----------------------------
elseif ( is_page( 'estate' ) ): ?>
	

<?php //コンセプト等 -----------------------------
elseif ( is_page( array( 'concept','quality','safety','flow','planning' ) ) ): ?>
	<?php //サイドナビ ?>
	<ul class="side_nav">
		<li class="side_concept"><a href="<?php echo esc_url(home_url('/')); ?>concept/">concept<br><span>コンセプト</span></a></li>
		<li class="side_quality"><a href="<?php echo esc_url(home_url('/')); ?>quality/">quality<br><span>家づくりの品質</span></a></li>
		<li class="side_safety"><a href="<?php echo esc_url(home_url('/')); ?>safety/">safety<br><span>保証制度</span></a></li>
		<li class="side_flow"><a href="<?php echo esc_url(home_url('/')); ?>flow/">flow<br><span>家づくりの流れ</span></a></li>
		<li class="side_planning"><a href="<?php echo esc_url(home_url('/')); ?>planning/">planning<br><span>先輩家族のプランニング事例</span></a></li>
	</ul>

<?php //会社概要・採用情報 -----------------------------
elseif ( is_page( array( 'about_us','recruit','recruit-confirm' ) ) ): ?>
	<?php //サイドナビ ?>
	<ul class="side_nav">
		<li class="side_about_us"><a href="<?php echo esc_url(home_url('/')); ?>about_us/">about us<br><span>会社概要</span></a></li>
		<li class="side_recruit"><a href="<?php echo esc_url(home_url('/')); ?>recruit/">recruit<br><span>採用情報</span></a></li>
	</ul>

<?php //スタッフ紹介 -----------------------------
elseif ( is_page( array( 'staff' ) ) ): ?>
	<?php //サイドナビ ?>
	<ul class="side_nav">
		<li class="side_staff"><a href="<?php echo esc_url(home_url('/')); ?>staff/">staff<br><span>スタッフ紹介</span></a></li>
		<li class="side_faq"><a href="<?php echo esc_url(home_url('/')); ?>faq/">faq<br><span>よくある質問</span></a></li>
	</ul>

<?php //よくある質問 -----------------------------
elseif ( is_page( array( 'faq' ) ) ): ?>
	<?php //サイドナビ ?>
	<ul class="side_nav">
		<li class="side_staff"><a href="<?php echo esc_url(home_url('/')); ?>staff/">staff<br><span>スタッフ紹介</span></a></li>
		<li class="side_about_us"><a href="<?php echo esc_url(home_url('/')); ?>about_us/">about us<br><span>会社概要</span></a></li>
	</ul>
	
<?php endif; ?>




<?php //以下共通で表示 ?>
	
	<?php //バナーリンク ?>
	<?php require_once("banner_link.php"); //バナーリンク読み込み ?>
