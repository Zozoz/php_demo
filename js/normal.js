$(function(){
	$("#tan").click(function() {
		resConfirm("我是标题！", "谈谈谈，谈走鱼尾纹！");
	});


	


	
});

// 确认查询信息对话框
function resConfirm(title, msg) {
	$("#hint").html(msg);
	$("#hint").dialog({
		autoOpen : true,
		modal : true,
		width : 800,
		show: {
			 effect: "clip",
			 duration: 400
			 },
		hide: {
			 effect: "fold",
			 duration: 400
			 },
		title : title,
		 buttons: {
			" 确 认 ": function() {
				$( this ).dialog( "close" );
			 }
		 }
	});
}