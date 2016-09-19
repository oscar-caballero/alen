@extends('layouts.appOs')
@section('complement')
<section class="nav_cat admin">
      <div class="row">
        <div class="icon_menu clearfix"><a href="#" onclick="return false;" aria-hidden="false" class="nav-bars"><span class="iconMenu"> </span></a></div>
        <div class="nav_pru">
          <div class="menu">
            <nav class="clearfix">
                  <ul>
                    <li><a href="base-catalogo.html" title="Base Catálogo"><span class="Base Catálogo"></span>Base Catálogo</a></li>
                    <li><a href="base-valores.html" title="Base Valores"><span class="Base Valores"></span>Base Valores</a></li>
                    <li class="active"><a href="{{url('/launch')}}" title="Administración de Lanzamientos"><span class="Administración de Lanzamientos"></span>Administración de Lanzamientos</a></li>
                    <li><a href="{{url('/user')}}" title="Usuarios"><span class="Usuarios"></span>Usuarios</a></li>
                  </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>
@endsection

