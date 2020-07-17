$(function(){
	useaa();
	$("#usernames").attr("disabled","disabled");
	
	$("#shuo").click(function(){
		useaa();
	})
	$("#btn_sub").click(function(){
		var addname=$("#addname").val();
		var addphone=$("#addphone").val();
		var addcard=$("#addcard").val();
		var adduseadd=$("#adduseadd").val();
		$.ajax({
			type:"post",
			url:"goods/yhadd.php",
			data:{
				"addname":addname,
				"addphone":addphone,
				"addcard":addcard,
				"adduseadd":adduseadd
			},
			success:function(data){
				if(data == 1){
					alert("添加成功");
					$("#myModalAdd").modal("toggle");
					//清空input里面的值
					$("#myModalAdd input").val("");
					useaa();
				}else{
					alert("添加失败");
				}
			}
		})
	})
	
	// show.bs.modal调用之后立即触发该事件
	$('#myModalAlter').on('show.bs.modal', function (e) {
		var btnThis = $(e.relatedTarget);
		//closest("tr") 获取离最近的父级元素的tr
		//find("td") 在元素里查找所有td
		//eq(0) 获取第几个节点 （）里填下标  0表示第一个节点
		var yhID=btnThis.closest("tr").find("td").eq(0).text();
		var useName=btnThis.closest("tr").find("td").eq(1).text();
		var phone=btnThis.closest("tr").find("td").eq(2).text();
		var card=btnThis.closest("tr").find("td").eq(3).text();
		var useadd=btnThis.closest("tr").find("td").eq(4).text();
		//将数值渲染（添加）到修改表中
		$("#userid").val(yhID);
		$("#usernames").val(useName);
		$("#userphone").val(phone);
		$("#usecard").val(card);
		$("#useradd").val(useadd);
	})
	
	$("#btn_alt").click(function(){
		var userid=$("#userid").val();
		var usernames=$("#usernames").val();
		var userphone=$("#userphone").val();
		var usecard=$("#usecard").val();
		var useradd=$("#useradd").val();
		$.ajax({
			type:"post",
			url:"goods/yhalert.php",
			data:{
				"userid":userid,
				"usernames":usernames,
				"userphone":userphone,
				"usecard":usecard,
				"useradd":useradd
			},
			success:function(data){
				if(data == 1){
					alert("修改成功");
					$("#myModalAlter").modal("toggle");
					useaa();
				}else{
					alert("修改异常");
				}
			}
		})
	})
	
	$(document).on('click','.dele',function(){
		var useID=$(this).closest('tr').find('td').eq(0).text();
		
		if(confirm("确认删除此商品吗")){
			$.ajax({
				type:"post",
				url:"goods/yhdel.php",
				data:{
					"useID":useID
				},
				success:function(data){
					if(data == 1){
						alert("删除成功");
						useaa();
					}else{
						alert("删除失败");
					}
				}
			})
		}
	})
	
	
	$(document).on("click",".rexet",function(){
		var useID=$(this).closest('tr').find('td').eq(0).text();
		var pawd=$(this).closest('tr').find('td').eq(5).text();
		$.ajax({
			type:"post",
			url:"goods/yhrexet.php",
			data:{
				"useID":useID,
				"pawd":pawd
			},
			success:function(data){
				if(data == 1){
					alert("重置成功");
					useaa();
				}else{
					alert("重置异常");
				}
			}
		})
	})
	
})

function useaa(){
	var usename=$("#usename").val();
	var phone=$("#phone").val();
	var useadd=$("#useadd").val();
	$.ajax({
		type:"post",
		url:"goods/yh.php",
		data:{
			"usename":usename,
			"phone":phone,
			"useadd":useadd
		},
		success:function(data){
				$(".aa").nextAll().remove();
				//将返回的结果添加到指定位置
				$(".aa").after(data);
		}
	})
}
