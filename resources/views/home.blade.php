@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="row justify-content-center align-items-center">
        <!-- Изображение отляво -->
        <div class="col-md-4 mb-4 mb-md-0 text-center">
            <img src="{{ asset('project5.png') }}" alt="Изображение" class="img-fluid rounded">
        </div>

        <!-- Карта отдясно -->
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center" style="font-size: 24px;">
                    <h4>{{ __('Начална страница') }}</h4>
                </div>

                <div class="card-body text-center" style="font-size: 18px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="lead">{{ __('Вие сте във вашия профил!') }}</p>

                    <!-- Show Manage Products button only if logged in -->
                    @auth
                        <div class="mt-4">
                            <a href="{{ route('shops.index') }}" class="btn btn-primary">Промени продукти</a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #f4f4f4;
    }

    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        
    }

    .card-header {
        background-color: #007bff;
        border-radius: 15px 15px 0 0;
        border-bottom: none;
    }

    .card-body {
        background-color: #ffffff;
        border-radius: 0 0 15px 15px;
        padding-top: 10%;
        padding-bottom: 10%;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        padding: 12px 20px;
        font-size: 20px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    div{
        font-size:20px;
    }
</style>

@endsection
