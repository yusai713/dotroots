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
					<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="DotRootsのロゴ画像"></a>
				</p>
				<!-- gnav -->
				<nav class="header__nav gnav">
					<ul class="gnav__list">
						<li class="gnav__item"><a href="#about">About</a></li>
						<li class="gnav__item"><a href="#news">News</a></li>
						<li class="gnav__item"><a href="#menu">Menu</a></li>
						<li class="gnav__item"><a href="#service">Service</a></li>
						<li class="gnav__item"><a href="#access">Access</a></li>
						<li class="gnav__item"><a href="#other">Other</a></li>
					</ul>
				</nav><!-- /gnav -->
			</div>
			<div class="header__info header-info">
				<p class="header-info__area">OKINAWA URUMA</p>
				<p class="header-info__time">OPEN　9:00-17:30</p>
				<p class="header-info__time">CLOSED　Tue. Thu.</p>

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
		</div>
	</header><!-- /header -->
