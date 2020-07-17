<?php
	header("Content-type:text/html;charset=utf-8");
	$goodsname=isset($_POST["goodsname"])?$_POST["goodsname"]:"";
	$description=isset($_POST["description"])?$_POST["description"]:"";
	$price1=isset($_POST["price1"])?$_POST["price1"]:"";
	$price2=isset($_POST["price2"])?$_POST["price2"]:"";
	$pageNum_1=isset($_POST["pageNum"])?$_POST["pageNum"]:"";
	
	$pageNum=($pageNum_1-1)*5;
	
	$con= new mysqli("localhost","root","root","hometown");
	if($con->connect_error){
		die("数据库连接失败");
	}
	//设置字符编码集
	$con->query("set names utf8");
	//where 1=1 绝对条件
	$sql="select * from goodsinfo where 1=1";
	//如果$goodsname不为空执行下面语句
	if($goodsname != ""){
		$sql=$sql." and goodsname like '%$goodsname%'";
	}
	if($description != ""){
		$sql=$sql." and description like '%$description%'";
	}
	if($price1 != ""){
		$sql=$sql." and price >= '$price1'";
	}
	if($price2 != ""){
		$sql=$sql." and price <= '$price2'";
	}
	$sql=$sql." limit $pageNum,5";
	$res=$con->query($sql);
	if($res->num_rows>0){
		while($row=$res->fetch_assoc()){
			echo"<tr>
				<td style='display: none;'>{$row['id']}</td>
				<td>{$row['goodsname']}</td>
				<td>{$row['price']}</td>
				<td>{$row['number']}</td>
				<td>{$row['goodsdescribe']}</td>
				<td>
					<input type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModalAlter'  value='修改' >
					<input type='button' class='btn btn-success del' value='删除'>
				</td>
			</tr>";
		}
	}else{
		echo "<tr><td>暂无商品信息</td></tr>";
	}
?>