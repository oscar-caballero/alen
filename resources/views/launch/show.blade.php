@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Launch {{ $launch->id }}
        <a href="{{ url('launch/' . $launch->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Launch"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['launch', $launch->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete Launch',
                    'onclick'=>'return confirm("Confirm delete?")'
            ))!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $launch->id }}</td>
                </tr>
                <tr><th> Name </th><td> {{ $launch->name }} </td></tr><tr><th> Presentation </th><td> {{ $launch->presentation }} </td></tr><tr><th> Launch Date </th><td> {{ $launch->launch_date }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
