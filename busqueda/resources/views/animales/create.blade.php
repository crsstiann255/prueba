@extends('template.plantilla')
@section('contenedor')
    


<form action="{{route('animales.store')}}" method="POST">
    @csrf
    <div>
        <label for="">especie</label>
        <input type="text" name="especie">
    </div>
    <div>
        <label for="">nombre</label>
        <input type="text" name="nombre">
    </div>
    <div>
        <input type="submit" value="Guardar">
    </div>
</form>
@endsection