@extends('Site.create')

@section('Content')
<div class="card bg-dark m-1 text-light border-dark-opacity">
  <div class="card-header">
    Client -> {{ $client->id }}
  </div>
  <div class="card-body">
    <h2 class="card-title">{{ $client->name }}</h2>
    <pre class="card-text text-light">
        Age: {{ $client->age }}
        Email: {{ $client->email }}
        Phone: {{ $client->phone }}
        Address: {{ $client->address }}
        Observation: {{ $client->observation }}
    </pre>
    <a href="{{ route('SiteController.index') }}" class="btn btn-success">Voltar</a>
  </div>
</div>
@endsection