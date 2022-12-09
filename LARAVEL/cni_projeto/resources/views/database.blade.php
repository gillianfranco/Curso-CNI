<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Data base</title>
</head>
<body>
    <div class="row text-center fw-bold border border-2">
        <div class="col">Id</div>
        <div class="col">Nome</div>
        <div class="col">Endereço</div>
        <div class="col">Observação</div>
    </div>
    <div class="row text-center border border-1">
       <div class="col">{{ $data[0]['id'] }}</div>
       <div class="col">{{ $data[0]['nome'] }}</div>
       <div class="col">{{ $data[0]['endereco'] }}</div>
       <div class="col">{{ $data[0]['observacao'] }}</div>
    </div>
    <div class="row text-center border border-1">
       <div class="col">{{ $data[1]['id'] }}</div>
       <div class="col">{{ $data[1]['nome'] }}</div>
       <div class="col">{{ $data[1]['endereco'] }}</div>
       <div class="col">{{ $data[1]['observacao'] }}</div>
    </div>
</body>
</html>