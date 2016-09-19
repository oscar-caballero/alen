@extends('layouts.appCatalog')

@section('body')
<section class="lanzamientos_holder">
      <div class="row">
        <div class="content">
          <div class="title">
            <h2>Administración de Lanzamientos</h2>
            <hr><a href="{{ url('/launch/create')}}" title="Añadir un lanzamiento" class="btn">Añadir un lanzamiento</a>
          </div>
          <div class="cont clearfix">
          <!------------------------------------------>
          @foreach($launch as $item)
            <div class="grid-1-6 left">
              <div class="bg_white"><img src="images/lanzamientos/ima1.jpg" alt="Administración de Lanzamientos" title="Administración de Lanzamientos"></div>
              <div class="bg_light_gray">
                <h3>Producto: <span>{{$item->name}}</span></h3>
                <div class="clearfix"><a href="{{ url('/launch/' . $item->id . '/edit') }}" title="Editar" class="link">Editar<span class="icon-edit"></span></a>
                    
                    <a href="#" title="Eliminar" class="link">
                        {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Eliminar" />', array(
                                    'type' => 'submit',
                                    'class' => 'icon-trash',
                                    'title' => 'Eliminar',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            )) !!}
                    
                    </a></div>
                <h4> <small>Presentación: <span>{{$item->presentation}}</span></small></h4>
                <h4> <small>Fecha de lanzamiento: <span>{{$item->launch_date}}</span></small></h4>
                <h4> <small>Encargado:  <span>{{$item->chains->name}}</span></small></h4>
              </div>
            </div>
          @endforeach
          
          </div>
        </div>
      </div>
    </section>
</div>
@endsection
