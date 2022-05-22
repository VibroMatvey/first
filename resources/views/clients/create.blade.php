@extends('layout.main')
@section('content')
<div class="container" style="max-width: 500px;">
    <div class="text-center">
        <h5 class="text-center">Регистрация</h5>
    </div>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="form-floating mb-3" style="margin-top: 50px;">
            <input type="text" class="form-control" id="name" name="name" placeholder="Имя" autocomplete="off">
            <label for="name">Имя</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="surname" name="surname" placeholder="фамилия" autocomplete="off">
            <label for="surname">фамилия</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="login" name="login" placeholder="Логин" autocomplete="off">
            <label for="login">Логин</label>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>
@endsection