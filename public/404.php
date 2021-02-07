<?php get_header(); ?>

<!-- container -->
<div class="container">
	<?php get_template_part('template-parts/single/entry-top'); ?>

	<!-- main -->
	<main class="main">
		<div class="c-flex c-flex--jc-center error-page">
			<div class="error-page__inner">
				<h1 class="error-page__ttl">ページが見つかりません。</h1>
				<p class="error-page__txt">ご指定のURLが間違っているか、お探しのページが削除された可能性がございます。</p>
				<div class="error-page__thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/404.png" alt="404エラー">
				</div>
				<div class="error-page__btn">
					<a href="<?php echo esc_url(home_url('/')); ?>" class="c-btn c-btn--primary"><i class="fa fa-arrow-circle-right before" aria-hidden="true"></i> ホームに戻る</a>
				</div>
			</div>
		</div>
	</main>
	<!-- /main -->
	<?php get_footer(); ?>
