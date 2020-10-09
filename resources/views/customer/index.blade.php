@extends('adminlte::page')

@section('title', 'Notaria 2')

@section('content_header')
    <h1>Clientes</h1>
@stop

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    @section('content')
        <div class="row">
            <div class="col-md-12">
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@push('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="/vendor/datatables/buttons.server-side.js"></script>
    {!! $dataTable->scripts() !!}
@endpush
@section('js')
    <script> console.log('Hi!'); </script>
@stop
