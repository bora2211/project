@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="container">
  <div class="row justify-content-center align-items-center">
    <!-- Таблица с продукти отляво -->
    <div class="col-md-8 mb-4 mb-md-0">
      @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div><br />
      @endif

      <table class="table table-striped">
          <thead>
              <tr>
                <td>Номер на продукта</td>
                <td>Номер на продукта в номенклатурата</td>
                <td>Име на продукта</td>
                <td colspan="2">Действия</td>
              </tr>
          </thead>
          <tbody>
            @foreach($shops as $shopItem)
            <tr>
                <td>{{$shopItem->id}}</td>
                <td>{{$shopItem->nomer_product}}</td>
                <td>{{$shopItem->ime}}</td>
                <td><a href="{{ route('shops.edit', $shopItem->id)}}" class="btn btn-primary">Промени продукта</a></td>
                <td>
                    <form action="{{ route('shops.destroy', $shopItem->id)}}" method="post" id="delete-form">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Наистина ли сте сигурни, че искате да изтриете продукта от номенклатурата?')">Изтрий продукта</button>
                    </form>
                </td>
            </tr>
            @endforeach
          </tbody>
      </table>

      <!-- Бутон за добавяне на нов продукт -->
      <a href="{{ route('shops.create')}}" class="btn btn-success">Добави нов продукт</a>
    </div>

    <!-- Изображение отдясно -->
    <div class="col-md-4">
      <img src="{{ asset('project4.png') }}" alt="Изображение" class="img-fluid rounded">
      <style>
        img{
            margin-top: 15%;
            margin-left:15px;
        }
      </style>
    </div>
  </div>
</div>

@endsection
