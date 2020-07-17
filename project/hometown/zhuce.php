<?php
	header("Content-type:text/html;charset=utf-8");
	
	$usename = isset($_POST["usename"])?$_POST["usename"]:"";
	$passwords = isset($_POST["passwords"])?$_POST["passwords"]:"";
	$phone = isset($_POST["phone"])?$_POST["phone"]:"";
	$address = isset($_POST["address"])?$_POST["address"]:"";
	$carNo = isset($_POST["carNo"])?$_POST["carNo"]:"";

	$con = new mysqli("localhost","root","root","hometown");


	if($con->connect_error){
		die("数据库连接失败");
	}

	$con->query("set names utf8");

	$sql1 = "select * from userinfo where usename='$usename'";

	$result = $con->query($sql1);


		$sql="insert into useinfo(username,passwords,phone,address,carNo) values('$usename','$passwords','$phone','$address','$carNo')";

		if($con->query($sql)){

			echo "<script>alert('注册成功');location.href='denglu.html';</script>";	

		}else{

			echo "<script>alert('注册失败);</script>";
		}

	
?>