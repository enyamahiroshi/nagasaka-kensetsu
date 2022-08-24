<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_wrap_middle">

	<p class="contact_lead">
		<p>
      この度は、弊社の求人にご応募いただきまして誠にありがとうございます。<br>
      採用担当の者より改めてご連絡申し上げますので<br>
      誠に恐れ入りますが、今しばらくお待ちいただけますようお願いいたします。
    </p>
     <p style="color: red;font-weight: bold;">なお、自動返信メールが届かない場合は、下記2点をご確認ください。</p>
		 <p style="color: red;font-weight: bold;">1） 応募フォームの「必須事項」に記入漏れがあった可能性がございます。
         必須事項をご確認の上、再度ご記入いただきお送りください。</p>

        <p style="color: red;font-weight: bold;">2） メールの迷惑メールフォルダに振り分けられている可能性がございます。
        ご利用のメールソフト、またはメールサービスの「迷惑メールフォルダ」をご確認ください。</p>
        <p>何かご不明な点等ございましたら、ご遠慮なくお問い合わせください。</p>
    <p>長坂建設株式会社<br>
       026-272-2762</p>
	</div>

</div>


	<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
