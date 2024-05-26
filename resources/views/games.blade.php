@php
    $menu_games = true;

    function EchoGame($game) : void
    {
        echo'<div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="
    background-image: url('.$game->image_url.');
    background-repeat: no-repeat;
    background-size: cover;
    background-position-x: center;
"><div style="background-image: url('.$game->image_url.');background-repeat: no-repeat;background-size: contain;background-position-x: center;background-position-y: center;backdrop-filter: blur(5px);">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 bg-dark bg-opacity-50">
                        <h4 class="pt-5 mt-5 mb-4 display-8 lh-1 fw-bold">'.$game->name.'
</h4>
                        <ul class="d-flex list-unstyled mt-auto ">

                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="0.3em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                                <small>'.$game->platform.'</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="0.3em" height="1em"><use xlink:href="#calendar3"></use></svg>
                                <small>'.$game->release_date.'</small>
                            </li>
                        </ul>
                    </div>
                </div></div>
            </div>';
    }
@endphp
@extends('templates.simple-page')

@section('title')Игры@endsection

@section('page_content')
    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">Игры про медицину</h2>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            @foreach($games as $game)
                @php EchoGame($game); @endphp
            @endforeach
        </div>
    </div>
@endsection
