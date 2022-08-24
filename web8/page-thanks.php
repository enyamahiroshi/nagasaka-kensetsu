<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_wrap_middle">

	<div class="contact_lead">
		<p>
			<strong>お問合わせありがとうございます。</strong><br>
      内容を確認し担当者よりご連絡差し上げます。<br>
      資料をご希望のお客様はご記入いただいたご住所に資料を送付いたします。
		</p>
	</div>

</div>


	<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
