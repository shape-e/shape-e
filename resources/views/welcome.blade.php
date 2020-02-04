@extends('layouts.app')

@section('content')

<div class="d-flex flex-row flex-wrap vh-100 align-items-center" >
    <div class="inicio flex-column justify-content-center">
        <h1 style="display: flex;justify-content: center;align-items: center;padding: 3% 35px;text-align:center;">Aprende programación de manera efectiva</h1>
        <!--<a href="/register" class="btn " style="display: flex;justify-content: center;margin: 0px 36%;padding: 15px;border-radius: 7.25rem;background-color: #4f2ed1;color:#fff;font-weight: 500;">Registrar</a>-->
        <a href="/normas-de-la-comunidad" class="" style="display: flex;justify-content: center;padding: 15px;color:#3d2ca5;">Normas de las comunidad</a>
    </div>
    <div class="inicio d-flex  justify-content-center align-items-center">
    <img src="{{ asset('img/v.webp') }}" width="100%" alt="" srcset="">

    </div>
    <!--<div class="inicio" style="background: url('{{ asset('img/fondo-4.png') }}')no-repeat center center;height: 438px;"></div>-->
</div>

<div style="width: 100%;background: #4933CC;    padding: 0 70px;" class="">
    <div class="d-flex flex-column justify-content-between align-items-center" style="padding-top: 29px;text-align: center;">
        <h2 style="color:#ffffff;font-size: 2.7rem;">La educación del futuro</h2>

        <div class="d-flex">
            <div class="d-flex flex-column">
                <div class="texto-des" style="color:#ffffff;">
                    <img src="{{ asset('img/w.webp') }}" class="img-d" alt="" srcset="">
                    <p class="text-w">Se acabaron las clases innecesarias de relleno que vienen en costosas carreras universitarias.</p> 

                </div>

                <div class="texto-des-b " style="color:#ffffff;">
                    <p class="text-w">Creamos la educación del futuro y tu haces parte clave de la creación de esa educación.</p> 
                    <img src="{{ asset('img/co.webp') }}" class="img-d" alt="" srcset="">

                </div>
            </div>
            <div>
            
            </div>
            <div>
            
            </div>
        </div>
        
    </div>
</div>

<section style="display:none;" class="pricing-table2 cid-rEtrinfQVz" id="pricing-tables2-5">

    

    

    <div class="container">
        <div class="media-container-row d-flex flex-row flex-wrap justify-content-center" >

            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-4" style="border: #000 1px solid; ">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        Shape-e Básico
                    </h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">
                            $
                        </span>
                        <span class="price-figure mbr-fonts-style display-1">
                            35</span>
                        <small class="price-term mbr-fonts-style display-7">
                            per month
                        </small>
                    </div>
                </div>
                <div class="plan-body">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">
                                Mobirise is perfect for non-techies who are not familiar with web development.
                            </li>
                            <li class="list-group-item">
                                5 GB Bandwidth
                            </li>
                        </ul>
                    </div>
                    <div class="mbr-section-btn text-center py-4 pb-5">
                        <a href="https://mobirise.co" class="btn btn-primary display-4">BUY NOW</a>
                    </div>
                </div>
            </div>

            

            <div class="plan col-12 mx-2 my-2 justify-content-center favorite col-lg-4">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        Premium
                    </h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">
                            $
                        </span>
                        <span class="price-figure mbr-fonts-style display-1">
                            90</span>
                        <small class="price-term mbr-fonts-style display-7">
                            per year
                        </small>
                    </div>
                </div>
                <div class="plan-body">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">
                                Mobirise is perfect for non-techies who are not familiar with web development.
                            </li>
                            <li class="list-group-item">
                                15 GB Bandwidth
                            </li>
                            <li class="list-group-item">
                                Free Domain
                            </li>
                            <li class="list-group-item">
                                Backup
                            </li>
                        </ul>
                    </div>
                    <div class="mbr-section-btn text-center py-4 pb-5">
                        <a href="https://mobirise.co" class="btn btn-primary display-4">BUY NOW</a>
                    </div>
                </div>
            </div>

            

        </div>
    </div>
</section>


@endsection