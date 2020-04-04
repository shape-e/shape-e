@extends('layouts.app_panel')

@section('content')
<div class="mx-5">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 mt-3 text-gray-800 border-b ">Editar clase</h1>
    </div>

    <form action="/panel/cursos/{{$url}}/clasesTexto/{{$clase->id}}" enctype="multipart/form-data" method="post">
    @csrf
    @method('put')

        <div class="input-group mb-3 my-2 py-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">https://shape-e.com/cursos/r/{{$url}}/</span>
        </div>
            <input type="text" class="form-control " name="url" id="url" aria-describedby="basic-addon3" value="{{$clase->url}}">
        </div>
        <input type="text" name="nombre_clase" id="nombre_clase" class="w-100 my-2 py-2" placeholder="Nombre de la clase" value="{{$clase->nombre}}">

        <textarea_s id="descripcion" class="textarea_s" name="descripcion"><?php echo$clase->descripcion ?></textarea_s>
        
        <button class="my-2 btn btn-primary w-100">Guardar</button>
    </form>
</div>



@endsection
