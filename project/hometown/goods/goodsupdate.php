<?php
	header("Content-type:text/html;charset=utf-8");

	//获取的post_name为ajax获取的值 ，非input的id值
	$goodsid = isset($_POST['goodsid'])?$_POST['goodsid']:"";
	$goodsname = isset($_POST['goodsname'])?$_POST['goodsname']:"";
	$description = isset($_POST['description'])?$_POST['description']:"";
	$price = isset($_POST['price'])?$_POST['price']:"";
	$quantity = isset($_POST['quantity'])?$_POST['quantity']:"";

	$con = new mysqli("localhost","root","root","hometown");

	if($con->connect_error){
		die("数据库连接失败");
	}

	$con->query("set names 'utf8'");

	//更新sql语句
	$sql = "update goodsinfo set goodsname='$goodsname',price=$price,number=$quantity,goodsdescribe='$description' where id=$goodsid";
	if($con->query($sql)){
		echo 1;
	}else{
		echo 0;
	}
?>