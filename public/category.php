<?php get_header(); ?>

<?php
$cat_name = get_query_var('category_name');
global $cat_name;
?>

<!-- container -->
<div class="container">
	<?php get_template_part('template-parts/single/entry-top'); ?>

	<!-- main -->
	<main class="main">
		<div class="archive">
			<div class="c-flex archive__list">
				<?php
				$cat_posts = get_posts(array(
					'post_type' => 'post', // 投稿タイプ
					'paged' => $paged,
					'posts_per_page' => 9, // 表示件数
					'orderby' => 'date', // 表示順の基準
					'order' =>  'DESC', //新着順
					'category_name' => $cat_name // 表示したいカテゴリーのスラッグを指定
				));
				global $post;
				if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>
						<?php get_template_part('template-parts/common/article-card'); ?>
				<?php endforeach;
				endif;
				wp_reset_postdata(); ?>

				<!-- ページネーション -->
				<?php if (function_exists("the_pagination")) the_pagination(); ?>
			</div>
		</div>
	</main>
	<!-- /main -->
	<?php get_footer(); ?>
