@extends('layouts.app_panel')

@section('content')
<div class="mx-3">
    <form action="/panel/cursos/{{$curso->id}}" enctype="multipart/form-data" method="post">
    @csrf
    @method('put')

        <h2>Editar Curso </h2>
        <div class="d-flex flex-wrap justify-content-around">
            <div class="">
                <input type="text" name="nombre_cursos" id="nombre_cursos" class="w-100 my-2 py-2" placeholder="Nombre del curso" value="{{$curso->nombre}}">


                <input type="text" name="descripcion" id="descripcion" class="w-100 my-2 py-4" placeholder="Descripción" value="{{$curso->descripcion}}">

                @if($curso->acceso == "interno")
                <select class="custom-select"  name="acceso">
                    <option value="">Selecciona</option> 
                    <option value="interno" selected>Interno</option>
                    <option value="publico">Publico</option>
                </select>

                @else
                <select class="custom-select"  name="acceso">
                    <option value="">Selecciona</option> 
                    <option value="interno" >Interno</option>
                    <option value="publico" selected>Publico</option>
                </select>
                @endif
            </div>
            <div class="d-flex flex-column  align-items-center">
                <img src="{{ Request::root() . '/img/ico_principal/' .  $curso->portada}}" width= "200px" alt="" srcset="">
                <input  type="file" name="img" id="img" class="w-100">
  
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button class="my-2 btn btn-primary ">Guardar</button>
        </div>
        
    </form>

    <hr>
    <div class="d-flex justify-content-between">
        <h2>Clases del curso </h2>
        <div>
            <a href="/panel/cursos/{{$curso->url}}/modulo/create" class="btn btn-primary">Crear modulo</a> 
            <a href="/panel/cursos/{{$curso->url}}/clases/create" class="btn btn-primary">Agregar Clase</a>
        </div> 
    </div>
    

    <div class="card" style="border: 0px solid rgba(0,0,0,.125);">
                @foreach($clases as $clase)
                @if($clase->tipo_de_item == "modulo")
                    <div class="card-body presion d-flex justify-content-between my-2" style="border: 1px solid rgba(0,0,0,.125);">
                        <h4 style="margin:10px 0 ;">{{$clase->titulo}}</h4>   
                        <h4 style="margin:10px 0 ;">Id:{{$clase->id}}</h4>   
                         <h5 style="margin:10px 0 ;align-self: center;">Modulo</h5>   
                        <div style="align-self: center;">
                            <a href="/panel/cursos/{{$clase->id_curso}}/modulo/{{$clase->id}}/confirmDelete" class="btn btn-danger">Eliminar</a>
                            <a href="/panel/cursos/{{$clase->id_curso}}/modulo/{{$clase->id}}/edit" class="btn btn-info">Editar</a>
                        </div>
                    </div>
                @endif  
                
                 @if($clase->tipo_de_item == "clase")
                <div class="card-body presion d-flex justify-content-between my-2" style="border: 1px solid rgba(0,0,0,.125);">
                        <h5 style="padding: 0.5rem;">{{$clase->nombre}}</h5>
                        <h5 style="padding: 0.5rem;">Id:{{$clase->id}}</h5>                        
                        <h5 style="margin:10px 0 ;align-self: center;">Clase</h5>   
                        <div class="d-flex justify-content-between">
                        <div style="align-self: center;">
                            <a href="/panel/cursos/{{$clase->id_curso}}/clases/{{$clase->id}}/confirmDelete" class="btn btn-danger">Eliminar</a>
                            <a href="/panel/cursos/{{$clase->id_curso}}/clases/{{$clase->id}}/edit" class="btn btn-info">Editar</a>
                        </div>
                </div>
                @endif  
                @endforeach
            </div>

</div>



@endsection
