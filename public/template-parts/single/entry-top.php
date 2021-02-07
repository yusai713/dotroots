<!-- entry-top -->
<?php if (!is_404()) : ?>
	<div class="entry-top">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/entry-top_pic.png" alt="">
		<?php if (is_archive()) : ?>
			<p class="entry-top__ttl">
				<?php global $cat_name;
				echo $cat_name ?>
			</p>
		<?php elseif (is_single()) : ?>
			<p class="entry-top__ttl">
				Let's Read!
			</p>
		<?php elseif (is_page('news')) : ?>
			<p class="entry-top__ttl">
				<?php the_title() ?>
			</p>
		<?php else : ?>
			<p class="entry-top__ttl">
				DotRoots
			</p>
		<?php endif; ?>
	</div>
<?php endif; ?>
<!-- /entry-top -->
