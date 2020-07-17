$(function() {
	//定义变量 存储有多少条数据
	var goodsNum=0;
	reas(1);
	page_aa();
	$("#search").click(function() {
		reas(1);
		page_aa();
	})

	// $(document).on("click", ".page_ge", function() {
	// 	var pageNum = $(this).text();
	// 	reas(pageNum);
	// 	page_aa();
	// })

	


	$("#btn_sub").click(function() {
		var addnames = $("#addnames").val();
		var price = $("#addprice").val();
		var quantity = $("#addquantity").val();
		var description = $("#adddescription").val();
		$.ajax({
			type: "post",
			url: "goods/goods.php",
			data: {
				"addnames": addnames,
				"price": price,
				"quantity": quantity,
				"description": description
			},
			success: function(data) {
				if (data == 1) {
					alert("添加成功");
					$("#myModalAdd").modal("toggle");
					//清空input里面的值
					$("#myModalAdd input").val("");
					reas(a);
					page_aa();
				} else {
					alert("添加异常");
				}
			}

		})
	})
	// show.bs.modal调用之后立即触发该事件
	$('#myModalAlter').on('show.bs.modal', function(e) {
		var btnThis = $(e.relatedTarget);
		//closest("tr") 获取离最近的父级元素的tr
		//find("td") 在元素里查找所有td
		//eq(0) 获取第几个节点 （）里填下标  0表示第一个节点
		var goodsID = btnThis.closest("tr").find("td").eq(0).text();
		var goodsName = btnThis.closest("tr").find("td").eq(1).text();
		var price = btnThis.closest("tr").find("td").eq(2).text();
		var number = btnThis.closest("tr").find("td").eq(3).text();
		var goodsDescribe = btnThis.closest("tr").find("td").eq(4).text();
		//将数值渲染（添加）到修改表中
		$("#alterid").val(goodsID);
		$("#alternames").val(goodsName);
		$("#alterprice").val(price);
		$("#alterquantity").val(number);
		$("#alterdescription").val(goodsDescribe);
	})

	$("#btn_alt").click(function() {
		var goodsID = $("#alterid").val();
		var goodsName = $("#alternames").val();
		var price = $("#alterprice").val();
		var number = $("#alterquantity").val();
		var goodsDescribe = $("#alterdescription").val();
		var a = 1;
		$.ajax({
			type: "post",
			url: "goods/goodsalter.php",
			data: {
				"goodsID": goodsID,
				"goodsName": goodsName,
				"price": price,
				"number": number,
				"goodsDescribe": goodsDescribe
			},
			success: function(data) {
				if (data == 1) {
					alert("修改成功");
					$("#myModalAlter").modal("toggle");
					reas(a);
					page_aa();
				} else {
					alert("修改异常");
				}

			}
		})
	})

	$(document).on('click', '.del', function() {
		var goodsID = $(this).closest('tr').find('td').eq(0).text();
		var a = 1;
		if (confirm("确认删除此商品吗")) {
			$.ajax({
				type: "post",
				url: "goods/goodsdel.php",
				data: {
					"goodsID": goodsID
				},
				success: function(data) {
					if (data == 1) {
						alert("删除成功");
						reas(a);
						page_aa();
					} else {
						alert("删除失败");
					}
				}
			})
		}
	})
})

function reas(a) {
	var goodsname = $("#goodsname").val();
	var description = $("#description").val();
	var price1 = $("#price1").val();
	var price2 = $("#price2").val();
	$.ajax({
		type: "post",
		url: "goods/goodsinfo.php",
		data: {
			"goodsname": goodsname,
			"description": description,
			"price1": price1,
			"price2": price2,
			"pageNum": a
		},
		success: function(data) {
			//将表格初始化（清空）
			$(".tt").nextAll().remove();
			//将返回的结果添加到指定位置
			$(".tt").after(data);
		}
	})
}

function page_aa() {
	var goodsname = $("#goodsname").val();
	var description = $("#description").val();
	var price1 = $("#price1").val();
	var price2 = $("#price2").val();
	$.ajax({
		type: "post",
		url: "goods/goodspage.php",
		data: {
			"goodsname": goodsname,
			"description": description,
			"price1": price1,
			"price2": price2
		},
		success: function(data) {
			goodsNum=data;
			var a = {
				color: 'red',
				sex: 'black',
				border: '1px solid #ddd'
			};
			
			var b = {
				background: 'black'
			};
			
			$(".pagination").Paging({
				classStyle: a, //a标签样式的对象,也可以不定义使用默认值
				backClass: b, //选中的页数的背景，也可以不定义使用默认值
				isFirst: true, //首页按钮是否显示
				isPre: true, //下一页按钮是否显示
				showRecordNum: 5, // 一页列表数量
				totalNum: goodsNum, // 总列表数量
				showNum: function(data1, data2) {
					alert(data1 + "," + data2);
				}
			});
		}
	})
}
