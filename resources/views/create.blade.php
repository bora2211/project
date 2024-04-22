@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <!-- Карта отляво -->
        <div class="col-md-8 mb-4 mb-md-0">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4>{{ __('Добави нов продукт') }}</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('shops.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="ime">Име на продукт:</label>
                            <input type="text" class="form-control" name="ime" required>
                        </div>

                        <div class="form-group">
                            <label for="nomer_product">Артикулен номер на продукт:</label>
                            <input type="text" class="form-control" name="nomer_product" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Добави продукта в номенклатурата</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Изображение отдясно -->
        <div class="col-md-4">
            <img src="{{ asset('project6.png') }}" alt="Изображение" class="img-fluid rounded">
        </div>
    </div>
</div>

<style>
    .card-body{
        padding: 50px;
        margin-right: 20px;
    }
    button{
        display:flex;
        align-items:center;
        justify-content:center;
    }
    label,input{
margin-bottom: 10px;
    }


</style>
@endsection
