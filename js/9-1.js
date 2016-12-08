$(document).ready(function() {

 $("#sousuo").click(function(){
 	var node = $("#sou").val();
		
		$.ajax({ 
		type: 'post', 
		url: 'php/sercName.php',
		dataType: "json",
		data: {"dianpuming":node}, 
		
		  error: function(){  
        alert('Error loading XML document');  
       },
		success: function(data) { 

if(data == 0){
$("#tips").html("<center><p style='color:red;font-size:16px;'>不存在该店铺！</p></center>");

$("#dada").hide("slow");

}
 console.log(data);
for(var i = 0; i < data.length; i++) {
		$('img').eq(i).attr("src",data[i]);
		$("#tips").html("");
		$("dada").show("slow");
	}

			} 
		});
		
 })
 hide();
})

function hide() {
	var $category=$("ul li:gt(4)");
	$category.hide();
	var $btn=$("#btn");
	$btn.click(function(){
		if($category.is(":visible")){
			$(this).css("background","url(img/down.gif) no-repeat 0 0").text("展开上新");
		}else{
			$(this).css("background","url(img/up.gif) no-repeat 0 0").text("收起上新");
		}
		$category.toggle();
		return false;
	}).hover(function(){
		$(this).css("border","1px solid darkred");
	},function(){
		$(this).css("border","1px solid #AAA");
	})
}