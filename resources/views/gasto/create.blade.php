@extends('layouts.layout')

@section('title', 'Changarro')

@section('content')
<h1 class="text-left">Registrar gasto</h1>
@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
 @endif
  <head>
  </head>
<form action="{{route('gasto.store')}} " method="POST">
@csrf
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">id_gasto</label>
  <div class="col-10">
    <input class="form-control" type="text" name="id_gasto" style="width:300px;height:30px">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre de gasto</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nombre_gasto" style="width:300px;height:30px">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Tipo degastoo</label>
  <div class="col-10">
    <input class="form-control" type="text" name="tipo_gasto" style="width:300px;height:30px">
  </div>
</div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Total</label>
  <div class="col-10">
    <input class="form-control" type="search" name="total" style="width:300px;height:30px">
  </div>
</div>
  <div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
    </form>
@endsection