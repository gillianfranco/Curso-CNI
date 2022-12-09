$(document).ready(function(){

	$("#button").click(function(){
		var email = $("#email").val();
		var senha = $("#senha").val();

		var dados = new FormData();

		dados.append("email", "email");
		dados.append("senha", "senha");

		$.ajax({
			type: "POST",
			async: false,
			data: dados,
			processData: false,
			contentType: false,
			url: "newFile.php",
			success: function(){
				$("#mensagem").html('Arquivo baixado!!!');
			}
		});
	});

}); 