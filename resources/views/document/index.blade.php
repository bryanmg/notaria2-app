@extends('adminlte::page')

@section('title', 'Notaria 2')

@section('content_header')
    <h1>Documentos</h1>
@stop

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    @section('content')
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <x-card title="" class="card-default">
            <div class="row">
                <div class="col-md-12 text-right">
                    <a href="{{ route('documents.create') }}" class="btn btn-warning btn-sm"><i class="fa fa-plus-circle"> Nuevo tipo de documento</i></a>
                </div>
            </div>
            <div class="table-responsive">
                {{$dataTable->table()}}
            </div>
        </x-card>
    @stop
</body>

@section('js')
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    {{$dataTable->scripts()}}
@stop
