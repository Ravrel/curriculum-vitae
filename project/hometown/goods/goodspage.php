<?php
	header("Content-type:text/html;charset=utf-8");
	$goodsname=isset($_POST["goodsname"])?$_POST["goodsname"]:"";
	$description=isset($_POST["description"])?$_POST["description"]:"";
	$price1=isset($_POST["price1"])?$_POST["price1"]:"";
	$price2=isset($_POST["price2"])?$_POST["price2"]:"";
	
	$con= new mysqli("localhost","root","root","hometown");
	if($con->connect_error){
		die("数据库连接失败");
	}
	//设置字符编码集
	$con->query("set names utf8");
	//where 1=1 绝对条件
	$sql="select count(id) from goodsinfo where 1=1";

	//如果$goodsname不为空执行下面语句
	if($goodsname != ""){
		$sql=$sql." and goodsname = '$goodsname'";
	}
	if($description != ""){
		$sql=$sql." and description = '$description'";
	}
	if($price1 != ""){
		$sql=$sql." and price >= '$price1'";
	}
	if($price2 != ""){
		$sql=$sql." and price <= '$price2'";
	}
	$res=$con->query($sql);
	
	$row=$res->fetch_row();
	
	$pagesize=$row[0];
	
	if($res->num_rows>0){
		echo $pagesize;
	}else{
		echo 0;
	}
?>