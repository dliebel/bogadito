@extends('layouts.app')

@section('content')


@if ($errors->any())
<div class="alert alert-danger">
  <strong>Whoops!</strong> Tenemos estos problemas.<br><br>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<form class="row g-3" action="{{ route('alumno.store') }}" method="POST">
  @csrf
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputEmail4" name="nombre">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="apellido" name="apellido">
  </div>


  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>

@endsection