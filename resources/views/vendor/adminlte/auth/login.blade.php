@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Iniciar Sesión
@endsection

@section('content')
<body class="hold-transition login-page">
    <div id="app" v-cloak>
        <div class="login-box">
            <div class="login-logo">
                <img src="{{URL::asset('img/logo.png') }}" class="logo-light" alt="" height="80">
            </div><!-- /.login-logo -->

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="login-box-body">
        <p class="login-box-msg"> Iniciar Sesión </p>

        <login-form name="{{ config('auth.providers.users.field','email') }}"
                    domain="{{ config('auth.defaults.domain','') }}"></login-form>


        <a href="{{ url('/password/reset') }}">Olvidó su Contraseña?</a><br>

    </div>

    </div>
    </div>
    @include('adminlte::layouts.partials.scripts_auth')
</body>

@endsection
