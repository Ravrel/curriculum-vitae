<?php
		
	header("Content-type:text/html;charset=utf-8");

	if(!isset($_POST["usename"])||!isset($_POST["pwd"])){
		echo "<script>alert('请先登录');location.href='denglu.html';</csript>";
	}

	$name = $_POST["usename"];
	$password = $_POST["pwd"];	
	$con=new mysqli("localhost","root","root","hometown");

	if($con->connect_error){
		die("数据库连接失败");
	}

	$con->query("set name utf8");


	$sql = "select * from userinfo where username='$name' and passwords='$password'";

	$result = $con->query($sql);
	
	if($result->num_rows >0){
		echo "<script>alert('登陆成功')</script>";
	}else{
		echo "<script>alert('登录失败');location.href='denglu.html'</script>";
	}

?>