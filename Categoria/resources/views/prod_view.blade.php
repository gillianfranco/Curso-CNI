@extends('default.defaultHTML')
@section('title', 'Categorias')
@section('content')
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		div.container{
			width: 100%;
			min-height: 100vh;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}

		div.categorias{
			width: 150px;
			height: 35px;
			padding: 5px 0 5px 0;
			text-align: center;
			vertical-align: center;
			background-color: #000;
		}

		div.categorias a{
			text-decoration: none;
			color: #fff;
			font-size: 25px;
		}
	</style>
	<div class="container">
		@foreach($categorias as $cat)
		<div class="categorias"><a href="{{ route('SiteController.prod', $cat->id) }}">{{ $cat->categoria }}</a></div>
		@endforeach
	</div>
	
@endsection