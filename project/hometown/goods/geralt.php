<?php
	session_start();
	header("Content-type:text/html;charset=utf-8");
	$yespwd=md5(isset($_POST["yespwd"])?$_POST["yespwd"]:"");
	$uname=isset($_SESSION["uname"])?$_SESSION["uname"]:"";
	$con=new mysqli("localhost","root","root","hometown");
	if($con->connect_error){
		die("数据库连接失败");
	}
	$con->query("set names utf8");
	$sql="update userinfo set pwd='$yespwd' where usename='$uname'";
	if($con->query($sql)){
		echo 1;
		session_destroy();
	}else{
		echo 0;
	}
?>