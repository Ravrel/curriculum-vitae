<?php
	header("Content-type:text/html;charset=utf-8");
	
	$useID=isset($_POST["useID"])?$_POST["useID"]:"";
	
	$con=new mysqli("localhost","root","root","hometown");
	
	$con->query("set names utf8");
	
	$sql="update userinfo set pwd=md5('888888') where id=$useID";
	
	if($con->query($sql)){
		echo 1;
	}else{
		echo 0;
	}