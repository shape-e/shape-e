@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-2">
        <div class="col-md-11 ">

<div class="card-columns todoloscursos">
@foreach($cursos as $curso)
<a href="cursos/{{$curso->url}}">
  <div class="card">
    <img src="{{$curso->portada}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-center font-weight-bolder">{{$curso->nombre}}</h5>
      <p class="card-text">{{$curso->descripcion}}</p>
      <a class="btn btn-primary btn-block" href="cursos/{{$curso->url}}" role="button">Ver curso</a>
    </div>
  </div>
</a>

@endforeach  
</div>
        </div>
    </div>
</div>


@endsection
