<?php 
	$array = [
		"nome"=>[
			"Gillian",
			"Pedro",
			"Vitor"
		]
		"sobrenome"=>[
			"Melo",
			"Henrique",
			"Brenno"
		]
	]

	for($i = 0; $i < 2; $i++){
		echo "Nome " .$i .": " $array["nome"][$i] ." " $array["sobrenome"][$i];
	}
 ?>