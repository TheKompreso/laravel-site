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
@endsection
