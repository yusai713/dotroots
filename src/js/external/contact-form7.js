export default function contactForm7() {
	$(".wpcf7-form > p").addClass("wpcf7__row");
	$(".wpcf7__row:has(label):has(.your-message)").addClass("wpcf7__row--textarea");
	$(".wpcf7__row:last-of-type").addClass("c-btn c-btn--primary");
	jQuery(function($){
		const elem = $('label:has(.your-message)');
		const elemTxt = elem.html();// 対象の文字列を取得
		const replaceTxt = elemTxt.replace(/ コメントまたはメッセージ/g,'<span class="wpcf7__textarea-label"> コメントまたはメッセージ</span>');
		elem.html(replaceTxt);// 差し替え
	});
}
