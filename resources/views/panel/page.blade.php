@extends('layouts.app_panel')

@section('content')



<!-- Begin Page Content -->
<div class="container">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4 ">
  <h1 class="h3 mb-0 text-gray-800 border-b">Post</h1>
  <a href="/page/create" class=""><div class="plus"><span>+</span></div></a> 
</div>

<!-- Content Row -->
<div class="row table-responsive-sm">
    <table class="table">
      <thead class="thead-dark">
        <tr>
        <th scope="col">id</th>
        <th scope="col">Titulo</th>
        <th scope="col">Escritor</th> 
        <th scope="col"></th> 
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)

        <tr>
        <th scope="row">{{$post->id}}</th>
        <td>{{$post->titulo}}</td>
        <td>{{$post->escrito}}</td>
        <td></td>
        </tr>
        @endforeach    

      </tbody>
    </table>
</div>



@endsection
