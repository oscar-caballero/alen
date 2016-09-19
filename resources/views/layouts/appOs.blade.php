@extends('layouts.master')
@section('content')
<header>
      <div class="row clearfix">
        <div class="top">
          <div class="clearfix">
            <div class="logo"><a href="index.html"><img src="{{URL::asset('images/logo_w.png')}}" alt="Logo Appdel"></a></div><a href="#" onclick="return false;" aria-hidden="false" class="nav-toggle"><span class="iconMenu"></span></a>
          </div>
        </div>
        @include('layouts.menu')
        <div class="user">
          <p>Usuario: <b>{{Auth::user()->name}} {{Auth::user()->last_name}}</b></p><a href="{{url('/logout')}}">Cerrar Sesión</a>
        </div>
      </div>
    </header>
    @yield('complement')
    @yield('body')
    <footer>
      <div class="row">
        <p>AlEn © 2016 Todos los Derechos Reservados</p>
      </div>
    </footer>
@endsection