@extends('default.defaultHTML')
@section('title', 'Tabela de produtos')
@section('content')
	<style>
		*{
			margin: 0;
			padding: 0;
		}

		table, th{
			border: 3px solid #000;
			border-collapse: collapse;
		}

		th, td{
			width: 150px;
		}

		td{
			border: 1px solid #000;
		}

		
	</style>
	<div class="container">
		<table>
			@foreach($categorias as $cat)
			<th>{{ $cat->categoria }}</th>
			@endforeach
		</table>
	</div>
	
@endsection