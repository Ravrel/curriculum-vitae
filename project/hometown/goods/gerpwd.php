<?php
	session_start();
	header("Content-type:text/html;charset=utf-8");
	$usepwd=md5(isset($_POST["usepwd"])?$_POST["usepwd"]:"");
	$uname=isset($_SESSION["uname"])?$_SESSION["uname"]:"";
	$con=new mysqli("localhost","root","root","hometown");
	if($con->connect_error){
		die("数据库连接失败");
	}
	$con->query("set names utf8");
	$sql="select * from userinfo where pwd='$usepwd' and usename='$uname'";
	$res=$con->query($sql);
	if($res->num_rows>0){
		echo 1;
	}else{
		echo 0;
	}
?>