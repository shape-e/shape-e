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
<a href="/cursos/cursos-gratis-de-programacion-basica">

  <div class="card">
    <img src="{{Request::root() . '/img/ico_principal/cursos-gratis-de-programacion-basica.webp'}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-center">Cursos Gratis De Programación Básica</h5>
      <p class="card-text">Aprende programación desde 0.</p>
      <a class="btn btn-primary btn-block" href="/cursos/cursos-gratis-de-programacion-basica" role="button">Más información</a>
    </div>
  </div>  
  </a>

  <a href="/cursos/Curso-de-Python">

  <div class="card">
    <img src="{{Request::root() . '/img/ico_principal/1583594976python.png'}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-center">Curso de Python</h5>
      <p class="card-text">Python presume de tener la sintaxis más clara entre los lenguajes, además de ser genial para iniciar a programar y muy poderoso como para aplicarlo a gran escala.</p>
      <a class="btn btn-primary btn-block" href="/cursos/Curso-de-Python" role="button">Más información</a>
    </div>
  </div>  
  </a>
</div>




<div class="card-columns todoloscursos">

</div>
        </div>
    </div>
</div>


@endsection
