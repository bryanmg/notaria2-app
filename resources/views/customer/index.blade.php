@extends('adminlte::page')

@section('title', 'Notaria 2')

@section('content_header')
    <h1>Clientes</h1>
@stop

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    @section('content')
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title">Clientes</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('customers.create') }}" class="btn btn-warning btn-sm"><i class="fa fa-plus-circle"> Nuevo cliente</i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            {{$dataTable->table()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @stop
</body>

@section('js')
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    {{$dataTable->scripts()}}
@stop
