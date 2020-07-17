<?php

	header("Content-type:text/html;charset=utf-8");
	$userid=isset($_POST["userid"])?$_POST["userid"]:"";
	$userpwd=isset($_POST["userpwd"])?$_POST["userpwd"]:"";
	$quepwd=isset($_POST["quepwd"])?$_POST["quepwd"]:"";
	$yespwd=isset($_POST["yespwd"])?$_POST["yespwd"]:"";
	$con=new mysqli("localhost","root","root","hometown");
	if($con->connect_error){
		die("数据库连接失败");
	}
	$con->query("set names utf8");
	
		$sql="update useinfo set ciphers='$yespwd' where id=$userid";
		if($con->query($sql)){
			echo 1;
		}else{
			echo 0;
		}
	
?>