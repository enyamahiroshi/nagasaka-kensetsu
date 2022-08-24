<?php
do_action( 'single-fudo2' );

//面積
$area = get_post_meta($post_id, 'tochikukaku', true);
$area_tsubo = floor($area * 0.3025 *100) / 100;
?>

<div id="bukken_info_table">

<table class="bit0 summary">
	<tr>
		<th>種別</th>
		<td><?php my_custom_bukkenshubetsu_print($post_id); ?></td>
		<th>物件番号</th>
		<td><?php echo get_post_meta($post_id, 'shikibesu', true);?></td>
	</tr>
	<tr>

<?php //土地以外
if ( get_post_meta($post_id,'bukkenshubetsu',true) > 1200 && get_post_meta($post_id,'bukkenshubetsu',true) != 3212 ): ?>
		<th>間取</th>
		<td>
			<?php my_custom_madorisu_print($post_id); ?>
			<?php my_custom_madorinaiyo_print($post_id); ?>
			<?php echo get_post_meta($post_id, 'madoribiko', true);?>
		</td>
<?php //土地
else: ?>
		<th>面積</th>
		<td><?php echo $area_tsubo; ?>坪 (<?php echo get_post_meta($post_id, 'tochikukaku', true);?>m&sup2;)</td>
<?php endif;?>
		<th><?php if ( get_post_meta($post_id,'bukkenshubetsu',true) < 3000 ) { echo '価格';}else{echo '賃料';} ?></th>
		<td>
			<?php
			if( get_post_meta($post_id, 'seiyakubi', true) != "" ){
				echo 'ご成約済';
			}else{
				$kakaku_data = get_post_meta($post_id,'kakaku',true);
				if(is_numeric($kakaku_data)){
					echo number_format(round($kakaku_data/10000));
					echo "万円";
				}
			}
			?>
		</td>
	</tr>
	<tr>
		<th>所在地</th>
		<td colspan="3">
			<?php my_custom_shozaichi_print($post_id); ?><?php echo get_post_meta($post_id, 'shozaichimeisho', true); ?>
		</td>
	</tr>

	<?php if( get_post_meta($post_id, 'koutsurosen1', true) !="" || get_post_meta($post_id, 'koutsubusstei1', true) !=""): ;?>
	<tr>
		<th>交通</th>
		<td colspan="3"><?php my_custom_koutsu1_print($post_id); ?>
		<?php my_custom_koutsu2_print($post_id); ?>
		<?php if( get_post_meta($post_id, 'koutsusonota', true) !="") 	echo '<br />'.get_post_meta($post_id, 'koutsusonota', true);?></td>
	</tr>
	<?php endif; ?>

	<?php if( get_post_meta($post_id, 'tatemonochikunenn', true) || get_post_meta($post_id, 'tatemonoshinchiku', true) != ''): ?>
	<tr>
		<th>築年月</th>
		<td><?php echo get_post_meta($post_id, 'tatemonochikunenn', true);?></td>
		<th class="th2">新築/中古</th>
		<td><?php my_custom_tatemonoshinchiku_print($post_id); ?></td>
	</tr>
	<?php endif; ?>

	<?php if( (get_post_meta($post_id, 'nyukyojiki', true) != '') || (get_post_meta($post_id, 'nyukyogenkyo', true) != '')): ?>
	<tr>
		<th>引渡/入居時期</th>
		<td><?php my_custom_nyukyojiki_print($post_id); ?>
		<?php echo get_post_meta($post_id, 'nyukyonengetsu', true);?>
		<?php my_custom_nyukyosyun_print($post_id);?></td>
		<th class="th2">現況</th>
		<td><?php my_custom_nyukyogenkyo_print($post_id); ?></td>
	</tr>
	<?php endif; ?>

<?php if(
		get_post_meta($post_id, 'shuuhenshougaku', true) ||
		get_post_meta($post_id, 'shuuhenchuugaku', true) ||
		get_post_meta($post_id, 'shuuhensonota', true)
		):
?>
	<tr>
		<th>周辺環境</th>
		<td colspan="3">
		<?php if( get_post_meta($post_id, 'shuuhenshougaku', true) !='' ){ ?>
			<?php echo get_post_meta($post_id, 'shuuhenshougaku', true);?>　
		<?php } ?>
		<?php if( get_post_meta($post_id, 'shuuhenchuugaku', true) !='' ){ ?>
			<?php echo get_post_meta($post_id, 'shuuhenchuugaku', true);?>
		<?php } ?>
		<?php if( get_post_meta($post_id,'shuuhensonota',true)!='' && ( get_post_meta($post_id, 'shuuhenshougaku', true) !='' || get_post_meta($post_id, 'shuuhenchuugaku', true) !='')){ ?>
			<br />
		<?php } ?>
			<?php echo get_post_meta($post_id, 'shuuhensonota', true);?>
		</td>
	</tr>
<?php endif; ?>

	<tr>
		<th class="aligntop">設備・条件</th>
		<td colspan="3"><?php my_custom_setsubi_print($post_id); ?></td>
	</tr>
</table>

<table class="bit1">
	<tr>

	<?php if( get_post_meta($post_id, 'kakakutsubo', true) !="" || get_post_meta($post_id, 'kakakukyouekihi', true) !=""): ;?>
			<th>坪単価</th>
			<td><?php my_custom_kakakutsubo_print($post_id) ;?></td>
			<th>共益費・管理費</th>
			<td><?php echo get_post_meta($post_id, 'kakakukyouekihi', true);?>円</td>
	<?php endif; ?>
	</tr>

	<tr>
	<?php if( get_post_meta($post_id, 'kakakuhyorimawari', true) !="" ||  get_post_meta($post_id, 'kakakurimawari', true) !=""){ ;?>
			<th>満室時表面利回り</th>
			<td><?php echo get_post_meta($post_id, 'kakakuhyorimawari', true);?>%</td>

			<th>現行利回り</th>
			<td><?php echo get_post_meta($post_id, 'kakakurimawari', true);?>%</td>
	<?php } ?>
	</tr>

	<tr>
	<?php if( get_post_meta($post_id, 'shakuchiryo', true) !="" || get_post_meta($post_id, 'shakuchikikan', true) !=""){ ;?>
			<th>借地料／借地期限</th>
			<td colspan="3"><?php echo my_custom_shakuchi_print($post_id);?></td>
	<?php } ?>
	</tr>
</table>

<?php if(
get_post_meta($post_id, 'kakakushikikin') ||
get_post_meta($post_id, 'kakakureikin') ||
get_post_meta($post_id, 'kakakuhoshoukin') ||
get_post_meta($post_id, 'kakakukenrikin') ||
get_post_meta($post_id, 'kakakushikibiki') ||
get_post_meta($post_id, 'kakakukoushin')
): ?>
<table class="bit3">
	<tr>

	<?php if( get_post_meta($post_id, 'kakakushikikin', true) !="" || get_post_meta($post_id, 'kakakureikin', true) !=""){ ;?>
		<th>敷金</th>
		<td><?php my_custom_kakakushikikin_print($post_id); ?></td>
		<th>礼金</th>
		<td><?php my_custom_kakakureikin_print($post_id); ?></td>
	<?php } ?>
	</tr>

	<tr>
	<?php if( get_post_meta($post_id, 'kakakuhoshoukin', true) !="" || get_post_meta($post_id, 'kakakukenrikin', true) !=""){ ;?>
		<th>保証金</th>
		<td><?php my_custom_kakakuhoshoukin_print($post_id); ?></td>
		<th>権利金</th>
		<td><?php my_custom_kakakukenrikin_print($post_id); ?></td>
	<?php } ?>
	</tr>

	<tr>
	<?php if( get_post_meta($post_id, 'kakakushikibiki', true) !="" || get_post_meta($post_id, 'kakakukoushin', true) !=""){ ;?>
		<th>償却・敷引金</th>
		<td><?php my_custom_kakakushikibiki_print($post_id); ?></td>
		<th>更新料</th>
		<td><?php my_custom_kakakukoushin_print($post_id); ?></td>
	<?php } ?>

	</tr>
</table>
<?php endif; ?>

<table class="bit4">

<!-- 土地以外 -->
<?php if ( get_post_meta($post_id,'bukkenshubetsu',true) > 1200 && get_post_meta($post_id,'bukkenshubetsu',true) != 3212 ) { ?>

<?php if( get_post_meta($post_id, 'tatemonokozo', true) != '' || get_post_meta($post_id,'tatemonokentikumenseki',true) != ''): ?>
	<tr>
		<th>建物構造</th>
		<td><?php my_custom_tatemonokozo_print($post_id) ?></td>
		<th class="th2">建築面積</th>
		<td>
			<?php if(get_post_meta($post_id, 'tatemonokentikumenseki', true)){ ?>
			<?php echo get_post_meta($post_id, 'tatemonokentikumenseki', true);?>m&sup2;
			<?php } ?>
		</td>
	</tr>
<?php endif; ?>

<?php if( get_post_meta($post_id,'tatemonozentaimenseki',true)!='' || get_post_meta($post_id,'tatemononobeyukamenseki',true)!='' ){ ?>
	<tr>
		<th>敷地全体面積</th>
		<td><?php echo get_post_meta($post_id, 'tatemonozentaimenseki', true);?>m&sup2;</td>
		<th class="th2">延べ床面積</th>
		<td><?php echo get_post_meta($post_id, 'tatemononobeyukamenseki', true);?>m&sup2;</td>
	</tr>
<?php } ?>

<?php if( get_post_meta($post_id, 'heyabarukoni', true) || get_post_meta($post_id, 'heyamuki', true) != ''): ?>
	<tr>
		<th>バルコニー</th>
		<td><?php echo get_post_meta($post_id, 'heyabarukoni', true);?>m&sup2;</td>
		<th class="th2">向き</th>
		<td><?php my_custom_heyamuki_print($post_id); ?></td>
	</tr>
<?php endif; ?>

<?php if( get_post_meta($post_id, 'bukkennaiyo', true) || get_post_meta($post_id, 'bukkensoukosu', true)): ?>
	<tr>
		<th>部屋/区画番号</th>
		<td><?php echo get_post_meta($post_id, 'bukkennaiyo', true);?></td>
		<th class="th2">総戸/区画数</th>
		<td><?php echo get_post_meta($post_id, 'bukkensoukosu', true);?></td>
	</tr>
<?php endif; ?>

<?php if( get_post_meta($post_id, 'kanrininn', true)!='' || get_post_meta($post_id, 'kanrikeitai', true)!='' || get_post_meta($post_id, 'kanrikumiai', true)!='' ){ ?>
	<tr>
		<th>管理形態</th>
		<td colspan="3">
		<?php my_custom_kanrikeitai_print($post_id); ?>
		<?php my_custom_kanrininn_print($post_id);?>
		<?php my_custom_kanrikumiai_print($post_id); ?>
		</td>
	</tr>
<?php } ?>

<?php if( get_post_meta($post_id, 'kakakuhoken', true)!='' || get_post_meta($post_id, 'kakakuhokenkikan', true)!='' || get_post_meta($post_id, 'kakakutsumitate', true)!='' ){ ?>
	<tr>
		<th>住宅保険料</th>
		<td><?php my_custom_kakakuhoken_print($post_id);?><?php echo get_post_meta($post_id, 'kakakuhokenkikan', true);?>年</td>
		<th class="th2">修繕積立金</th>
		<td><?php echo get_post_meta($post_id, 'kakakutsumitate', true); ?>円</td>
	</tr>
<?php } ?>

<?php } ?>




<!-- 土地 -->
<?php if( get_post_meta($post_id,'tochichimoku',true)!='' || get_post_meta($post_id,'tochiyouto',true)!='' ){ ?>
	<tr>
		<th>地目</th>
		<td><?php my_custom_tochichimoku_print($post_id); ?></td>
		<th class="th2">用途地域</th>
		<td><?php my_custom_tochiyouto_print($post_id); ?></td>
	</tr>
<?php } ?>

<?php if( get_post_meta($post_id,'tochikeikaku',true)!='' || get_post_meta($post_id,'tochichisei',true)!='' ){ ?>
	<tr>
		<th>都市計画</th>
		<td><?php my_custom_tochikeikaku_print($post_id); ?></td>
		<th class="th2">地勢</th>
		<td><?php my_custom_tochichisei_print($post_id); ?></td>
	</tr>
<?php } ?>

<?php if( get_post_meta($post_id,'tochikukaku',true)!='' ){ ?>
	<tr>
		<th>土地面積</th>
		<td colspan="3"><?php echo $area_tsubo; ?>坪 (<?php echo get_post_meta($post_id, 'tochikukaku', true);?>m&sup2;)</td>
	</tr>
<?php } ?>

<?php if( get_post_meta($post_id,'tochishido',true)!='' ){ ?>
	<tr>
		<th>私道負担面積</th>
		<td colspan="3"><?php echo get_post_meta($post_id, 'tochishido', true);?>m&sup2;</td>
	</tr>
<?php } ?>

<?php if( get_post_meta($post_id,'tochisetback',true)!='' || get_post_meta($post_id,'tochisetback2',true)!='' ){ ?>
	<tr>
		<th>セットバック</th>
		<td><?php my_custom_tochisetback_print($post_id); ?></td>
		<th class="th2">セットバック量</th>
		<td>
			<?php if(get_post_meta($post_id, 'tochisetback2', true)){ ?>
			<?php echo get_post_meta($post_id, 'tochisetback2', true);?>m&sup2;
			<?php } ?>
		</td>
	</tr>
<?php } ?>

<?php if( get_post_meta($post_id,'tochikenpei',true)!='' || get_post_meta($post_id,'tochiyoseki',true)!='' ){ ?>
	<tr>
		<th>建ぺい率</th>
		<td><?php echo get_post_meta($post_id, 'tochikenpei', true);?>%</td>
		<th class="th2">容積率</th>
		<td><?php echo get_post_meta($post_id, 'tochiyoseki', true);?>%</td>
	</tr>
<?php } ?>

<?php if( get_post_meta($post_id,'tochikenri',true)!='' || get_post_meta($post_id,'tochisetsudo',true)!='' ){ ?>
	<tr>
		<th>土地権利</th>
		<td><?php my_custom_tochikenri_print($post_id); ?></td>
		<th class="th2">接道状況</th>
		<td><?php my_custom_tochisetsudo_print($post_id); ?></td>
	</tr>
<?php } ?>

<?php if( get_post_meta($post_id,'tochisetsudohouko1',true)!='' || get_post_meta($post_id,'tochisetsudomaguchi1',true)!='' ){ ?>
	<tr>
		<th>接道方向1</th>
		<td><?php my_custom_tochisetsudohouko1_print($post_id); ?></td>
		<th class="th2">接道間口1</th>
		<td><?php echo get_post_meta($post_id, 'tochisetsudomaguchi1', true);?>m</td>
	</tr>
<?php } ?>


<?php if( get_post_meta($post_id,'tochisetsudoshurui1',true)!='' || get_post_meta($post_id,'tochisetsudofukuin1',true)!='' ){ ?>
	<tr>
		<th>接道種別1</th>
		<td><?php my_custom_tochisetsudoshurui1_print($post_id); ?></td>
		<th class="th2">接道幅員1</th>
		<td><?php echo get_post_meta($post_id, 'tochisetsudofukuin1', true);?>m</td>
	</tr>
<?php } ?>

<?php if( get_post_meta($post_id,'tochisetsudoichishitei1',true)!='' ){ ?>
	<tr>
		<th>位置指定道路1</th>
		<td colspan="3"><?php my_custom_tochisetsudoichishitei1_print($post_id); ?></td>
	</tr>
<?php } ?>

<?php if( get_post_meta($post_id,'tochisetsudohouko2',true)!='' || get_post_meta($post_id,'tochisetsudomaguchi2',true)!='' ){ ?>
	<tr>
		<th>接道方向2</th>
		<td><?php my_custom_tochisetsudohouko2_print($post_id); ?></td>
		<th class="th2">接道間口2</th>
		<td><?php echo get_post_meta($post_id, 'tochisetsudomaguchi2', true);?>m</td>
	</tr>
<?php } ?>

<?php if( get_post_meta($post_id,'tochisetsudoshurui2',true)!='' || get_post_meta($post_id,'tochisetsudofukuin2',true)!='' ){ ?>
	<tr>
		<th>接道種別2</th>
		<td><?php my_custom_tochisetsudoshurui2_print($post_id); ?></td>
		<th class="th2">接道幅員2</th>
		<td><?php echo get_post_meta($post_id, 'tochisetsudofukuin2', true);?>m</td>
	</tr>
<?php } ?>

<?php if( get_post_meta($post_id,'tochisetsudoichishitei2',true)!='' ){ ?>
	<tr>
		<th>位置指定道路2</th>
		<td colspan="3"><?php my_custom_tochisetsudoichishitei2_print($post_id); ?></td>
	</tr>
<?php } ?>

<?php if( get_post_meta($post_id,'tochikokudohou',true)!='' ){ ?>
	<tr>
		<th>国土法届出</th>
		<td colspan="3"><?php my_custom_tochikokudohou_print($post_id); ?></td>
	</tr>
<?php } ?>

<!-- .土地 -->

<?php if( (get_post_meta($post_id, 'chushajoryokin', true) != '') || (get_post_meta($post_id, 'torihikitaiyo', true) != '')): ?>
	<tr>
		<th>駐車場</th>
		<td><?php my_custom_chushajo_print($post_id); ?></td>
		<th class="th2">取引態様</th>
		<td><?php my_custom_torihikitaiyo_print($post_id); ?></td>
	</tr>
<?php endif; ?>


	<?php if( get_post_meta($post_id,'targeturl',true)!='' ){ ?>
	<tr>
		<th>URL</th>
		<td colspan="3"><?php my_custom_targeturl_print($post_id); ?></td>
	</tr>
	<?php } ?>

	<?php if( get_post_meta($post_id,'koukaijisha',true)!='' || get_post_meta($post_id,'jyoutai',true)!='' ){ ?>
	<tr>
		<th>自社物</th>
		<td><?php my_custom_koukaijisha_print($post_id);?></td>
		<th class="th2">状態</th>
		<td><?php my_custom_jyoutai_print($post_id);?></td>
	</tr>
	<?php } ?>


<?php do_action( 'single-fudo3' ); ?>

</table>
</div><!--//#bukken_info_table-->
