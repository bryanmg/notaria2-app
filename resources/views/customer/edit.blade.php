@extends('adminlte::page')

@section('title', 'Notaria 2')

@section('content_header')
@stop

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    @section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title">Actualizar cliente</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {{ Form::open(array('route' => array('customers.update', $customer->id), 'method' => 'PUT')) }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nombres</label>
                                        <input type="text" class="form-control" id="name" name="name" required value="{{$customer->user->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">Apellidos</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" required value="{{$customer->lastname}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required value="{{$customer->user->email}}">
                                        @if ($errors->has('email')) <p style="color:red;">{{ $errors->first('email') }}</p> @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Teléfono</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="{{$customer->phone}}">
                                    </div>
                                    <div class="form-group">
                                        <label>CURP</label>
                                        <input type="text" class="form-control" id="curp" name="curp" value="{{$customer->curp}}">
                                    </div>
                                    <div class="form-group">
                                        <label>RFC</label>
                                        <input type="text" class="form-control" id="rfc" name="rfc" value="{{$customer->rfc}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ocupación</label>
                                        <input type="text" class="form-control" id="job" name="job" value="{{$customer->job}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Estado civil</label>
                                        <select name="civil_status" id="civil_status" class="form-control">
                                            <option @if ($customer->civil_status == 'Soltero') selected @endif value="Soltero">Soltero</option>
                                            <option @if ($customer->civil_status == 'Casado') selected @endif value="Casado">Casado</option>
                                            <option @if ($customer->civil_status == 'Divorciado') selected @endif value="Divorciado">Divorciado</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Dirección</label>
                                        <input type="text" class="form-control" id="adress" name="adress" value="{{$customer->adress}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Lugar de nacimiento</label>
                                        <input type="text" class="form-control" id="birthplace" name="birthplace" value="{{$customer->birthplace}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Fecha de nacimiento</label>
                                        <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{$customer->birthdate}}">
                                    </div>
                                </div>
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
                                </div>
                            </div>
                        {{ Form::close() }}

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
