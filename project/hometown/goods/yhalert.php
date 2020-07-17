<?php
	header("Content-type:text/html;charset=utf-8");
	$userid=isset($_POST['userid'])?$_POST['userid']:"";
	$usernames=isset($_POST['usernames'])?$_POST['usernames']:"";
	$userphone=isset($_POST['userphone'])?$_POST['userphone']:"";
	$usecard=isset($_POST['usecard'])?$_POST['usecard']:"";
	$useradd=isset($_POST['useradd'])?$_POST['useradd']:"";
	
	$con=new mysqli("localhost","root","root","hometown");
	if($con->connect_error){
		die("数据库连接失败");
	}
	$con->query("set names uft8");
	
	$sql="update userinfo set usename='$usernames',phone='$userphone',card='$usecard',useadd='$useradd' where id=$userid";
	
	if($con->query($sql)){
		echo 1;
	}else{
		echo 0;
	}
?>