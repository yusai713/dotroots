<!--drawer-->
<div class="header__drawer drawer">
	<input class="drawer__checkbox" id="drawerCheckbox" type="checkbox">
	<label class="drawer__icon" for="drawerCheckbox">
		<span class="drawer__icon-parts"></span>
	</label>
	<label class="drawer__overlay" for="drawerCheckbox"></label>
	<nav class="drawer__menu">
		<ul class="drawer__list">
			<li class="drawer__item">
				<a href="<?php echo esc_url(home_url('/')); ?>">TOP</a>
			</li>
			<li class="drawer__item"><a href="<?php echo get_page_link(46); ?>">CONSULTING</a></li>
			<li class="drawer__item"><a href="<?php echo get_page_link(48); ?>">PRODUCT</a></li>
			<li class="drawer__item"><a href="<?php echo get_category_link(3); ?>">NEWS</a></li>
			<li class="drawer__item"><a href="<?php echo get_page_link(42); ?>">COMPANY</a></li>
			<li class="drawer__item"><a href="https://en-gage.net/worldlead/">RECRUIT</a></li>
			<li class="drawer__item drawer__sns">
				<a href="https://twitter.com/_Growth_Career?fbclid=IwAR2XR8d8QFVInLS7hsak3DW_w1wX8dF20W7TYnV6NwUgdAurTKq0vbgMc0Y" class="">
					<i class="fab fa-twitter-square"></i>
				</a>
				<a href="https://www.facebook.com/World-Lead-CoLtd-1885973974987620/" class="">
					<i class="fab fa-facebook-square"></i>
				</a>
				<a href="https://www.instagram.com/growth_career_/?hl=ja">
					<i class="fab fa-instagram"></i>
				</a>
			</li>
			<li class="drawer__item drawer__btn">
				<a href="<?php echo get_page_link(150); ?>">CONTACT</a>
			</li>
		</ul>
	</nav>
</div>
<!--/drawer-->
