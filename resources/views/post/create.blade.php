@extends('layouts.app_panel')

@section('content')

<div class="mx-5">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 mt-3 text-gray-800 border-b ">New Post</h1>
    </div>

    <form action="/page" enctype="multipart/form-data" method="post">
    @csrf

        <input type="text" name="titulo" id="titulo" class="w-100 my-2 py-2" placeholder="Titulo">

        <input class="file-path validate mb-3" type="file" name="img" id="img">

        <textarea_s id="contenido" class="textarea_s" name="contenido">Next, use our Get Started docs to setup Tiny!</textarea_s>
        
        <button class="my-2 btn btn-primary w-100">Guardar</button>
    </form>
</div>



@endsection
