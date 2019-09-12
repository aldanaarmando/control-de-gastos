
@extends('layouts.layout')
@section('content')

<h1 class="text-center">Ingresos</h1>
<div class="container">
    <a class="btn btn-info mb-4"

       href="{{route('ingreso.create')}}">Nueva Ingreso</a>

    <table class="table">
  <thead class="thead-dark">
    <tr>
    
      <th scope="col">Id_ingreso</th>
      <th scope="col">Nombre del ingreso</th>
      <th scope="col">Tipo de ingreso</th>            
      <th scope="col">Total</th>                                 
     
    </tr>
  </thead>
 <tbody>
      @foreach($ingresos as $ingreso)
    <tr>
    
      <th scope="row">{{$ingreso->id_ingreso}}</th>
      <td>{{ $ingreso->nombre_ingreso}}</td>
      <td>{{ $ingreso->tipo_ingreso}}</td>
      <td>{{ $ingreso->total}}</td>
    </tr>
@endforeach
@csrf
  </tbody>
        
</table>
</div>

@endsection
