$(document).ready(function(){

	//validação alternativa manipulando css
	$("#submit-cad-usu").click(function(){

		if($("#pass").val('')){
			$("#error-senha-cad").css("display", "show");
		}
		if($("#mail").val('')){
			$("#error-email-cad").css("display", "show");
		}
		if ($("#nome-cad-usu").val('')){
			$("#error-nome-cad").css("display", "show");
		}
	})
})