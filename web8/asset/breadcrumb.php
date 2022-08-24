<?php
//
//	パンくずリスト
//
?>

<div id="breadcrumb">
  <div class="inner">
		<a href="<?php echo esc_url(home_url('/')); ?>" title="HOME" class="home"></a>
<?php

global $post;
//$breadcrumb = [];

//固定ページ
if( is_page() ):
	if ($post->post_parent) {
		$parent = get_post($post->post_parent);
		$breadcrumb[] = $parent;
	}
	$breadcrumb[] = $post;

	for($i=0; $i<count($breadcrumb); $i++){
		$page = get_page($breadcrumb[$i]);
		$url = $page->guid;
		$slug = $page->post_name;
		if(strpos($slug, "-") > 0){
			//スラッグの"-"を" "に置換
			$slug = str_replace("-", " ", $slug);
		}
?>
		<?php if ( $i != count($breadcrumb)-1 ): // 親ページがあればリンクをつける ?>
		<span><a href="<?php echo $url; ?>"><?php echo $slug; ?></a></span>
		<?php else: ?>
		<span class="current"><?php echo $slug; ?></span>
		<?php endif; ?>
<?php
	}
?>

<?php
//施工実績アーカイブ
elseif( is_post_type_archive("works") ):
?>
<span class="current">works</span>

<?php
//リフォームアーカイブ
elseif (is_post_type_archive("reform")):
?>
<span class="current">reform works</span>

<?php
//土地アーカイブ
elseif (is_post_type_archive("fudo")):
?>
<span class="current">fudo</span>

<?php
//NEWS
elseif (is_category()):
	$category = get_query_var('cat');
	$current_cat = get_category($cat);
	$slug = $current_cat->slug;
	if(strpos($slug, "-") > 0){
		//スラッグの"-"を" "に置換
		$slug = str_replace("-", " ", $slug);
	}
?>
	<?php if($slug=="news"): ?>
		<span>news</span>
	<?php else: ?>
		<span><a href="<?php echo get_bloginfo('url'); ?>/news">news</a></span>
		<span class="current"><?php echo $slug; ?></span>
	<?php endif; ?>

<?php
//施工実績シングル
elseif( is_singular("works") ):
?>
		<span><a href="<?php echo get_bloginfo('url'); ?>/works">works</a></span>

<?php
//リフォームシングル
elseif( is_singular("reform") ):
?>
		<span><a href="<?php echo get_bloginfo('url'); ?>/reform_works">reform works</a></span>

<?php
//土地情報シングル
elseif( is_singular("fudo") ):
?>
		<span><a href="<?php echo get_bloginfo('url'); ?>/estate">estate</a></span>

<?php
//NEWSシングル
elseif( is_single() ):
	$terms = get_the_terms( $post->ID , 'category');
	if($terms) {
		foreach( $terms as $term ) {
			$cat = get_term($term->term_id, 'category');
			$slug = $cat->slug;
		}
	}
?>
		<span><a href="<?php echo get_bloginfo('url'); ?>/news">news</a></span>
		<span><a href="<?php echo get_bloginfo('url'); ?>/<?php echo $slug; ?>"><?php echo $slug; ?></a></span>

<?php endif; ?>
	</div>
</div>
