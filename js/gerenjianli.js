// 页面滚动导航栏变色

$(function() {
	$(document).scroll(function() {
		var scroG = $(document).scrollTop();
		if (scroG > 5) {
			$(".navigationBar").css("backgroundColor", "#fff");
			$(".font").css("color", "#666");
			$(".navbar-default .navbar-nav>li>a").css("color", "#666");
			$(".navigationBar").css("box-shadow", "0 13px 8px -10px rgba(0, 0, 0, 0.1)");
		} else {
			$(".navigationBar").css("backgroundColor", "rgba(0, 0, 0, 0.0)");
			$(".font").css("color", "#fff");
			$(".navbar-default .navbar-nav>li>a").css("color", "#fff");
			$(".navigationBar").css("box-shadow", "0 13px 8px -10px rgba(0, 0, 0, 0.0)");
		}
	})
	//锚点
	$('a').click(function() {
		//根据a标签的href转换为id选择器，获取id元素所处的位置，并高度减50px（这里根据需要自由设置）
		$('html,body').animate({
			scrollTop: ($($(this).attr('href')).offset().top - 50)
		}, 1000);
	})
	
	// 点击出现二维码
	$(".tub_img1").click(function(){
		$(".tupian").addClass("huantupian1");
		$(".tupian").removeClass("huantupian2");
		$(".tupian").removeClass("huantupian3");
	})
	
	$(".tub_img2").click(function(){
		$(".tupian").addClass("huantupian2");
		$(".tupian").removeClass("huantupian1");
		$(".tupian").removeClass("huantupian3");
	})
	
	$(".tub_img3").click(function(){
		$(".tupian").addClass("huantupian3");
		$(".tupian").removeClass("huantupian1");
		$(".tupian").removeClass("huantupian2");
	})

})
