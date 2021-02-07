<div class="header__drawer drawer">
	<input class="drawer__checkbox" id="drawerCheckbox" type="checkbox">
	<label class="drawer__icon" for="drawerCheckbox">
		<span class="drawer__icon-parts"></span>
	</label>
	<label class="drawer__overlay" for="drawerCheckbox"></label>
	<nav class="drawer__menu">
		<ul class="drawer__list c-flex c-flex--column c-flex--jc-space-around">
			<li class="drawer__item"><a href="<?php echo esc_url(home_url('/#to-about')); ?>">About</a></li>
			<li class="drawer__item"><a href="<?php echo esc_url(home_url('/#to-news')); ?>">News</a></li>
			<li class="drawer__item"><a href="<?php echo esc_url(home_url('/#to-menu')); ?>">Menu</a></li>
			<li class="drawer__item"><a href="<?php echo esc_url(home_url('/#to-service')); ?>">Service</a></li>
			<li class="drawer__item"><a href="<?php echo esc_url(home_url('/#to-access')); ?>">Access</a></li>
			<li class="drawer__item c-sns-box">
				<a href="" class="c-sns-box__item"><img src="<?= get_template_directory_uri(); ?>/assets/images/common/instagram-icon.png" alt="instagramのアイコン"></a>
				<a href="" class="c-sns-box__item"><img src="<?= get_template_directory_uri(); ?>/assets/images/common/line-icon.png" alt="lineのアイコン"></a>
				<a href="" class="c-sns-box__item"><img src="<?= get_template_directory_uri(); ?>/assets/images/common/facebook-icon.png" alt=" facebookのアイコン"></a>
				<a href="" class="c-sns-box__item"><img src="<?= get_template_directory_uri(); ?>/assets/images/common/twitter-icon.png" alt="twitterのアイコン"></a>
			</li>
			<li class="drawer__item drawer__btn">
				<a href="<?php echo esc_url(home_url('/#to-contact')); ?>" class="c-btn">Contact</a>
			</li>
		</ul>
	</nav>
</div>
