<?php
	$con = mysqli_connect("localhost", "root", "", "sistema_gl");
	$pes = mysqli_query($con, "SELECT * FROM tabela1");
	
	while($exibe = mysqli_fetch_array($pes)){
		echo "Id --> ".$exibe['id']."<br>"."   Nome: ".$exibe['nome']."<br>"."   Sobrenome: ".$exibe['sobrenome']."<br>"."   E-mail: ".$exibe['email']."<br>"."   Senha: ".$exibe['senha']."<br><br>";
	}
?>