@extends('Site.create')
  @section('Title', 'Data Clients')
  @section('Content')
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
      @foreach($data as $Client)
      
        <tr>
          <th scope="row">
            <a style="text-decoration: none;" class="text-light" href="{{ route('SiteController.client', $Client) }}">{{ $Client->id }}</a>
          </th>
          <td>
            <a style="text-decoration: none;" class="text-light" href="{{ route('SiteController.client', $Client) }}">{{ $Client->name }}</a>
          </td>
          <td>
            <a style="text-decoration: none;" class="text-light" href="{{ route('SiteController.client', $Client) }}">{{ $Client->email }}</a>
          </td>
        </tr>
      
      @endforeach
      </tbody>
    </table>
       <button class="btn btn-success"><a style="text-decoration: none;" class="text-light" href="{{ route('SiteController.set') }}">Cadastrar</a></button>
  @endsection