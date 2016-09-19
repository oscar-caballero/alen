@extends('layouts.master')
@section('title', 'Login')
@section('content')
<section class="bg_home login">
    <div class="row">
        <div class="bg_blue">
            <div class="bg_white">
                <div class="title">
                    <h2>Bienvenidos</h2>
                    <hr>
                    <p>Catálogo estratégico de grupo AlEn </p>
                </div>
                <div class="form_login">
                    <form id="login" action="{{ url('/login') }}" method="post" class="box-login">
                        {{ csrf_field() }}
                        <div>
                            <label>Usuario:</label>
                            <input type="text" name="username" class="required">
                        </div>
                        <div>
                            <label>Contraseña:</label>
                            <input type="password" name="password" class="required">
                        </div>
                        <button type="submit">Ingresar<span class="icon-arrow-right"></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
