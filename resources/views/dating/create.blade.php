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
                        {!! Form::open(array('route' => array('datings.store'), 'method' => 'POST')) !!}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Cliente</label>
                                    <select name="user_id" id="user_id" class="form-control" required>
                                        @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{$user->name}} {{$user->customers[0]->lastname}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Fecha/Hora</label>
                                    <input type="datetime-local" class="form-control" id="dating_time" name="dating_time" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Motivo</label>
                                    <input type="name" class="form-control" id="name" name="name" required >
                                    @if ($errors->has('name')) <p style="color:red;">{{ $errors->first('name') }}</p> @endif
                                </div>
                                <div class="form-group">
                                    <label>Descripción</label>
                                    <input type="description" class="form-control" id="description" name="description" required>
                                    @if ($errors->has('description')) <p style="color:red;">{{ $errors->first('description') }}</p> @endif
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
                            </div>
                        {!! Form::close() !!}
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
