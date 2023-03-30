// ナビゲーションメニューのホバー
$(function () {
	$(".onhover").hover(function () {
		subHeight = $(".dropdown_list").height();
		$(".onhover").removeClass("active");
		if (subHeight <= 0) {
			$(".dropdown_list").addClass("active");
		} else {
			$(".dropdown_list").removeClass("active");
		}
	});
});

$(function () {
	$(".onhover2").hover(function () {
		subHeight = $(".dropdown_list2").height();
		$(".onhover2").removeClass("active");
		if (subHeight <= 0) {
			$(".dropdown_list2").addClass("active");
		} else {
			$(".dropdown_list2").removeClass("active");
		}
	});
});

// お知らせのトグル
$(function () {
	$('.nav-open').click(function () {
		$(this).toggleClass('show');
		$(this).next('nav').slideToggle(300);
	});
});

$(function () {
	$('.onclicksp').click(function () {
		$('.sp_nav_submenu').toggleClass('showsubmenu');
		$(this).next('sp_nav_submenu').slideToggle(300);
	});
});

$(function () {
	$('.onclicksp2').click(function () {
		$('.sp_nav_submenu2').toggleClass('showsubmenu2');
		$(this).next('sp_nav_submenu2').slideToggle(300);
	});
});