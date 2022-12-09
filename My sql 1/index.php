<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style_index.css">
	<title>Cadastro</title>
</head>
<body>
	<main>
		<form action="set_dados.php" method="post">
			<label>Nome</label><br>
			<input type="text" name="nome"><br><br>

			<label>Sobrenome</label><br>
			<input type="text" name="sobrenome"><br><br>

			<label>E-mail</label><br>
			<input type="email" name="email"><br><br>

			<label>Senha</label><br>
			<input type="password" name="senha"><br><br>

			<input type="submit" value="Enviar">
		</form>
	</main>
</body>
</html>