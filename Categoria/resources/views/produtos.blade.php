@extends('default.defaultHTML')
@section('title', 'Categorias')
@section('content')
    <div class="container">
        @foreach($produtos as $prod)
            <div class="prod">{{ $prod['CAT_ID'][1] }}</div>
        @endforeach
    </div>
@endsection