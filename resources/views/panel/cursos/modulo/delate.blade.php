@extends('layouts.app_panel')

@section('content')
<div class="mx-5">
    <form action="/panel/cursos/{{$url}}/modulo/{{$modulo->id}}" enctype="multipart/form-data" method="post">
    @csrf
    @method('delete')

        <h1>Elimnar modulo </h1>
        
        <button class="my-2 btn btn-danger w-100">Eliminar</button>
    </form>
</div>



@endsection
