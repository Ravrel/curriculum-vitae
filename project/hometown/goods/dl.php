<?php
	SESSION_start();
	header("Content-type:text/html;charset=utf-8");
	$username=isset($_POST['username'])?$_POST['username']:"";
	$passwrod=md5(isset($_POST['passwrod'])?$_POST["passwrod"]:"");

	$con = new mysqli("localhost","root","root","hometown");
	if($con->connect_error){
		die("数据连接失败");
	}
	
	$sql = "select * from userinfo where usename='$username' and pwd='$passwrod'";
	$res = $con->query($sql);
	
	if($res->num_rows>0){
		$_SESSION['uname']=$username;
		echo 1;
	}else{
		echo 0;
	}
?>