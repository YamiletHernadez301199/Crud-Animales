@extends('layout/main')
@section('contenido')
<div class="container">
    <div class="row my-4">
        <div class="col">
            <h2 class="fst-italic">Agregar Animal</h2>
             <form action="{{ route('animales.store')}}" method="POST" class="fst-italic">
                @csrf
                <label for="nombre">Nombre de animal</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
                <label for="habitad">Habitat</label>
                <input type="text" class="form-control" name="habitad" id="habitad">
                <label for="localizacion">Localización</label>
                <input type="text" class="form-control" name="localizacion" id="localizacion">
                <label for="extincion">Peligro de extinción</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="extincion" id="extincion" value="si" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Si
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="extincion" id="extincion2" value="no">
                    <label class="form-check-label" for="exampleRadios2">
                      No
                    </label>
                  </div>
                <button class="btn btn-success my-3 fst-italic" >Guardar</button>
                <a href="{{route ('animales.index')}}" class="btn btn-danger my-3 fst-italic">Regresar</a>
    </form>
        </div>
    </div>
</div>
    
@endsection