@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Потвърди имейл адреса') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Новият линк за верификация е изпратен на вашият имейл адрес.') }}
                        </div>
                    @endif

                    {{ __('Преди да продължите, моля проверете имейла си.') }}
                    {{ __('Ако не сте получили линка') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Кликнете друг за заявка на друг линк') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
