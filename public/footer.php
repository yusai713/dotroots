  <!-- footer -->
  <footer class="footer">
  	<div class="footer__inner">
  		<p class="footer__logo">
  			<a href="<?php echo esc_url(home_url('/')); ?>">DotRoots</a>
  		</p>
  		<p class="footer__info">
  			所在地：〒904-1107沖縄県うるま市石川曙1丁目8-20<br />
  			駐車場：5台<br />
  			営業時間：8:30-18:00（火曜・木曜定休）
  		</p>
  		<div class="footer__sns sns-box">
  			<ul class="footer-sns__list c-flex c-flex--jc-center">
  				<li class="sns-box__item"><a href=""><img src="<?= get_template_directory_uri(); ?>/assets/images/common/instagram-icon2.png" alt="instagramのアイコン"></a></li>
  				<li class="sns-box__item"><a href=""><img src="<?= get_template_directory_uri(); ?>/assets/images/common/line-icon2.png" alt="lineのアイコン"></a></li>
  				<li class="sns-box__item"><a href=""><img src="<?= get_template_directory_uri(); ?>/assets/images/common/facebook-icon2.png"" alt=" facebookのアイコン"></a></li>
  				<li class=" sns-box__item"><a href=""><img src="<?= get_template_directory_uri(); ?>/assets/images/common/twitter-icon2.png" alt="twitterのアイコン"></a></li>
  			</ul>
  		</div>
  		<small class="footer__copyright">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small>
  	</div>
  	</div>
  </footer><!-- /footer -->
  </div><!-- /container -->

  <!-- script群 -->
  <?php wp_footer(); ?>
  <!-- script群 -->

  </body>

  </html>
