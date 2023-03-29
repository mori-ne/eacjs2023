const box = $("#onhover")
$(function () {
	box.hover(
		function () {
			$(this).css('background', 'red');
		},
		function () {
			$(this).css('background', 'orange');
		}
	)
});