<!-- news -->
<section id="to-news" class="news">
	<h2 class="news__ttl c-heading">News</h2>
	<div class="news__list c-flex">
		<?php
		$cat_posts = get_posts(array(
			'post_type' => 'post', // 投稿タイプ
			'posts_per_page' => 3, // 表示件数
			'orderby' => 'date', // 表示順の基準
			'order' =>  'DESC' //新着順
		));
		global $post;
		if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>
				<!-- news-card -->
				<article class="news__item news-card c-card">
					<?php if (has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" class="news-card__link c-card__inner" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)">
						<?php else : ?>
							<a href="<?php the_permalink(); ?>" class="news-card__link c-card__inner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png)">
							<?php endif; ?>
							<div class="news-card__box c-card__box">
								<p class="news-card__date"><?php the_time('Y.m.d') ?></p>
								<h2 class="news-card__ttl">
									<?php if (wp_is_mobile()) {
										if (mb_strlen($post->post_title) > 29) {
											$title = mb_substr($post->post_title, 0, 29);
											echo $title . '...';
										} else {
											echo $post->post_title;
										}
									} else {
										if (mb_strlen($post->post_title) > 13) {
											$title = mb_substr($post->post_title, 0, 13);
											echo $title . '...';
										} else {
											echo $post->post_title;
										}
									}
									?>
								</h2>
							</div>
							</a>
				</article>
				<!-- /news-card -->
		<?php endforeach;
		endif;
		wp_reset_postdata(); ?>
		</a>
	</div>
	<div class="news__btn">
		<a href="" class="c-btn c-btn--primary">more</a>
	</div>
</section>
<!-- /news -->
