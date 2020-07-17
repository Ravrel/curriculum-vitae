<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
</head>
<body>
	<form class="form-inline">
		<div class="form-group">
		<label for="exampleInputName2">用户名</label>
			<input type="text" class="form-control" id="usename">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail2">手机号</label>
			<input type="text" class="form-control" id="phone">
		 </div>
		 <div class="form-group">
			<label for="exampleInputEmail2">地址</label>
			<input type="text" class="form-control" id="useadd">
		 </div>
		 <span id="spa" style="display: none;"><?php echo $_SESSION['uname'];?></span>
		<button type="button" id="shuo" class="btn btn-info">搜索</button>
																					<!-- 修改点 -->
		<button type="button" id="add" class="btn btn-primary" data-toggle="modal" data-target="#myModalAdd">
		  用户添加
		</button>
	</form>
	<!-- 商品添加弹出层 -->
							<!-- 修改点 -->
	<div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">用户添加</h4>
	      </div>
	      <div class="modal-body">
	        <form class="form-horizontal">
	        	<table style="width:100%;">
					<tr>
						<td>
			        		<div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="addname">
							    </div>
				 			 </div>
			 			 </td>
			 		</tr>
			 		<tr>
						<td>
							<div class="form-group">
							    <label for="inputPassword3" class="col-sm-2 control-label">手机号</label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="addphone">
							    </div>
							 </div>
						</td>
			 		</tr>
			  		<tr>
						<td>
							<div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">身份证号</label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="addcard">
							 	</div>
							</div>
						</td>
			  		</tr>
			  		<tr>
						<td>
							<div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">地址</label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="adduseadd">
							    </div>
							</div>
						</td>
			  		</tr>
	        	</table>
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
	        <button type="button" id="btn_sub" class="btn btn-primary">添加</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!--商品修改弹出层-->
								<!-- 修改点 -->
	<div class="modal fade" id="myModalAlter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">用户修改</h4>
	      </div>
	      <div class="modal-body">
	        <form class="form-horizontal">
	          <div class="form-group" <!-- style="display:none;" -->>
			    <label for="inputEmail3" class="col-sm-2 control-label">用户id</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="userid">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="usernames">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">手机号</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="userphone">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">身份证号</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="usecard">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">地址</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="useradd">
			    </div>
			  </div>
			  <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
	        <button type="button" id="btn_alt" class="btn btn-primary">修改</button>
	      </div>
			</form>
	      </div>
	      
	    </div>
	  </div>
	</div>
	<table class="table table-bordered">
		<tr class="aa">
			<th style="display: none;">用户ID</th>
			<th>用户名</th>
			<th>手机号</th>
			<th>身份证号</th>
			<th>地址</th>
			<th style="display: none;">密码</th>
			<th>操作</th>
		</tr>
	</table>
</body>
	<script src="js/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/yh.js" type="text/javascript" charset="utf-8"></script>
</html>