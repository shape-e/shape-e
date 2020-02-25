@extends('layouts.app')

@section('content')
<!-- Page Header -->


  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <h1>{{$clases->nombre}}</h1>
        <?php echo $clases->descripcion?>


         </div>
      </div>
    </div>
  </article>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
    <div id="app">
            <chat-composer v-on:messagesent="addMessage"></chat-composer> 
            <chat-log :messages="messages" style="overflow-y: scroll;overflow-x: hidden;height: 100vh;"></chat-log>
            <chat-message ></chat-message>
        </div>
    </div>
  </footer>





@endsection
