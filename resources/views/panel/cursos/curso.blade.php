@extends('layouts.app_panel')

@section('content')

    

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Cursos</h1>
            <a href="/panel/cursos/create" class="btn btn-primary">Crear Curso</a> 
          </div>

          <!-- Content Row -->
          <div class="row table-responsive-sm">
          <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Titulo</th>
      <th scope="col">Acciones</th> 
    </tr>
  </thead>
  <tbody>
  @foreach($cursos as $curso)

    <tr>
      <th scope="row">{{$curso->id}}</th>
      <td>{{$curso->nombre}}</td>
      <td><a href="#">Editar</a></td>
    </tr>
    @endforeach    

  </tbody>
</table>
          </div>
            

@endsection
