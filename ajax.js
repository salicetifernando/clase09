function Login()
{
	var user = $("#user").val();
	var pass = $("#pass").val();
	$.ajax({url: "nexo.php",
	type : "post",
	data : {data : "login",
			user : user,
			pass : pass}})
	.then( function (retorno){
		alert("entra");
		$("#principal").html(retorno);
	},function (ret){
		alert("FALLO!");
	});
}