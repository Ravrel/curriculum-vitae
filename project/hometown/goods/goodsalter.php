<?php
	header("Content-type:text/html;charset=utf-8");
	$goodsID=isset($_POST['goodsID'])?$_POST['goodsID']:"";
	$goodsName=isset($_POST['goodsName'])?$_POST['goodsName']:"";
	$price=isset($_POST['price'])?$_POST['price']:"";
	$number=isset($_POST['number'])?$_POST['number']:"";
	$goodsDescribe=isset($_POST['goodsDescribe'])?$_POST['goodsDescribe']:"";
	
	$con=new mysqli("localhost","root","root","hometown");
	if($con->connect_error){
		die("数据库连接失败");
	}
	$con->query("set names utf8");
	
	$sql="update goodsinfo set goodsname='$goodsName',price=$price,number=$number,goodsdescribe='$goodsDescribe' where id=$goodsID";
	
	if($con->query($sql)){
		echo 1;
	}else{
		echo 0;
	}
	
?>