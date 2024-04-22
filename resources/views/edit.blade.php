@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="container">
  <div class="row align-items-stretch">
    <!-- Изображение отляво -->
    <div class="col-md-4 mb-4 mb-md-0">
      <img src="{{ asset('project3.png') }}" alt="Изображение" class="img-fluid rounded">
    </div>

    <!-- Форма за редакция на продукт отдясно -->
    <div class="col-md-8">
      <div class="card uper">
        <div class="card-header">
          Редактирай продукт
        </div>
        <div class="card-body">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div><br />
          @endif
          <form id="update-form" method="post" action="{{ route('shops.update', $shop->id) }}">
              @method('PATCH')
              @csrf
              <div class="form-group">
                  <label for="ime">Име на продукта:</label>
                  <input type="text" class="form-control" name="ime" value="{{ $shop->ime }}" />
              </div>
              <div class="form-group">
                  <label for="nomer_product">Номер на продукта:</label>
                  <input type="text" class="form-control" name="nomer_product" value="{{ $shop->nomer_product }}" />
              </div>
              <button type="button" class="btn btn-primary" onclick="confirmUpdate()">Обнови</button>
              <style>
                input{
                margin-top:10px;
                padding:10px 20px 10px 20px
                }
                .card-header{
                    display:flex;
                    align-items: center;
                    justify-content:center;
                }
                button{
                 margin-top:5%;
                 display:flex;
                 align-items:center;
                 justify-content:center;
                }
               
              </style>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function confirmUpdate() {
    if (confirm('Сигурни ли сте, че искате да обновите информацията за продукта в номенклатурата?')) {
      document.getElementById('update-form').submit();
    }
  }
</script>

@endsection
