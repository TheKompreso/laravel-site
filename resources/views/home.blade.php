@php
    $menu_home = true;
@endphp
@extends('templates.simple-page')

@section('title')Главная @endsection

@section('page_content')
    <main class="container">
        <div class="bg-body-tertiary p-5 rounded">
            <h1>Движок сайта</h1>
            <p class="lead">Этот сайт создан с помощью Laravel и bootstrap. Сайт настроен, присутствуют заполняемые формы, ссылки с параметрами, API.</p>
            <a class="btn btn-lg btn-primary" href="https://github.com/TheKompreso/laravel-site" role="button">Смотреть на github »</a>
        </div>
    </main>
    <div class="container p-4"><div class="bg-body-tertiary p-5 rounded">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="needs-validation" novalidate="" method="post" action="/home/send-comment">
                @csrf
                <h3 class="py-1 text-center">Комментирование</h3><div class="row g-3">
                    <div class="col-12">
                        <label for="firstName" class="form-label">Ваше имя</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required="">
                        <div class="invalid-feedback">Valid first name is required.</div>
                    </div>
                    <div class="col-12">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="">
                            <div class="invalid-feedback">Your username is required.</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Почта <span class="text-body-secondary">(опционально)</span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                        <div class="invalid-feedback">Please enter a valid email address for shipping updates.</div>
                    </div>
                    <div class="col-12">
                        <label for="address" class="form-label">Комментарий</label>
                        <textarea type="text" class="form-control" id="comment" name="comment" placeholder="Хороший сайт, мне нравится!" required=""></textarea>
                        <div class="invalid-feedback">Please enter your shipping address.</div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="same-notify" name="same-notify">
                    <label class="form-check-label" for="same-address">Прислать уведомление, когда комментарий одобрят</label>
                </div>
                <hr class="my-4">
                <button class="w-100 btn btn-primary btn-lg" type="submit">Отправить</button>
            </form></div></div>
@endsection
