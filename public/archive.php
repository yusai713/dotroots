<?php get_header(); ?>

<!-- container -->
<div class="container">
	<?php get_template_part('template-parts/single/entry-top'); ?>

	<!-- main -->
	<main class="main">
		<div class="archive">
			<div class="c-flex archive__list">
				<?php
				$posts = get_posts(array(
					'paged' => $paged,
					'posts_per_page' => 9, // 表示件数
					'orderby' => 'date', // 表示順の基準
					'order' =>  'DESC' //新着順
				));
				global $post;
				if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
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
