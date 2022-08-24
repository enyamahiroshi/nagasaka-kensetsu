<?php get_header(); ?>

<?php // ここから：各ページ毎のコンテンツ -------------------------------- ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_wrap_middle">

	<div class="contact_lead">
		<p>
			<strong>土地探し、新築、増改築　などお気軽にお問合わせください。<br>「信頼の家造り」を信条に、誠意と真心そしてプロの技術で、納得の家づくりをご提案いたします。</strong>
		</p>
	</div>

	<div class="content_tel">
		<h4>お電話でお問合わせ・資料請求</h4>
		<div class="content_tel_entrytime">お電話受付時間　7:30〜18:00</div>
		<div class="content_tel_num"><span>TEL.</span>026-272-2762</div>
	</div>

	<div class="content_form">
		<h4>ウェブからのお問合わせ・資料請求</h4>
		<?php //フォーム読込み ?>
		<?php the_content(); ?>
	</div>

</div>


	<?php endwhile; endif; ?>
<?php // ここまで：各ページ毎のコンテンツ -------------------------------- ?>

<?php get_footer(); ?>
