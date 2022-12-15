@extends('default.defaultHTML')
@section('title', 'Registro de produtos')
@section('content')
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        div.container{
            width: 100%;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        div.box{
            width: 400px;
            height: 400px;
            border: 1px solid #000;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1{
            margin-top: 20px;
        }

        div.campo{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 30px;
        }

        div.campo input{
            width: 80%;
            height: 25px;
            text-align: center;
        }

        div.campo select{
            width: 80%;
            height: 25px;
            text-align: center;
        }

        div.campo label{
            font-size: 25px;
        }

        div.buttons{
            width: 100%;
            display: flex;
            flex-direction: space;
            justify-content: space-evenly;
        }

        button{
            margin-top: 50px;
            width: 100px;
            height: 40px;
        }

        button a{
            text-decoration: none;
            color: #000;
        }

    </style>

    <div class="container">
        <form action="{{ route('SiteController.prod_register') }}" method="post">
            @csrf
            <div class="box">
                <h1>Registro de Produtos</h1>
                <div class="campo">
                    <label for="produto">Produto</label>
                    <input type="text" name="produto" id="produto" placeholder="Digite o nome do produto">
                </div>

                <div class="campo">
                    <label for="CAT_ID">Categoria</label>
                    <select name="CAT_ID" id="CAT_ID">
                        <option value="" disabled selected>--- Selecione ---</option>
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="buttons">
                    <button><a href="{{ route('SiteController.category') }}">Criar novas Categorias</a>
                    <button type="submit">Registrar</button></button>
                </div>
            </div>
        </form>
    </div>

@endsection