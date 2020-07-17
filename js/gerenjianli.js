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
	
	//点击作品集中的div跳转详情页
	$(".sam_zuopin").click(function(){
		var zpj_text=$(this).find("a").eq(0).text();
		console.log(zpj_text);
		if(confirm("确定查看网站详情页吗？")){
			if(zpj_text=="工商银行"){
				window.location.href="project/gsyh/index.html";
			}
			if(zpj_text=="广西大学"){
				window.location.href="project/gxdx/index.html";
			}
			if(zpj_text=="美食后台系统"){
				window.location.href="project/hometown/login.html";
			}
			if(zpj_text=="酷狗首页"){
				window.location.href="project/kugou/index.html";
			}
			if(zpj_text=="京东"){
				window.location.href="project/jingdong/index.html";
			}
			if(zpj_text=="携程"){
				window.location.href="project/xiecheng/index.html";
			}
		}
	})
	
	//点击导航栏li样式改变
	$(".top_gyw").click(function(){
		$(".top_gyw div").addClass("duoyu");
		$(".top_sy div").removeClass("duoyu");
		$(".top_zpj div").removeClass("duoyu");
		$(".top_lxw div").removeClass("duoyu");
	})
	$(".top_zpj").click(function(){
		$(".top_zpj div").addClass("duoyu");
		$(".top_sy div").removeClass("duoyu");
		$(".top_gyw div").removeClass("duoyu");
		$(".top_lxw div").removeClass("duoyu");
	})
	
	$(".top_lxw").click(function(){
		$(".top_lxw div").addClass("duoyu");
		$(".top_sy div").removeClass("duoyu");
		$(".top_gyw div").removeClass("duoyu");
		$(".top_zpj div").removeClass("duoyu");
	})
	$(".top_sy").click(function(){
		$(".top_sy div").addClass("duoyu");
		$(".top_lxw div").removeClass("duoyu");
		$(".top_gyw div").removeClass("duoyu");
		$(".top_zpj div").removeClass("duoyu");
	})
})
