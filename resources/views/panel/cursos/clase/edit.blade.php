@extends('layouts.app_panel')

@section('content')
<div class="mx-5">
    <form action="/panel/cursos/{{$url}}/clases/{{$clase->id}}" enctype="multipart/form-data" method="post">
    @csrf
    @method('put')
    <div class="input-group mb-3 my-2 py-2">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon3">https://shape-e.com/cursos/r/{{$url}}/</span>
    </div>
        <input type="text" class="form-control " name="url" id="url" aria-describedby="basic-addon3" value="{{$clase->url}}">
    </div>
    <input type="text" name="nombre_clase" id="nombre_clase" class="form-control w-100 my-2 py-2" placeholder="Nombre de la clase" value="{{$clase->nombre}}">

    <div class="form-group shadow-textarea">
        <textarea_s class="form-control z-depth-1" id="descripcion" name="descripcion" rows="3" placeholder="Descripción" >{{$clase->descripcion}}</textarea_s>
    </div>

    <input type="text" name="video" id="video" class="form-control w-100 my-2 py-2" placeholder="Link del video" value="{{$clase->video}}">

    <input type="text" name="minutos" id="minutos" class="form-control w-100 my-2 py-2" placeholder="Minutos de duración"value="{{$clase->minuto}}">
    
    <label>Tipo de video</label>
    @if($clase->formato_video == "servidor_propio")
    <select name="formato_video"  id="formato_video" class="form-control">
        <option value="servidor_propio"selected>Servidor propio</option> 
        <option value="externo" >Externo</option>
        <option value="youtube">Youtube</option>
    </select>
    @elseif($clase->formato_video == "externo")
    <select name="formato_video"  id="formato_video" class="form-control">
        <option value="servidor_propio">Servidor propio</option> 
        <option value="externo" selected>Externo</option>
        <option value="youtube">Youtube</option>
    </select>
    @elseif($clase->formato_video == "youtube")
    <select name="formato_video"  id="formato_video" class="form-control">
        <option value="servidor_propio">Servidor propio</option> 
        <option value="externo" >Externo</option>
        <option value="youtube"selected>Youtube</option>
    </select>
    @endif

        <button class="my-2 btn btn-primary w-100">Guardar</button>
    </form>
</div>



@endsection
