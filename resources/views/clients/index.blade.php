@extends('layout.main')
@section('content')
<div class="text-center">
    <h5 class="text-center">Список клиентов</h5>
</div>
<table class="table" style="margin-top: 50px;">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Surname</th>
        <th scope="col">Login</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($clients as $client)
      <tr>
        <th scope="row">{{$client->id}}</th>
        <td>{{$client->name}}</td>
        <td>{{$client->surname}}</td>
        <td>{{$client->login}}</td>
      </tr>
      @endforeach
    </tbody>
</table>
@endsection    
