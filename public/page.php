<?php get_header(); ?>

<!--main-->
<main class="main">
	<!--pageSingleArticle-->
	<section class="pageSingle">
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
		</div>
	</section>
</main>
<!--/main-->
<?php get_footer(); ?>
