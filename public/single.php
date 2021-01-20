<?php get_header(); ?>
<?php
$cats = get_the_category();
$cat_id = $cats[0]->term_id;
$cat_name = $cats[0]->name;
$cat_desc = $cats[0]->description;
$cat_link = get_category_link($cat_id); ?>

<!--main-->
<main class="main">
	<!--pageSingleArticle-->
	<section class="pageSingle">
		<header class="pageSingle__header">
			<p class="pageSingle__ttl">
				<?php echo $cat_name; ?>
			</p>
			<p class="pageSingle__txt">
				<?php echo $cat_desc; ?>
			</p>
		</header>
		<div class="pageSingle__content">
			<!--singleArticle-->
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="singleArticle">
						<header class="singleArticle__header">
							<h1 class="singleArticle__ttl"><?php the_title(); ?></h1>
							<p class="singleArticle__date"><?php the_time('Y-m-d'); ?></p>
						</header>
						<div class="singleArticle__content">
							<div class="singleArticle__thumbnail">
								<?php if (has_post_thumbnail()) : ?>
									<?php the_post_thumbnail(); ?>
								<?php else : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="no-img" />
								<?php endif; ?>
							</div>
						</div>
						<section class="singleArticle__section">
							<?php the_content(); ?>
						</section>
					</article>
			<?php endwhile;
			endif; ?>
			<!--/singleArticle-->
			<div class="pageSingle__btn">
				<a href="<?php echo esc_url($cat_link); ?>">Back To List</a>
			</div>
		</div>
	</section>
</main>
<!--/main-->
<?php get_footer(); ?>
