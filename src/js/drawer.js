export default function drawer() {
	$('.drawer__item > a').click(function () {
		$('.drawer__checkbox').click();
	});
}
