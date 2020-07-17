<?php
	header("Content-tpye:text/html;charset=utf-8");
	session_start();
	if(!isset($_SESSION['uname']) ){
		echo "<script>alert('请先登录');location.href='login.html'</script>";
	}
	$con= new mysqli("localhost","root","root","hometown");
	if($con->connect_error){
		die("数据库连接失败");
	}
	
	$con->query("names set utf8");
	$unames=$_SESSION['uname'];
	$sql="select * from userinfo where usename='$unames'";
	$res=$con->query($sql);
	$row=$res->fetch_row();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/ger.css" type="text/css" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/pwd.css">
		<title></title>
	</head>
	<body>
		<div class="modal-body">
			<form class="form-horizontal bd">
				<div class="form-group" style="display: none;">
					<label for="inputEmail3" class="col-sm-2 control-label">用户ID</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="userid" value="<?php echo $row[0]?>">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" disabled="disabled" id="usernames" value="<?php echo $row[1]?>">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">手机号</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="userphone" value="<?php echo $row[2]?>">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">身份证号</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="usecard"  value="<?php echo $row[3]?>">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">地址</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="useradd"  value="<?php echo $row[4]?>">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" id="btn_aler"">修改</button>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalAlter">
					  修改密码
					</button>
				</div>
			</form>
		</div>
		
		<div class="modal fade" id="myModalAlter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">修改密码</h4>
		      </div>
		      <div class="modal-body">
		        <form class="form-horizontal">
		          
				  
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">原密码</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" id="usepwd">
					  <span id="span_pwd" style="display: none;">原密码不正确</span>
					  <span id="span_pw" style="display: none;">原密码不能为空</span>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">新密码</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" id="quepwd">
					  <span id="span_yepw" style="display: none;">密码不能为空</span>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">确认密码</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" id="yespwd">
					   <span id="span_yepwd" style="display: none;">密码不一致</span>
				    </div>
				  </div>
				  <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
		        <button type="button" id="btn_Alt" class="btn btn-primary" disabled="disabled">修改</button>
		      </div>
				</form>
		      </div>
		    </div>
		  </div>
		</div>
	</body>
	<script src="js/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/ger.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/gerpwd.js" type="text/javascript" charset="utf-8"></script>
</html>
