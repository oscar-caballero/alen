@extends('layouts.appCatalog')

@section('body')
<section class="users">
      <div class="row">
        <div class="content">
          <div class="title">
            <h2>Usuarios</h2>
            <hr><a href="{{URL::route('users_create')}}" title="Añadir un usuario" class="btn">Añadir un usuario</a>
          </div>
          <div class="cont">
            <ul class="usuarios">
              @foreach($users as $item)
              <li class="clearfix"><span class="icon-user"></span>  
                <div class="clearfix">
                  <p>{{ $item->name }} {{ $item->last_name }}</p>
                  <div>
                      <a href="{{ URL::route('users_edit' , $item->id) }}" title="Editar" class="link">Editar<span class="icon-edit"></span></a>
                      {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/users/delete', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                        <a href="#" title="Eliminar" onclick='return confirmAction(this,"Confirm delete?");' class="link">Eliminar<span class="icon-trash"></span></a>
                        
                        {!! Form::close() !!}
                  </div>
                </div>
                <div><small> <b>Usuario: </b>{{$item->username}}</small><small> <b>Correo: </b>{{$item->email}}</small></div>
              </li>
              @endforeach
            </ul>
            <div class="pagination-wrapper"> {!! $users->render() !!} </div> 
          </div>
        </div>
      </div>
    </section>
    </div>
</div>
@endsection
