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
                                <h3 class="card-title">Editar cita</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                {!! Form::open(array('route' => array('datings.destroy', $dating->id), 'method' => 'DELETE')) !!}
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"> Eliminar cita</i></button>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {!! Form::open(array('route' => array('datings.update', $dating->id), 'method' => 'POST')) !!}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Cliente</label>
                                    <select name="user_id" id="user_id" class="form-control" required>
                                        @foreach ($users as $user)
                                            <option @if ($user->id == $customer->user_id) selected @endif value="{{$user->id}}">{{$user->name}} {{$user->customers[0]->lastname}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Fecha/Hora</label>
                                <input type="datetime-local" class="form-control" id="dating_time" name="dating_time" value="{{$dating->dating_time}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Motivo</label>
                                    <input type="name" class="form-control" id="name" name="name" required value="{{$dating->name}}">
                                    @if ($errors->has('name')) <p style="color:red;">{{ $errors->first('name') }}</p> @endif
                                </div>
                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <input type="description" class="form-control" id="description" name="description" value="{{$dating->description}}" required>
                                    @if ($errors->has('description')) <p style="color:red;">{{ $errors->first('description') }}</p> @endif
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <a href="{{ route('datings.index')}}" type="submit" class="btn btn-info" ><i class=" fas"> Cancelar</i></a>
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
