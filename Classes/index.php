<?php 
	require_once "Classes/Pessoa.php";

	$pessoa1 = new Pessoa;
	$pessoa1->nome = "Gillian";
	$pessoa1->sobrenome = "Melo";
	$pessoa1->idade = 16;

	echo "Pessoa 1 <br>";
	foreach($pessoa1 as $titulo => $valores){
		echo $titulo." -> ".$valores."<br>";
	}

	$obj = &$pessoa1;

	$pessoa2 = clone $obj;
	$pessoa2->nome = "Pedro";
	$pessoa2->sobrenome = "Henrique";
	$pessoa2->idade = 17;

	echo "<br>Pessoa 2 <br>";
	foreach($pessoa2 as $titulo => $valores){
		echo $titulo." -> ".$valores."<br>";
	}
 ?>