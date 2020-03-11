@extends('layouts.app')

@section('content')
<script src="http://jwpsrv.com/library/4+R8PsscEeO69iIACooLPQ.js"></script>

<div class="d-flex flex-wrap">
   <div class="d-a d-flex flex-column">
    @if ($clases->formato_video === "externo")
        <div class="embed-container">
        <iframe  class="w-100 fm-video video-js "
        src="" 
        frameborder="0" 
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen></iframe>
        </div>
    @elseif ($clases->formato_video === "youtube")
    <div class="embed-container">
        <iframe  class="w-100 fm-video video-js "
        src="{{$clases->video}}" 
        frameborder="0" 
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen></iframe>
        </div>
    @else
    
    <video id="fm-video"  class="w-100 fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}" controls id="fm-video">
          <source id="video_externo" src="{{$clases->video}}" type="video/mp4">
        </video>
    @endif
        


        <!--
        <script src="https://players.brightcove.net/1752604059001/default_default/index.min.js"></script>-->
        
        <div class="Contorno-plan d-flex justify-content-between" style="width: 100%;height: 40px;background: rgb(0, 123, 255);align-items: center;color: #fff;">
            <div>
                <button id="btnDescripcion" id="descripcion" class="btn" style="font-weight: 500;color: #ffffff;border-bottom: 3px solid #ffffff;">Descripción</button>
                <button id="btnArchivos"  id="archivos" class="btn" style="font-weight: 500;color: #ffffff;border-bottom: 3px solid #007bff;">Archivos</button>
            </div>
            

            <a href="https://shape-e.com/cursos/{{$clases->id_curso}}" style="font-weight: 500;color: #ffffff;border-bottom: 3px solid #007bff;" class="btn ">Clases</a>

        </div>


        <div id="descripcion" class="px-3 py-3">
            <div  class="d-flex justify-content-between align-items-center">
            <h1 style="font-size: 1.5rem;    margin-bottom: 0;">{{$clases->nombre}}</h1>
            @foreach($clase_siguientes as $clase_siguiente)
                <a href="{{$clase_siguiente->url}}" class="btn btn-success">Siguiente clase</a>
            @endforeach

            </div>
            <hr>
            <p><?php echo $clases->descripcion ?></p>
        </div>

        <div class="px-3 py-3" id="recursos" style="display:none;padding-right: 0px;padding-left: 10px;width:100%; background:#fff;    align-items: center;">
            <h1 style="font-size: 1.5rem;">Recursos</h1>
            
            @foreach($recursos as $recurso)
            <div class="d-flex justify-content-between align-items-center" style="margin: 25px 0;">
                <a href=""class="d-flex align-items-center">
                    <img src="{{$recurso->img}}">
                    <p style="margin: 0;">{{$recurso->nombre}}</p>
                </a>

                <a href="{{$recurso->url_descarga}}">
                    <img src="https://img.icons8.com/material/24/007bff/downloading-updates.png" width="30px">
                </a>
            </div>
            @endforeach
        </div>

        
    </div>

    <div class="d-b">
        <div id="app">
            <chat-composer v-on:messagesent="addMessage"></chat-composer> 
            <chat-log :messages="messages" style="overflow-y: scroll;overflow-x: hidden;height: 100vh;"></chat-log>
            <chat-message ></chat-message>
        </div>
    </div>
    
</div>
<script src="{{ asset('js/video.js') }}"></script>


@endsection
