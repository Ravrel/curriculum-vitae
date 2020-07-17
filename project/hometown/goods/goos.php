<?php
	//先获取搜索的值
	$goodsname = isset($_POST['goodsname'])?$_POST['goodsname']:"";
	$description = isset($_POST['description'])?$_POST['description']:"";
	$price1 = isset($_POST['price1'])?$_POST['price1']:"";
	$price2 = isset($_POST['price2'])?$_POST['price2']:"";

	$con = new mysqli("localhost","root","root","hometown");

	if($con->connect_error){
		die("数据库连接失败");
	}

	mysqli_query($con,"set name utf8");

	//为了使不为空时sql语句能够正常添加需要先添加一个固定的正确条件通过sql语句
	$sql = "select * from goodsinfo where 1=1";

	//如果条件为空则继续
	//如果不为空进行判断
	if($goodsname!=""){
		//连接sql语句添加条件
		$sql = $sql." and goodsname like '%$goodsname%'";
	}

	if($description!=""){
		$sql = $sql." and description like '%$description%'";
	}

	//如果值不为空则查询传过来的价格值
	// if($price1!=""){
	// 	$sql = $sql." and price $stype $price1";
	// }
	// if($price1!=""){
	// 	$sql = $sql." and price>$price1 ";
	// }else if($price2!=""){
	// 	$sql = $sql." and price<$price2 ";
	if($price1!="" && $price2!=""){
		$sql = $sql." and price>=$price1 and price<=$price2";
	}else if($price1!=""){
		$sql = $sql." and price>=$price1 ";
	}else if($price2!=""){
		$sql = $sql." and price<=$price2 ";
	}
	$result = $con->query($sql);
	//添加时 id='goods_{$row['id']}' id的值为数据中的id值；data-toggle='modal' data-target='#myModalAlter修改触发的拟态框为修改框；
	//<td style='display:none;'>{$row['id']}</td>
	//添加id 但隐藏
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			echo "<tr>
					<td style='display:none;'>{$row['id']}</td>
					<td>{$row['goodsname']}</td>
					<td>{$row['price']}</td>
					<td>{$row['number']}</td> 
					<td>{$row['goodsdescribe']}</td> 
					<td>
						<input type='button' class='btn btn-primary' id='goods_{$row['id']}' value='修改' data-toggle='modal' data-target='#myModalAlter'>
						<input type='button' class='btn btn-success del' value='删除'>
					</td> 
				</tr>";
		}
	}
?>