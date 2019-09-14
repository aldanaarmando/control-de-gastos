
@extends('layouts.layout')
@section('content')

<h1 class="text-center">Usuarios</h1>
<div class="container">


    <table class="table">
  <thead class="thead-light">
    <tr>
    
      <th scope="col" width="10%">Id_usuario</th>
      <th scope="col" width="15%">Nombre</th>
      <th scope="col" width="15%">Apellido paterno</th>            
      <th scope="col" width="10">Apellido materno</th>    
      <th scope="col" width="15%">Fecha de nacimiento</th>
      <th scope="col" width="15%">Celular</th>            
      <th scope="col" width="10%">Genero</th>                                 
     
    </tr>
  </thead>
 <tbody>
      @foreach($usuarios as $usuario)
    <tr>
    
      <th scope="row">{{$usuario->id_usuario}}</th>
      <td>{{ $usuario->nombre}}</td>
      <td>{{ $usuario->apellido_pat}}</td>
      <td>{{ $usuario->apellido_mat}}</td>
      <td>{{ $usuario->fecha_nac}}</td>
      <td>{{ $usuario->celular}}</td>
      <td>{{ $usuario->genero}}</td>
      <td><a class="btn btn-info" href="{{route('usuario.edit',$usuario->id_usuario)}}">Editar</a></td>
             <form action="{{route('usuario.destroy',$usuario->id_usuario)}}" method="post">
          @csrf
         @method('DELETE')
                 <td><button type="submit" class="btn btn-info" >Eliminar</button></td>
         </form>
@endforeach
    </tr>
  </tbody>
        
</table>
<a class="btn btn-info mb-4"
       href="{{route('usuario.create')}}">Nuevo Usuario</a>
</div>

@endsection
