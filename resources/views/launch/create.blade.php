@extends('layouts.appCatalog')

@section('body')
<section class="nuevo_lanzamiento">
      <div class="row">
        <div class="content">
          <div class="title">
            <h2>Nuevo lanzamiento</h2>
            <hr>
          </div>
          <div class="form_admin clearfix">
              @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul class="alert alert-danger" role=''>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>   
                @endif
              {!! Form::open(['url' => '/launch/store', 'class' => 'box-contac', 'files' => true,'method'=>'Post']) !!}
              <fieldset class="clearfix">
                <div class="clearfix">
                  <div class="grid-1-6 left">
                     {!! HTML::decode(Form::label('name','Nombre de Producto<span>*</span>')) !!}
                     {!! Form::text('name', null, ['class' => 'required', 'required' => 'required']) !!}
                  </div>
                  <div class="grid-1-6 left">
                     {!! HTML::decode(Form::label('presentation','Presentación<span>*</span>')) !!}
                     {!! Form::text('presentation', null, ['class' => 'required', 'required' => 'required']) !!}
                  </div>
                  <div class="grid-1-6 left">
                    {!! HTML::decode(Form::label('launch_date','Fecha de lanzamiento<span>*</span>')) !!}
                    <div class="caja">
                     {!! Form::text('launch_date', null, ['class' => 'required', 'required' => 'required']) !!}
                    </div>
                  </div>
                  <div class="grid-1-6 left">
                    {!! HTML::decode(Form::label('chain_id','Encargado del lanzamiento*<span>*</span>')) !!}
                    <div class="caja">
                        {!! Form::select('chain_id', $chainsPluck, null, ['class' => 'choice']) !!}
                        <span class="icon-chevron-down"></span>
                    </div>
                  </div>
                </div>
                <div>
                    {!! HTML::decode(Form::label('description','Descripción del producto<span>*</span>')) !!}
                    {!! Form::textarea('description', null, ['class' => 'required', 'required' => 'required']) !!}
                </div>
                <div>
                  
                  {!! HTML::decode(Form::label('images[1]','Imagen del producto<span>*</span>')) !!}
                  <div class="pic">
                  <input type="file" name="image" required="required" class="required">
                  <img src="{{URL::asset('/images/lanzamientos/ima_product.jpg')}}">
                  </div>
                </div>
                <div class="clearfix">
                  <label>Cadena<span>*</span></label>
                  @foreach($chains as $chain)
                  <div class="grid-1-3 left">
                    {!! Form::checkbox('cadena', $chain->id )!!}
                    <figure><img src="{{$chain->image}}" alt="Logotipo {{$chain->name}}" title="{{$chain->description}}">
                    </figure>
                  </div>
                  @endforeach
                  
                </div>
              </fieldset>
              
               @foreach($chains as $chain)
              <fieldset class="clearfix">
                <div class="title">
                  <figure><img src="{{URL::asset($chain->image)}}" alt="Logotipo {{$chain->name}}" title="{{$chain->description}}">
                  </figure>
                  <hr>
                </div>
                <div>
                  <label>Comentario<span>*</span></label>
                  <textarea type="text" class="required" name="launch_chain[{{$chain->id}}][comment]"></textarea>
                </div>
                <div>
                  <label>Planograma Actual<span>*</span></label>
                  <div class="pic">
                    <input type="file" name="launch_chain[{{$chain->id}}][plano_actual]">
                    <img src="{{URL::asset('images/lanzamientos/planograma.jpg')}}">
                  </div>
                </div>
                <div>
                  <label>Propuesta de Planograma<span>*</span></label>
                  <div class="pic">
                    <input type="file" name="launch_chain[{{$chain->id}}][plano_propouse]">
                    <img src="{{URL::asset('images/lanzamientos/planograma.jpg')}}">
                  </div>
                </div>
              </fieldset>
               @endforeach
              <button type="submit">Añadir Lanzamiento</button>
            </form>
          </div>
        </div>
      </div>
    </section>

 {!! Form::close() !!}

</div>
@endsection