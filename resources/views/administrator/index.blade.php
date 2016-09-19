@extends('layouts.appSection')
@section('titleSection','Bienvenidos al Administrador')
@section('subtitleSection','Del Cat&aacute;logo Estrat&eacute;gico de Grupo AlEn')
@section('body')
<section class="admin_holder">
      <div class="row">
        <div class="content clearfix">
          <div class="grid-1-6 unit left">
            <div class="blue">
              <h3>Base Cat&aacute;logo</h3>
            </div>
            <div class="bg_white">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.</p><a href="#" title="Conoce las oportunidades" class="link">Agregar una nueva base<span class="icon-arrow-right"></span></a>
            </div>
          </div>
          <div class="grid-1-6 unit left">
            <div class="yellow">
              <h3>Base Valores</h3>
            </div>
            <div class="bg_white">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.</p><a href="#" title="Conoce las oportunidades" class="link">Agregar una nueva base<span class="icon-arrow-right"></span></a>
            </div>
          </div>
          <div class="grid-1-6 unit right">
            <div class="blue">
              <h3>Usuarios</h3>
            </div>
            <div class="bg_white">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.</p>
              <a href="{{URL::route('users')}}" title="Conoce las oportunidades" class="link">Ir a usuarios<span class="icon-arrow-right"></span></a>
            </div>
          </div>
          <div class="grid-1-6 unit left">
            <div class="yellow">
              <h3>Administración de Lanzamientos</h3>
            </div>
            <div class="bg_white">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.</p>
              <a href="{{URL::route('launch.index')}}" title="Conoce las oportunidades" class="link">Ir a admón. de lanzamientos<span class="icon-arrow-right"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
