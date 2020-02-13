@extends('layouts.app')

@section('content')
<div style="background: url('{{ Request::root() . '/img/ico_principal/' .  $curso->portada }}')no-repeat center center fixed;
    weight:100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 40vh;
    display: flex;
  justify-content: center;
  align-items: center;">

    <h1 style="color:#fff;text-align: center;">{{$curso->nombre}}</h1>

</div>

<div class="" style="background-image:{{ asset($curso->portada) }};color:#fff;font-size: 24px;font-weight: 700;">
</div>
<div class="container">
    <div class="row justify-content-center py-5">
        <div class="col-md-9 ">
            <div class="card" style="border: 0px solid rgba(0,0,0,.125);">
                @foreach($clases as $clase)
                @if($clase->tipo_de_item == "modulo")

                    <h4 style="margin:10px 0 ;">{{$clase->titulo}}</h4>   
                
                @endif  
                @if($clase->tipo_de_item == "clase")

                <a class="card-body presion d-flex justify-content-between" style="border: 1px solid rgba(0,0,0,.125);" href="r/{{$clase->id_curso}}/{{$clase->url}}">
                        <div style="padding: 0.5rem;">{{$clase->nombre}}</div>
                        <div class="d-flex justify-content-between">
                            <div style="color: #495057;font-weight: 100;padding: 0.5rem;">{{$clase->minuto}}</div>
                            <div class="btn btn-outline-success">Ver</div>
                        </div>
                        
                </a>
                @endif  
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
