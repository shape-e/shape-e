@extends('layouts.app_panel')

@section('content')
<div class="mx-5">
    <form action="/page" enctype="multipart/form-data" method="post">
    @csrf

        <input type="text" name="titulo" id="titulo" class="w-100 my-2 py-2" placeholder="Titulo">

        <input class="file-path validate mb-3" type="file" name="img" id="img">

        <textarea id="contenido" name="contenido">Next, use our Get Started docs to setup Tiny!</textarea>
        
        <button class="my-2 btn btn-primary w-100">Guardar</button>
    </form>
</div>



@endsection
