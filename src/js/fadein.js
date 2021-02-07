//fadeinアニメーションの制御
export default function fadein() {
	$('.js-fadein').each(function () {
				//ターゲットの位置を取得
				var target = $(this).offset().top;
				//スクロール量を取得
				var scroll = $(window).scrollTop();
				//ウィンドウの高さを取得
				var windowHeight = $(window).height();
				//ターゲットまでスクロールするとフェードインする
				if (scroll > target - windowHeight) {
					$(this).css('opacity', '1');
					$(this).css('transform', 'translateY(0)');
				}
			});
}
