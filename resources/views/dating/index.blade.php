@extends('adminlte::page')

@section('title', 'Notaria 2')

@section('content_header')
    <h1>Citas</h1>
@stop

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    @section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title">Citas</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('datings.create') }}" class="btn btn-warning btn-sm"><i class="fa fa-plus-circle"> Nueva cita</i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7 offset-3">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered" id="datings">
                                        <thead>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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

@section('js')
    <script> console.log('Hi!'); </script>
@stop
