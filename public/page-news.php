<?php
/*
Template Name: 新着記事一覧
*/
?>

<?php get_header(); ?>

<!-- container -->
<div class="container">
	<?php get_template_part('template-parts/single/entry-top'); ?>

	<!-- main -->
	<main class="main">
		<!-- archive -->
		<div class="archive">
			<div class="c-flex archive__list">
				<?php
				$paged = (int) get_query_var('paged');
				$args = array(
					'posts_per_page' => 9,
					'paged' => $paged,
					'orderby' => 'post_date',
					'order' => 'DESC',
					'post_type' => 'post',
					'post_status' => 'publish'
				);
				$the_query = new WP_Query($args);

				if ($the_query->have_posts()) :
					while ($the_query->have_posts()) : $the_query->the_post();
						get_template_part('template-parts/common/article-card');
					endwhile;
				endif;

				if ($the_query->max_num_pages > 1) {
					echo '<nav class="pagination">';
					echo paginate_links(array(
						'base' => get_pagenum_link(1) . '%_%',
						'format' => 'page/%#%/',
						'prev_text'    => ' ',
						'next_text'    => ' ',
						'type'         => 'list',
						'current' => max(1, $paged),
						'total' => $the_query->max_num_pages
					));
					echo '</nav>';
				}

				wp_reset_postdata();
				?>
			</div>
		</div>
		<!-- /archive -->
	</main>
	<!-- /main -->
	<?php get_footer(); ?>
