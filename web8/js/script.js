(function($) {

  /*
  ▼共通
  // ページ途中のオブジェクトをスクロールでトップにきたら固定する
  // オブジェクトの高さを揃える
  // 要素を送らせて表示する
  // グローバルナビの開閉
// スムーススクロール（WPの"/ページ名/#アンカーリンク"の形にも対応版）
  ▼各ページ
  // Google Map にオーバーレイしているボックスをクリックで消す
  ▼スマホ時
  // telリンクを有効にする
  */

/* ▼共通 */
/* --------------------------------------------------
	ページ途中のオブジェクトをスクロールでトップにきたら固定する
var nav    = $("header"),
    offset = nav.offset();

$(window).scroll(function () {
  if($(window).scrollTop() > offset.top) {
    nav.addClass('fixed');
  } else {
    nav.removeClass('fixed');
  }
});
-------------------------------------------------- */

/* --------------------------------------------------
	オブジェクトの高さを揃える
-------------------------------------------------- */
$.fn.tile = function(columns) {
	var tiles, max, c, h, last = this.length - 1, s;
	if(!columns) columns = this.length;
	this.each(function() {
		s = this.style;
		if(s.removeProperty) s.removeProperty("height");
		if(s.removeAttribute) s.removeAttribute("height");
	});
	return this.each(function(i) {
		c = i % columns;
		if(c === 0) tiles = [];
		tiles[c] = $(this);
		h = tiles[c].height();
		if(c === 0 || h > max) max = h;
		if(i == last || c == columns - 1)
			$.each(tiles, function() { this.height(max); });
	});
};

// 高さを揃える -- 実行（スマホでも揃える場合）
  //$(".xxxx").tile();

// 高さを揃える -- 実行（スマホでは揃えない場合）
$(window).on("load resize" , function(){
	var ua = navigator.userAgent;
	if( !(ua.indexOf("iPhone") > 0 && ua.indexOf("iPod") == -1 || ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0) ){
	 //$(".xxx").tile(); //xxx
	}
});

/* --------------------------------------------------
	グローバルナビの開閉
-------------------------------------------------- */
//変数の定義
var body = $('body'),
	header = $('.header'),
	wrapper = $('.content_wrap'),
	menu = $('.menu-gnavi_sp-container'),
	menuBtn = $('.swt_gnavi'),
	closeBtn = $('.btnClose'), //メニューを閉じるボタン
	menuWidth = menu.outerWidth();

//メニューを開く関数
function showMenu (event) {
	event.preventDefault();

	//bodyが動かないようにする
	currentScroll = $(window).scrollTop();
	body.css({
		position: 'fixed',
		width: '100%',
		top: -1 * currentScroll
	});

	//シェードを追加
	var shade = $('<div></div>');
	shade.attr('class', 'shade').on('click', hideMenu);

	//アニメーションを実行
	menu.before(shade).animate({
		'left' : 0
	}, 200);
}

//メニューを閉じる関数
function hideMenu (event) {
	event.preventDefault();

	//bodyに追加したstyleを削除
	body.attr('style', '');

	//scroll位置を調整
	$('html, body').prop({scrollTop: currentScroll});

	//アニメーションを実行
	menu.prop({scrollTop: 0}).animate({
		'left' : -menuWidth
	}, 200);

	//シェードを削除
	$('.shade').remove();
}

//メニュー開閉の実行
menuBtn.on('click', showMenu);
closeBtn.on('click', hideMenu);

/* --------------------------------------------------
	ページトップへボタン
-------------------------------------------------- */
var topBtn = $('.btn_page_top');
topBtn.hide();
$(window).scroll(function () {
	if ($(this).scrollTop() > 1000) {
		topBtn.fadeIn(500,"swing");
	} else {
		topBtn.fadeOut(500,"swing");
	}
});
// スクロールしてトップへ
topBtn.click(function () {
$('body,html').animate({
	scrollTop: 0
}, 200);
return false;
});

/* --------------------------------------------------
	スムーススクロール（WPの"ページのリンク(URL)/#アンカーリンク"の形にも対応版）
	※classに“noScroll”を付けると除外される
-------------------------------------------------- */
$('a[href*=#], area[href*=#]').not(".noScroll").click(function() {
	var speed = 600, // ミリ秒(この値を変えるとスピードが変わる)
		href = $(this).prop("href"), //リンク先を絶対パスとして取得
		hrefPageUrl = href.split("#")[0], //リンク先を絶対パスについて、#より前のURLを取得
		currentUrl = location.href, //現在のページの絶対パスを取得
		currentUrlZ = currentUrl.split("#")[0]; //現在のページの絶対パスについて、#より前のURLを取得

	//#より前の絶対パスが、リンク先と現在のページで同じだったらスムーススクロールを実行
	if(hrefPageUrl == currentUrlZ){

		//リンク先の#からあとの値を取得
		href = href.split("#");
		href = href.pop();
		href = "#" + href;

		//スムースクロールの実装
		var target = $(href == "#" || href === "" ? "html" : href),
			position = target.offset().top, //targetの位置を取得
			body = 'body',
			userAgent = window.navigator.userAgent.toLowerCase();
		if (userAgent.indexOf('msie') > -1 || userAgent.indexOf('trident') > -1 || userAgent.indexOf("firefox") > -1 ) { /*IE8.9.10.11*/
			body = 'html';
		}

		$(body).animate({
			scrollTop: position - 80 // 固定メニュー分だけずらす
		}, speed, 'easeOutQuart', function() {
			//スムーススクロールを行ったあとに、アドレスを変更(アドレスを変えたくない場合はここを削除)
      /*
			if(href != "#top" && href !="#") {
				location.href = href;
			}
      */
		});
		return false;
	}
});


/* ▼各ページ */

/* --------------------------------------------------
	アクセス：Google Map にオーバーレイしているボックスをクリックで消す
-------------------------------------------------- */
$('.gmap_click_act_box').on('click touchend', function(){
	$(this).css({display:'none'});
});



/* ▼スマホ時 */
/* --------------------------------------------------
	telリンクを有効にする
-------------------------------------------------- */
var ua = navigator.userAgent.toLowerCase();
var isMobile = /iphone/.test(ua)||/android(.+)?mobile/.test(ua);
if (!isMobile) {
    $('a[href^="tel:"]').on('click', function(e) {
        e.preventDefault();
    });
}


})(jQuery);
