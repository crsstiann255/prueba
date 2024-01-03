
    


<form action="{{route('animales.update',$animal->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="">especie</label>
        <input type="text" name="especie" value="{{$animal->especie}}">
    </div>
    <div>
        <label for="">nombre</label>
        <input type="text" name="nombre" value="{{$animal->nombre}}">
    </div>
    <div>
        <input type="submit" value="Guardar">
    </div>
</form>
