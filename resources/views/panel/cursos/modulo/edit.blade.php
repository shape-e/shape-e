@extends('layouts.app_panel')

@section('content')
<div class="mx-5">
    <form action="/panel/cursos/{{$url}}/modulo/{{$modulo->id}}" enctype="multipart/form-data" method="post">
    @csrf
    @method('put')

        <input type="text" name="nombre_modulo" id="nombre_modulo" class="form-control w-100 my-2 py-2" value="{{$modulo->titulo}}" placeholder="Nombre del modulo">
        
        <button class="my-2 btn btn-primary w-100">Guardar</button>
    </form>
</div>



@endsection
