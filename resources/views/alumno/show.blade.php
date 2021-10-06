@extends('layouts.app')

@section('content')
   

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Alumno</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('alumno.index') }}"> Atras</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            {{ $alumno->nombre }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Apellido:</strong>
            {{ $alumno->apellido }}
        </div>
    </div>
</div>
@endsection