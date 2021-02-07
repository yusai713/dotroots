<!-- c-card -->
<article class="c-card archive__item">
	<?php if (has_post_thumbnail()) : ?>
		<a href="<?php the_permalink(); ?>" class="c-card__inner" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)">
		<?php else : ?>
			<a href="<?php the_permalink(); ?>" class="c-card__inner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png)">
			<?php endif; ?>
			<div class="c-card__box">
				<p class="c-card__date"><?php the_time('Y.m.d') ?></p>
				<h2 class="c-card__ttl">
					<?php if (wp_is_mobile()) {
						if (mb_strlen($post->post_title) > 25) {
							$title = mb_substr($post->post_title, 0, 25);
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
<!-- /c-card -->
