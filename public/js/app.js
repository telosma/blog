
$(document).ready(function(){

	$("#signupModal .material-icons").on('click', function(){
		if ($(this).text() === "visibility"){
			$(this).text("visibility_off");
			$("#supass").attr("type", "text");
		}else{
			$(this).text("visibility");
			$("#supass").attr("type", "password");
		}
	});

	$("#signinModal .material-icons").on('click', function(){
		if ($(this).text() === "visibility"){
			$(this).text("visibility_off");
			$("#sipass").attr("type", "text");
		}else{
			$(this).text("visibility");
			$("#sipass").attr("type", "password");
		}
	});

	$("#btn-signin").on('click', function(){
		$('#signinModal').modal('show');
	});

	$("#btn-signup").on('click', function(){
		$('#signupModal').modal('show');
	});
  
});
