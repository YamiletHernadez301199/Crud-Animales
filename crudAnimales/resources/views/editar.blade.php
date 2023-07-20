@extends('layout/main')
@section('contenido')
<div class="container">
    <div class="row my-4">
        <div class="col">
            <h2 class="fst-italic">Editar Animales</h2>
             <form action="{{ route('animales.update', $item->id)}}" method="POST" class="fst-italic">
                @csrf
                @method("PUT")
                <label for="nombre">Nombre de animal</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{$item->nombre}}">
                <label for="habitad">Habitad</label>
                <input type="text" class="form-control" name="habitad" id="habitad" value="{{$item->habitad}}">
                <label for="localizacion">Localización</label>
                <input type="text" class="form-control" name="localizacion" id="localizacion" value="{{$item->localizacion}}">
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
                <button class="btn btn-success my-3 fst-italic" >Actualizar</button>
                <a href="{{route ('animales.index')}}" class="btn btn-info my-3 fst-italic">Regresar</a>
    </form>
        </div>
    </div>
</div>
    
@endsection