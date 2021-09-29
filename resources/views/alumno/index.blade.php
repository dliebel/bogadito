 @extends('layouts.app')

 @section('content')
 <h1>HOla alumno, </h1>


 @if ($message = Session::get('success'))
 <div class="alert alert-success">
   <p>{{ $message }}</p>
 </div>
 @endif

 <a class="btn btn-primary" href="{{ route('alumno.create') }}" role="button">Crear</a>
 <table class="table">
   <thead>
     <tr>
       <th scope="col">#</th>
       <th scope="col">Nombre</th>
       <th scope="col">Apelido</th>
       <th scope="col">Creacion</th>
       <th scope="col">Acciones</th>
     </tr>
   </thead>
   <tbody>
     @foreach($lists as $row)
     <tr>
       <th scope="row">{{$row->id}}</th>
       <td>{{$row->nombre}}</td>
       <td>{{$row->apellido}}</td>
       <td>{{$row->created_at}}</td>
       <td>
         <form action="{{ route('alumno.destroy',$row->id) }}" method="POST">
           <a class="btn btn-info" href="{{ route('alumno.show',$row->id) }}">Show</a>
           <a class="btn btn-primary" href="{{ route('alumno.edit',$row->id) }}">Edit</a>
           @csrf
           @method('DELETE')
           <button type="submit" class="btn btn-danger">Delete</button>
         </form>



       </td>
     </tr>
     @endforeach
   </tbody>
 </table>
 @endsection