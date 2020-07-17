<?php
	header("Content-Type:text/html;charset=utf-8");
	// $Name=$_POST['name'];
	// $passWord=$_POST['password'];
	//isset检测变量是否设置，并且不是null;
	// 判断是否设置值。没有则设置，否则为null
	// if(isset($_POST["name"]))
	// {
	// 	$Name = $_POST["name"];
	// }else
	// {
	// 	$Name="";
	// }
	// 如果添加isset则会判断是否为空，不为空则继续执行，为空时添加""使sql语句执行不会报错
	// $Name = isset($_POST["name"])?$_POST["name"]:"";
	// $passWord = isset($_POST["password"])?$_POST["password"]:"";
	// 如果传输的数据为空 应判断为账号或密码为空 没有全部输入
	// 没有数据传输可能是两个都没写 发送了空 此时应返回登陆界面
	//判断name和password   判断用户是否登录了 登录才可继续访问 未登录则返回登陆页面
	//登陆账号为abc  密码为123
	// if(!isset($_POST["username"]) || !isset($_POST["password"]))
	// {
	// 	//如果未登录则返回登录页面
	// 	echo "<script>alert('请先验证暗号!');location.href='dljm.html';</script>";
	// 	//die终止继续运行
	// 	die();
	// }

	//当上面代码可以跳过则可以开始下方代码
	$username = isset($_POST["username"])?$_POST["username"]:"";
	$passWord = isset($_POST["password"])?$_POST["password"]:"";

	echo $username.$passWord;
	//连接数据库
// 	$con = @mysql_connect("localhost","root","root");
// 	if(!$con){
// 		die("数据库连接失败");
// 	}
// 
// 	//查询数据库
// 	$db = mysql_select_db("hometown");
// 	if(!$db){
// 		die("数据库不存在");
// 	}
// 
// 	//计数
// 	$sql = "select * from userinfo where username='$username' and pwd='$passWord'";
// 	//设置name字符编码位utf8
// 	mysql_query("set name utf8");
// 	//执行sql语句
// 	$result = mysql_query($sql);
// 	//查询行数
// 	$num = mysql_num_rows($result);
// 	if($num>0){
// 		echo 1;
// 	}else{
// 		echo 0;
// 	}
	// if($name->num_rows>0){
	// 	echo 1;
	// }else{
	// 	echo 0;
	// }
	//查询行数
	// $num = mysql_num_rows($result);
	//关闭数据库
	// mysql_colse($con);
	// if($num>0){
	// 	echo 1;
	// }else{
	// 	echo 0;
	// }
?>