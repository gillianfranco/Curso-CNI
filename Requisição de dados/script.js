$(document).ready(function(){

	$("#botao").click(function(){

		var nome = $("#nome").val();
		var sobrenome = $("#sobrenome").val();

		var dados = new FormData();

		dados.append("nome", nome);
		dados.append("sobrenome", sobrenome);

		$.ajax({
			type: "POST",
			url: "recebe.php",
			async: false,
			data: dados,
			processData: false,
			contentType: false,
			success: function(data){
				$("#squad2").append(data);
			}
		});
	});
});