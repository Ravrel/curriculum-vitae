<?php
	header("Content-type:text/html;charset=utf-8");
	$addnames = isset($_POST['addnames'])?$_POST['addnames']:"";
	$adddescription = isset($_POST['description'])?$_POST['description']:"";
	$price = isset($_POST['price'])?$_POST['price']:"";
	$quantity = isset($_POST['quantity'])?$_POST['quantity']:"";
	
	$con = new mysqli("localhost","root","root","hometown");

	if($con->connect_error){
		die("数据库连接失败");
	}

	$con->query("set names 'utf8'");

	$sql = "insert into goodsinfo(goodsname,price,number,goodsdescribe) values('$addnames',$price,$quantity,'$adddescription')";
	
	if($con->query($sql)){
		echo 1;
	}else{
		echo 0;
	}
?>