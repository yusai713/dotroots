<!-- news -->
<section id="to-news" class="news">
	<h2 class="c-heading news__ttl">NEWS</h2>
	<div class="c-flex news__list">
		<?php
		$cat_posts = get_posts(array(
			'post_type' => 'post', // 投稿タイプ
			'posts_per_page' => 3, // 表示件数
			'orderby' => 'date', // 表示順の基準
			'order' =>  'DESC' //新着順
		));
		global $post;
		if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>
				<!-- c-card -->
				<article class="c-card news__item js-fadein">
					<?php if (has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" class="c-card__inner" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)">
						<?php else : ?>
							<a href="<?php the_permalink(); ?>" class="c-card__inner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png)">
							<?php endif; ?>
							<div class="c-card__box">
								<p class="c-card__date"><?php the_time('Y.m.d') ?></p>
								<h2 class="c-card__ttl">
									<?php if (wp_is_mobile()) {
										if (mb_strlen($post->post_title) > 40) {
											$title = mb_substr($post->post_title, 0, 40);
											echo $title . '...';
										} else {
											echo $post->post_title;
										}
									} else {
										if (mb_strlen($post->post_title) > 32) {
											$title = mb_substr($post->post_title, 0, 32);
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
				<!-- /c-card -->
		<?php endforeach;
		endif;
		wp_reset_postdata(); ?>
	</div>
	<div class="news__btn js-fadein">
		<a href="<?php echo esc_url(home_url('/news')); ?>" class="c-btn c-btn--primary">more</a>
	</div>
</section>
<!-- /news -->
