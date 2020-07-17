$(function(){
	$("#btn_aler").click(function(){
			var userid=$("#userid").val();
			var usernames=$("#usernames").val();
			var userphone=$("#userphone").val();
			var usecard=$("#usecard").val();
			var useradd=$("#useradd").val();
			$.ajax({
				type:"post",
				url:"goods/ger.php",
				data:{
					"userid":userid,
					"usernames":usernames,
					"userphone":userphone,
					"usecard":usecard,
					"useradd":useradd
				},
				success:function(data){
					if(data==1){
						alert("修改成功");
						
						
					}else{
						alert("修改异常");
				}
			}
		})
	})
	
})