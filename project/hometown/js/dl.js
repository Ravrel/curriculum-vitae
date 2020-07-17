$(function() {
	$("#sub_but").click(function() {
		var username = $("#username").val();
		var passwrod = $("#password").val();
		$.ajax({
			type:"post",
			url:"goods/dl.php",
			data:{
				"username":username,
				"passwrod":passwrod
			},
			success:function(data){
					if(data == 1){
						alert("登录成功!");
						window.location.href="index.php";
					}else{
						alert("登录异常!");
					}
				  }
		})
	})
})
