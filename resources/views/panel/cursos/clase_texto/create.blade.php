@extends('layouts.app_panel')

@section('content')
<div class="mx-5">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 mt-3 text-gray-800 border-b ">Nueva clase</h1>
    </div>

    <form action="/panel/cursos/{{$url}}/clasesTexto" enctype="multipart/form-data" method="post">
    @csrf

        <input type="text" name="nombre_clase" id="nombre_clase" class="w-100 my-2 py-2" placeholder="Nombre de la clase">

        <textarea_s id="descripcion" class="textarea_s" name="descripcion">Next, use our Get Started docs to setup Tiny!</textarea_s>
        
        <button class="my-2 btn btn-primary w-100">Guardar</button>
    </form>
</div>



@endsection
