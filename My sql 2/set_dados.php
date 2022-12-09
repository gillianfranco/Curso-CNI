<?php
	$con = mysqli_connect("localhost", "root", "", "sistema_gl");

	if($_POST['nome'] != "" && $_POST['sobrenome'] != "" && $_POST['email'] != "" && $_POST['senha'] != ""){

		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$cadastro = mysqli_query($con, "INSERT INTO tabela1(id, nome, sobrenome, email, senha) VALUES (NULL, '$nome', '$sobrenome', '$email', '$senha')");

		if(mysqli_affected_rows($con)){
			echo "Cadastro realizado com sucesso!!!";
			$url1 = "get_dados.php";
			header("refresh: 3; url=$url1");
		}else{
			echo "Algo de errado não está certo!!!";
		}
	}else{
		echo "Algo de errado não está certo!!! Tente novamente...";
			$url2 = "index.php";
			header("refresh: 3; url=$url2");
	}
?>