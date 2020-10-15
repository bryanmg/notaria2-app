@extends('adminlte::page')

@section('title', 'Notaria 2')

@section('content_header')
@stop
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    @section('content')
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <x-card title="Actualizar tipo de documento" class="card-default">
            {!! Form::open(array('route' => array('documents.update', $document->id), 'method' => 'PUT')) !!}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="name" class="form-control" id="name" name="name" value="{{$document->name}}" required>
                        @if ($errors->has('name')) <p style="color:red;">{{ $errors->first('name') }}</p> @endif
                    </div>
                    <div class="form-group">
                        <label>Descripción</label>
                        <textarea class="form-control" name="description" id="description" cols="4" rows="3">{{$document->description}}</textarea>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
                </div>
            {!! Form::close() !!}
        </x-card>
    @stop
</body>
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
