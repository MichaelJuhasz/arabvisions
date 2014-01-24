jQuery(document).ready(function(){
	$(".btn-clear").click(function(){
		$(this).css("background","url('../images/sbicon2.png') no-repeat center");
	})
	$(".form-control").focus(function(){
		$(".btn-clear").css("background-color","white");
	})
	$(".form-control").blur(function(){
		$(".btn-clear").css("background-color","rgba(255,255,255,.2)");
	})
})