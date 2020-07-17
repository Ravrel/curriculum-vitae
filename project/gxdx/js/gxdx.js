$(function() {
	var i = 1;
	$("#ss_iut").click(function() {
		if (i == 1) {
			$(".ss").css({
				"display": "block",
				"padding": "10px 0"
			});
			// animate():自定义动画
			$(".ss").animate({
				height: "30px"
			}, 300);
			i = i - 1;
		} else {
			// animate():自定义动画
			$(".ss").animate({
				height: "0",
				padding: "0"
			}, 300);
			setTimeout(function() {
				$(".ss").css("display", "none");
			}, 300);
			i = i + 1;
		}
	})
	
	
	$(".dh_text>ul>li").hover(function(e){
		$(this).find(".dh_yc").stop().slideToggle(500);
		
	})
})
