@extends('template.plantilla')
@section('contenedor')
    
<hr>
<div class="d-md-flex justify-contend-md-end">
    <form action="{{route('animales.index')}}" method="GET">
        <div class="btn-group">
            <input type="text" name="busqueda" class="form-control">
            <input type="submit" value="buscar" class="btn btn-primary">
        </div>
    </form>
<br>

</div>

<a href="{{route('animales.create')}}" class="btn btn-primary">Crear</a>
<table class="table">
    <thead>
        <th>id</th>
        <th>especie</th>
        <th>nombre</th>
        <th>opciones</th>
    </thead> 
    <tbody>
       @foreach ( $animales as $animal)
       <tr>
        <td>{{$animal->id}}</td>
        <td>{{$animal->especie}}</td>
        <td>{{$animal->nombre}}</td>
        <td class="btn-group">
            <a href="{{route('animales.edit',$animal->id)}}" class="btn btn-danger">Editar</a>
            <a href="{{route('animales.destroy',$animal->id)}}" class="btn btn-warning">Eliminar</a>

        </td>
       </tr>
           
       @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4"> {{$animales->links()}}</td>
        </tr>
    </tfoot>
</table>

@endsection