<!-- entry-content -->
<?php
$cats = get_the_category();
$cat_id = $cats[0]->term_id;
$cat_name = $cats[0]->name;
$cat_link = get_category_link($cat_id);
//$cat_desc = $cats[0]->description;
?>

<article class="entry-content">
	<h1 class="entry-content__ttl"><?php the_title(); ?></h1>
	<p class="entry-content__info">
		<?php if (get_the_time('U') !== get_the_modified_time('U')) { ?>
			<time class="entry-content__date" datetime="<?php the_modified_date('Y.m.d H:i:s') ?>"><?php the_modified_date('Y.m.d') ?></time>
		<?php } else { ?>
			<time class="entry-content__date" datetime="<?php echo get_the_date('Y.m.d H:i:s') ?>"><?php echo get_the_date('Y.m.d') ?></time>
		<?php } ?>
		<?php if (is_single()) : ?>
			<span class="entry-content__category"><?php echo $cat_name; ?></span>
		<?php endif; ?>
	</p>
	<div class="entry-content__thumbnail">
		<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('eyecatch'); ?>
		<?php else : ?>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png" alt="no-img画像" />
		<?php endif; ?>
	</div>
	<div class="entry-content__body"><?php the_content(); ?></div>
	<div class="entry-content__to-back">
		<a href="<?php echo $cat_link; ?>"><span></span>「<?php echo $cat_name; ?>」の記事一覧へ</a>
	</div>
</article>
<!-- /entry-content -->
