$(function() {
	$(document).scroll(function() {
		var scroG = $(document).scrollTop(); //获取屏幕的滚动高度
		if (scroG > 5) {
			$(".Toptool").addClass("scrolledDown");
			$(".Topl").css({"backgroundColor":"#ccc"});
			$(".Top_put input").css({"backgroundColor":"#ccc"});
			$(".Top_sp").css({"color":"#666"});
			$(".wot").addClass("wota");
		} else {
			$(".Toptool").removeClass("scrolledDown");
			$(".Topl").css({"backgroundColor":"#fff"});
			$(".Top_put input").css({"backgroundColor":"#fff"});
			$(".Top_sp").css({"color":"#fff"});
			$(".wot").removeClass("wota");
		}
	})
})
