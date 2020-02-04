@extends('layouts.app_panel')

@section('content')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/noticias.webp')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Blog shape-e</h1>
            <span class="subheading">Noticias de tecnologías y de todo un poco</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-10 mx-auto">
      
 
</div>
   
  @foreach($posts as $post)

            <div class="card-deck">
            <a class="" href="/{{$post->url}}">        

              <div class="card " style="">
              <img src="portadas/{{ $post->portada }}" class="card-img-top" alt="{{$post->titulo}}">
              <div class="card-body">
                <h5 class="card-title">{{$post->titulo}}</h5>
                <p class="post-meta">publicado el {{date("d F, Y", strtotime($post->created_at))}}</p>
              </div>
              </a>

            </div>
            @endforeach      

        <hr>
        


        <!-- Pager -->
        <div class="clearfix">

        {{ $posts->links() }}
        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
 


@endsection
