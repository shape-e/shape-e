@extends('layouts.app_panel')

@section('content')
<div class="mx-5">
    <form action="/panel/cursos/{{$url}}/clases" enctype="multipart/form-data" method="post">
    @csrf

    <input type="text" name="nombre_clase" id="nombre_clase" class="form-control w-100 my-2 py-2" placeholder="Nombre de la clase">
    <div class="form-group shadow-textarea">
        <textarea_s class="form-control z-depth-1" id="descripcion" name="descripcion" rows="3" placeholder="Descripción"></textarea_s>
    </div>

    <input type="text" name="video" id="video" class="form-control w-100 my-2 py-2" placeholder="Link del video">

    <input type="text" name="minutos" id="minutos" class="form-control w-100 my-2 py-2" placeholder="Minutos de duración">
    
    <label>Tipo de video</label>
    <select name="formato_video"  id="formato_video" class="form-control">
        <option value="servidor_propio">Servidor propio</option> 
        <option value="externo" selected>Externo</option>
        <option value="youtube">Youtube</option>
    </select>

    
        <button class="my-2 btn btn-primary w-100">Guardar</button>
    </form>
</div>



@endsection
