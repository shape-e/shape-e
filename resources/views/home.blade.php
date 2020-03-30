@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-2">
        <div class="col-md-11 ">

        <div class="py-3">
            <a class="misCursos " style="color:#ffffff;">Mis cursos</a>
            <a id ="todocursos" class="cursos mx-2" style="color:#ffffff;">Todos los Cursos</a>
        </div>
 

<div class="card-columns miscursos">
  <div class="card">
    <img src="{{Request::root() . '/img/ico_principal/cursos-gratis-de-programacion-basica.webp'}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-center">Cursos Gratis De Programación Básica</h5>
      <p class="card-text">Aprende programación desde 0.</p>
      <a class="btn btn-primary btn-block" href="/cursos/cursos-gratis-de-programacion-basica" role="button">Más información</a>
    </div>
  </div>  
</div>

<div class="card-columns todoloscursos">

</div>
        </div>
    </div>
</div>


@endsection
