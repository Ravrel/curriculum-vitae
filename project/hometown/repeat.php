<?php
	header("Content-type:text/html;charset=utf-8");
	
	$usename = isset($_POST["uame"])?$_POST["uame"]:"";

	$con = new mysqli("localhost","root","root","hometown");


	if($con->connect_error){
		die("数据库连接失败");
	}

	$con->query("set names utf8");

	$sql1 = "select * from userinfo where usename='$usename'";

	$result = $con->query($sql1);

	if($result->num_rows>0){
		echo 1;
	}else{
		echo 0;
	}

	
?>