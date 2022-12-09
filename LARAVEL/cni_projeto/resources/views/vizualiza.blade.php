<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="get">
        <label for="email">Email:</label><br>
        <input type="email" name="email"><br><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Enviar"><hr>
    </form>
    <p>Email: {{$user['email']}}</p>
    <p>Password: {{$user['password']}}</p>
</body>
</html>