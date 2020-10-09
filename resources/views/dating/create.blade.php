@extends('adminlte::page')

@section('title', 'Notaria 2')

@section('content_header')
@stop

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    @section('content')
        <div class="row">
            <div class="col-md-12">
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title">Nueva cita</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
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
