@extends('layout/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col my-4">
                <h2 class="fst-italic text-center">Crud Animales</h2>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{route('animales.create')}}" class="btn btn-success my-2 fst-italic">Agregar animal</a>
                 </div>
                <table class="table table-hover table-sm fst-italic" my-2>
                    <thead class="table-dark">
                        <tr>
                            <th>Id</th>
                            <th>Nombre Animal</th>
                            <th>Tipo de habitat</th>
                            <th>Localización</th>
                            <th>Peligro de extinción</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($animales as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->habitad}}</td>
                            <td>{{$item->localizacion}}</td>
                            <td>{{$item->extincion}}</td>
                            <td>
                                <a href="{{route('animales.edit', $item->id)}}" class="btn btn-warning">Editar</a>
                            </td>
                            <td>
                                <form action="{{route('animales.destroy', $item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection