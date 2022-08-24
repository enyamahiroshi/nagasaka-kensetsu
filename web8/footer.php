
		</div><?php //.main_content ?>

		<?php /* フッター */?>
		<footer>
			<div class="footer-wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" alt="長坂建設" class="footer-logo">
				<div class="footer-info">
					<p class="footer-add">長野県千曲市大字稲荷山7番地</p>
					<p class="footer-tel tel-link"><a href="tel:0262722762">TEL.<span class="footer-tel-num">026-272-2762</span></a></p>
					<p class="footer-fax">FAX.<span class="footer-fax-num">026-272-2265</span></p>
				</div>
				<?php // お問合わせ・資料請求ボタン
        if(!is_page('contact')): ?>
				<a href="<?php echo esc_html(home_url()); ?>/contact/" class="btn-base btn-yellow">お問合わせ・資料請求</a>
        <?php endif; ?>
				<?php // グローバルナビ（カスタムメニュー呼び出し）
				wp_nav_menu(array(
					'menu' => 'fnavi', // 呼び出すカスタムメニュー名
					'menu_id' => '', // ul 要素に適用するID : {メニューのスラッグ}-{連番}
					'menu_class' => 'fnavi', // ul 要素に適用するCSS クラス名 : menu
				)); ?>
				<span class="footer-copyright">&copy; NAGASAKA-KENSETU. All Rights Reserved.</span>
			</div>
		</footer>

		<?php //fixedアイテム ?>
		<?php /* お問合わせ・資料請求ボタン */
    if(!is_page('contact')): ?>
		<div class="btn_contact"><a href="<?php echo esc_html(home_url()); ?>/contact/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/btn_fixed.png" alt="お問合わせ・資料請求"></a></div>
    <?php endif; ?>
		<?php /* ページトップへ */ ?>
		<div class="btn_page_top"><i class="fa fa-angle-up" aria-hidden="true"></i></div>

	</div><?php //.content_wrap ?>

<?php wp_footer(); ?>
<?php //基本的にJSはfunctions.phpで読み込む ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script>
// スライダー（Slick）：http://kenwheeler.github.io/slick/
// スマホ
<?php if(is_mobile()): ?>
(function($) {
	$('.entry-slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1
	});
})(jQuery);
// PC
<?php else: ?>
(function($) {
	$('.entry-slider').slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1
	});
})(jQuery);
<?php endif; ?>
</script>

<?php //住所自動補完（フォームページのみ）
if(is_page('contact')): ?>
<script type='text/javascript' src='https://ajaxzip3.github.io/ajaxzip3.js?ver=20140807'></script>
<script type="text/javascript">
(function($) {
		jQuery( 'input[name="zip"]' ).keyup( function( e ) {
			AjaxZip3.zip2addr('zip','','area','city');
		} )
	if($('#mw_wp_form_mw-wp-form-3155').hasClass('mw_wp_form mw_wp_form_confirm')){
		$(".comments").css('display', 'none');
	}
})(jQuery);
</script>
<?php endif; ?>
<?php //住所自動補完（フォームページのみ）
if(is_page('recruit')): ?>
<script type='text/javascript' src='https://ajaxzip3.github.io/ajaxzip3.js?ver=20140807'></script>
<script type="text/javascript">
(function($) {
		jQuery( 'input[name="zip"]' ).keyup( function( e ) {
			AjaxZip3.zip2addr('zip','','area','city');
		} )
	if($('#mw_wp_form_mw-wp-form-3366').hasClass('mw_wp_form mw_wp_form_confirm')){
		$(".comments").css('display', 'none');
	}
})(jQuery);
</script>
<?php endif; ?>

</body>
</html>