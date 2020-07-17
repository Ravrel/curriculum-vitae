<?php
	session_start();
	header("Content-type:text/html;charset=utf-8");
	$usename=isset($_POST["usename"])?$_POST["usename"]:"";
	$phone=isset($_POST["phone"])?$_POST["phone"]:"";
	$useadd=isset($_POST["useadd"])?$_POST["useadd"]:"";
	$con=new mysqli("localhost","root","root","hometown");
	if($con->connect_error){
		die("数据库连接失败");
	}
	$con->query("set names utf8");
	$sql="select * from userinfo where 1=1";
	if($usename != ""){
		$sql=$sql." and usename like '%$usename%'";
	}
	if($phone != ""){
		$sql=$sql." and phone like '%$phone%'";
	}
	if($useadd != ""){
		$sql=$sql." and useadd like '%$useadd%'";
	}
	$res=$con->query($sql);
	if($res->num_rows>0){
		while($row=$res->fetch_assoc()){
			if($row['usename']==$_SESSION["uname"]){
				echo"<tr>
					<td style='display: none;'>{$row['id']}</td>
					<td id='usename'>{$row['usename']}</td>
					<td>{$row['phone']}</td>
					<td>{$row['card']}</td>
					<td>{$row['useadd']}</td>
					<td>
						<input type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModalAlter'  value='修改' >
						<input type='button' class='btn btn-warning rexet' value='重置密码'>
					</td>
				</tr>";
			}else{
				echo"<tr>
					<td style='display: none;'>{$row['id']}</td>
					<td id='usename'>{$row['usename']}</td>
					<td>{$row['phone']}</td>
					<td>{$row['card']}</td>
					<td>{$row['useadd']}</td>
					<td>
						<input type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModalAlter'  value='修改' >
						<input type='button' class='btn btn-warning rexet' value='重置密码'>
						<input type='button' class='btn btn-success dele' value='删除'>
					</td>
				</tr>";
			}
		}
	}else{
		echo "<tr><td>暂无用户信息</td></tr>";
	}
?>