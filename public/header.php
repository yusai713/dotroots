<!DOCTYPE html>
<html lang="ja-JP">

<head>
	<meta charset="UTF-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="canonical" href="{{ url }}">
	<?php wp_head(); ?>
</head>

<body>
	<!-- header -->
	<header class="header">
		<div class="header__inner">
			<div class="header__box">
				<p class="header__logo">
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<?php if (is_mobile()) : ?>
							<img src="<?= get_template_directory_uri(); ?>/assets/images/common/logo-sp.png" alt="DotRootsのロゴ文字">
						<?php else : ?>
							<img src="<?= get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="DotRootsのロゴイラスト">
						<?php endif; ?>
					</a>
				</p>
				<!-- gnav -->
				<?php get_template_part('template-parts/gnav'); ?>
				<!-- /gnav -->
			</div>
			<div class="header__info header-info">
				<div class="header-info__inner">
					<p class="header-info__area">OKINAWA URUMA</p>
					<p class="header-info__time">OPEN　9:00-17:30</p>
					<p class="header-info__time">CLOSED　Tue. Thu.</p>
				</div>
			</div>
			<div class="header__sns sns-box">
				<ul class="sns-box__list c-flex c-flex--jc-center">
					<li class="sns-box__item"><a href=""><img src="<?= get_template_directory_uri(); ?>/assets/images/common/instagram-icon.png" alt="instagramのアイコン"></a></li>
					<li class="sns-box__item"><a href=""><img src="<?= get_template_directory_uri(); ?>/assets/images/common/line-icon.png" alt="lineのアイコン"></a></li>
					<li class="sns-box__item"><a href=""><img src="<?= get_template_directory_uri(); ?>/assets/images/common/facebook-icon.png"" alt=" facebookのアイコン"></a></li>
					<li class=" sns-box__item"><a href=""><img src="<?= get_template_directory_uri(); ?>/assets/images/common/twitter-icon.png" alt="twitterのアイコン"></a></li>
				</ul>
			</div>
			<a href="#" class="header__totop" id="js-totop">TOP</a>
			<!-- drawer -->
			<?php if (is_mobile()) : ?>
				<?php get_template_part('template-parts/drawer'); ?>
			<?php endif; ?>
			<!-- /drawer -->
		</div>
	</header><!-- /header -->
