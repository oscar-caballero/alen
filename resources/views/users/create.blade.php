@extends('layouts.appCatalog')

@section('body')
<section class="nuevo_usuario">
    <div class="row">
        <div class="content">
            <div class="title">
                <h2>Nuevo usuario</h2>
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
                {!! Form::open(['url' => '/users/store', 'class' => 'box-contac', 'files' => true,'method'=>'Post']) !!}
                <fieldset class="clearfix">
                    <div class="clearfix">
                        <div class="grid-1-6 left">
                            {!! HTML::decode(Form::label('username','Nombre de Usuario<span>*</span>')) !!}
                            {!! Form::text('username', null, ['class' => 'required', 'required' => 'required']) !!}
                        </div>
                        <div class="grid-1-6 left">
                            {!! HTML::decode(Form::label('email','Correo<span>*</span>')) !!}
                            {!! Form::email('email', null, ['class' => 'required', 'required' => 'required']) !!}

                        </div>
                        <div class="grid-1-6 left">
                            {!! HTML::decode(Form::label('name','Nombre<span>*</span>')) !!}
                            {!! Form::text('name', null, ['class' => 'required', 'required' => 'required']) !!}

                        </div>
                        <div class="grid-1-6 left">                    
                            {!! HTML::decode(Form::label('last_name','Apellidos<span>*</span>')) !!}
                            {!! Form::text('last_name', null, ['class' => 'required', 'required' => 'required']) !!}
                        </div>
                        <div class="grid-1-6 left">
                            {!! Form::label('password','Contraseña:') !!}
                            {!! Form::password('password', null, ['class' => 'required', 'required' => 'required']) !!}
                        </div>
                        <div class="grid-1-6 left">
                            {!! Form::label('password2','Confirmar Contraseña:') !!}
                            {!! Form::password('password', null, ['class' => 'required', 'required' => 'required']) !!}
                        </div>
                    </div>
                    <div class="clearfix">
                        <label>Área de Administración<span>*</span></label>
                        
                            <div class="grid-1-3 margin left">  
                                {!! Form::Label('channel[]', 'Canal:') !!}
                                {!! Form::select('channel[]', $channels, null, ['class' => 'choice','multiple'=>'multiple']) !!}
                            </div>
                            <div class="grid-1-3 margin left">
                                {!! Form::Label('chain[]', 'Cadena:') !!}
                                {!! Form::select('chain[]', $chains, null, ['class' => 'choice','multiple'=>'multiple']) !!}
                            </div>
                        
                            <div class="grid-1-3 margin left">
                                {!! Form::Label('format[]', 'Formato:') !!}
                                {!! Form::select('format[]', $formats, null, ['class' => 'choice','multiple'=>'multiple']) !!}
                            </div>
                            <div class="grid-1-3 margin left">
                                {!! Form::Label('category[]', 'Categoría:') !!}
                                {!! Form::select('category[]', $categories, null, ['class' => 'choice','multiple'=>'multiple']) !!}
                            </div>
                        
                    </div>
                    <div class="clearfix">
                        <label>Visualización y edición<span>*</span></label>
                        <div class="grid-1-3 left">
                            <input type="checkbox" name="cadena">
                            <Label>Base Catálogo</Label>
                        </div>
                        <div class="grid-1-3 left">
                            <input type="checkbox" name="cadena">
                            <Label>Base Valores</Label>
                        </div>
                        <div class="grid-1-3 left">
                            <input type="checkbox" name="cadena">
                            <Label>Administración de Lanzamientos</Label>
                        </div>
                        <div class="grid-1-3 left">
                            <input type="checkbox" name="cadena">
                            <Label>Usuarios</Label>
                        </div>
                    </div>
                </fieldset>
                <button type="submit">Añadir Lanzamiento</button>
                </form>
            </div>
        </div>
    </div>
</section>

{!! Form::close() !!}

</div>
@endsection 
@section('scripts')
<script>
$('.choice').chosen({width: "100%"})
</script>
@endsection