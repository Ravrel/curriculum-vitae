$(function(){
	$("#uname").blur(function(){
		var uname=$("#uname").val();

		$.ajax({
			type:"post",
			url:"repeat.php",
			data{
				"uame":uname
			}
			success:function(data){
				if(data = 1){
					$(".span_name").css("display","block");
					$(".span_name").text("用户名已存在");
				}else{
					$(".span_name").css("display","none");
				}

			}
		})
	})


	$("#btn-default").click(function(){

		var username=$("#uname").val();
		var pwd1=$("#firpwd").val();
		var pwd2=$("#qrpwd").val();
		var phone=$("#phone").val();
		var carNo=$("#carNo").val();
		var address=$("#address").val();

		reg_name=/^[a-z0-9_]{3,20}$/;
		reg_pwd=/^[a-zA-Z0-9_]{6}$/;
		reg_phone=/^[1][0-9]{10}$/;
		reg_carNo=/^[0-9]{17}[0-9xX]$/;

		if(!reg_name.test(username)){
			$(".span_name").css("display","block");
			return false;
		}else{
			$(".span_name").css("display","none");
		}

		if(!reg_pwd.test(firpwd)){
			$(".firpwd").css("display","block");
			return false;
		}else{
			$(".firpwd").css("display","none");
		}

		if(pwd1!=pwd2){
			$(".qrpwd").css("display","block");
			return false;
		}else{
			$(".qrpwd").css("display","none");
		}

		if(!reg_phone.test(username)){
			$(".phone").css("display","block");
			return false;
		}else{
			$(".phone").css("display","none");
		}

		if(!reg_carNo.test(carNo)){
			$(".carNo").css("display","block");
			return false;
		}else{
			$(".carNo").css("display","none");
		}

		
	})

})