<?php
	header("Content-type:text/html;charset=utf-8");
	$addname=isset($_POST['addname'])?$_POST['addname']:"";
	$addphone=isset($_POST['addphone'])?$_POST['addphone']:"";
	$addcard=isset($_POST['addcard'])?$_POST['addcard']:"";
	$adduseadd=isset($_POST['adduseadd'])?$_POST['adduseadd']:"";
	
	$con= new mysqli("localhost","root","root","hometown");
	if($con->connect_error){
		die("数据库连接失败");
	}
	$con->query("set names utf8");
	
	$sql="insert into userinfo(usename,phone,card,useadd,pwd) values('$addname','$addphone',$addcard,'$adduseadd',md5('888888'))";
	if($con->query($sql)){
		echo 1;
	}else{
		echo 0;
	}
?>