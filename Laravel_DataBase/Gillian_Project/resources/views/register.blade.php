@extends('Site.create')
@section('Title', 'Register')
@section('Content')

<form action="{{ route('SiteController.view') }}" class="bg-dark text-light p-3" method="post">
    @csrf    
    <div class="mb-3 bg-opacity">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Type your name here">
    </div>

    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="text" class="form-control" id="age" name="age" placeholder="Type your age here">
    </div>

    <div class="mb-3 bg-opacity">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Type your email here">
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Type your phone here">
    </div>

    <div class="mb-3 bg-opacity">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Type your address here">
    </div>

    <div class="mb-4 bg-opacity">
        <label for="observation" class="form-label">Observation</label>
        <input type="text" class="form-control" id="observation" name="observation" placeholder="Type the observation here">
    </div>
    <button type="submit" class="btn btn-success mb-3">Cadastrar</button>
    <a href="{{ route('SiteController.index') }}" class="btn btn-danger mb-3">Voltar</a>
</form>
@endsection