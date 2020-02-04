@extends('layouts.app_panel')

@section('content')
<div class="mx-5">
    <form action="/panel/cursos" enctype="multipart/form-data" method="post">
    @csrf

        <input type="text" name="nombre_cursos" id="nombre_cursos" class="w-100 my-2 py-2" placeholder="Nombre del curso">

        <input class="file-path validate mb-3" type="file" name="img" id="img">

        <input type="text" name="descripcion" id="descripcion" class="w-100 my-2 py-4" placeholder="Descripción">
        
        <select name="acceso">
            <option value=""selected>Selecciona</option> 
            <option value="interno" >Interno</option>
            <option value="publico">Publico</option>
        </select>
        
        <button class="my-2 btn btn-primary w-100">Guardar</button>
    </form>
</div>



@endsection
