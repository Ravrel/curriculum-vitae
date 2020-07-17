<?php
	header("Content-type:text/html;charset=utf-8");
	$useID=isset($_POST["useID"])?$_POST["useID"]:"";
	
	$con=new mysqli("localhost","root","root","hometown");
	if($con->connect_error){
		die("数据库连接失败");
	}
	$con->query("set names utf8");
	
	$sql="delete from userinfo where id=$useID";
	
	if($con->query($sql)){
		echo 1;
	}else{
		echo 0;
	}
?>