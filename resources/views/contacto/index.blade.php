
@extends('layouts.layout')
@section('content')

<h1 class="text-center">Contacto</h1>
<div class="container">
    <table class="table">
  <thead class="thead-light">
    <tr>
    
      <th scope="col" width="10%">Id Contacto</th>
      <th scope="col" width="20%">Nombre</th>
      <th scope="col" width="20%">Apellido</th>            
      <th scope="col" width="10">Fecha de nacimiento</th>
      <th scope="col" width="20%">Direccion</th>
      <th scope="col" width="20%">Telefono</th>            
      <th scope="col" width="10">Email</th>     
     
    </tr>
  </thead>
 <tbody>
      @foreach($contactos as $contacto)
    <tr>
    
      <th scope="row">{{$contacto->id_contacto}}</th>
      <td>{{ $contacto->nombre}}</td>
      <td>{{ $contacto->apellido}}</td>
      <td>{{ $contacto->fecha_nac}}</td>
      <td>{{ $contacto->direccion}}</td>
      <td>{{ $contacto->telefono}}</td>
      <td>{{ $contacto->email}}</td>

@endforeach
    </tr>
  </tbody>
        
</table>
<a class="btn btn-info mb-4"
       href="{{route('contacto.create')}}">Nuevo Gasto</a>
</div>

@endsection
