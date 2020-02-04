@extends('layouts.app')

@section('content')
<div style="background: url({{ asset('img/comunidad.jpg') }})no-repeat center center fixed;
    weight:100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 40vh;
    display: flex;
  justify-content: center;
  align-items: center;">

    <h1 style="color:#fff;text-align: center;">Normas de las comunidad</h1>

</div>

<div class="" style="background-image:;color:#fff;font-size: 24px;font-weight: 700;">
</div>
<div class="container">
    <div class="row justify-content-center py-5">
        <div class="col-md-9 ">
            <div class="card" style="border: 0px solid rgba(0,0,0,.125);">
               <span class="d-flex flex-row align-items-center"><img src="{{ asset('img/numero/uno.svg') }}" style="width: 50px;margin-right: 10px;"><h2>Respeto entre los integrantes de la comunidad</h2></span>
                <p>Esperamos que todos los integrantes de nuestra comunidad tengan un respeto entre si, no se aceptara ninguna de estos comportamientos en nuestra comunidad:</p>  
                <ul class="list-group list-group-flush">
                    <li class="list-group-item mt-2 mb-2">Uso de groserías y malas palabras para intentar ofender a otros usuarios.</li>
                    
                    <li class="list-group-item mt-2 mb-2">Los comentarios y aportes con tonos de burla a usuarios que no sean tan experimentados en algunos temas.</li>
                    
                    <li class="list-group-item mt-2 mb-2">Comentarios tóxicos en referencia alguna característica física de algún usuario de la comunidad.</li>
                </ul>
                              
                <span class="d-flex flex-row align-items-center"><img src="{{ asset('img/numero/dos.svg') }}" style="width: 50px;margin-right: 10px;"><h2>Respeto de los usuarios de la comunidad a los profesores</h2></span> 
                <p>Esperamos que todos los integrantes de nuestra comunidad tengan un respeto a los profesores, no se aceptara ninguna de estos comportamientos:</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item mt-2 mb-2">Uso de groserías y malas palabras para intentar ofender a los profesores.</li>
                    
                    <li class="list-group-item mt-2 mb-2">Los comentarios y aportes con tonos de burla así los profesores tampoco serán tolerados</li>
                    
                    <li class="list-group-item mt-2 mb-2">Comentarios tóxicos en referencia alguna característica física de algún profesor.</li>
                </ul>
                 
            </div>
        </div>
    </div>
</div>
@endsection