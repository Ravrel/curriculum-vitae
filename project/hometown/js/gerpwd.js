$(function(){
	flag=false;
	$("#usepwd").blur(function(){
		var usepwd=$("#usepwd").val();
		if(usepwd==""){
			$("#btn_Alt").attr("disabled","disabled");
			$("#span_pw").css("display","block");
		}else{
			$("#btn_Alt").removeAttr("disabled");
			$("#span_pw").css("display","none");
			$.ajax({
					type:"post",
					url:"goods/gerpwd.php",
					data:{
						"usepwd":usepwd
					},
					success:function(data){
						if(data!=1){
							$("#btn_Alt").attr("disabled","disabled");
							$("#span_pwd").css("display","block");
						}else{
							$("#btn_Alt").removeAttr("disabled");
							$("#span_pwd").css("display","none");
						}
					 }
				})
			}
		})
	
	
	
	$("#btn_Alt").click(function(){
		var quepwd=$("#quepwd").val();
		var yespwd=$("#yespwd").val();
		if(quepwd!=yespwd){
			$("#span_yepwd").css("display","block");
			$("#span_yepw").css("display","none");
		}else if(quepwd==""){
			$("#span_yepw").css("display","block");
		}else{
			$.ajax({
				type:"post",
				url:"goods/geralt.php",
				data:{
					"quepwd":quepwd,
					"yespwd":yespwd
				},
				success:function(data){
					if(data==1){;
						alert("修改成功");
						$("#myModalAlter").modal("toggle");
						// $.session.Clear();
						window.top.location.href="login.html";
					}else{
						alert("修改异常");
					}
				}
			})
		}
	})
})