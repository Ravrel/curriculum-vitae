<?php
	header("Content-type:text/html;charset=utf-8");
	$goodsname=isset($_POST["addnames"])?$_POST["addnames"]:"";
	$price=isset($_POST["price"])?$_POST["price"]:"";
	$quantity=isset($_POST["quantity"])?$_POST["quantity"]:"";
	$description=isset($_POST["description"])?$_POST["description"]:"";
	
	$con= new mysqli("localhost","root","root","hometown");
	if($con->connect_error){
		die("数据库连接失败");
	}
	$con->query("names set utf8");
	$sql="insert into goodsinfo(goodsname,price,number,goodsdescribe) values('$goodsname',$price,$quantity,'$description')";
	
	if($con->query($sql)){
		echo 1;
	}else{
		echo 0;
	}
?>