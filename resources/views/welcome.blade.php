@extends('layouts.app')

@section('content')
<!-- <div class="section-space"></div> -->
<div class="bar-long"></div>
<div class="cd-section" id="headers">

    <div class="header-2">
        <nav class="navbar navbar-transparent navbar-absolute navbar-expand-lg">

            @if(Config::get('languages')[App::getLocale()]['display'] == "English")
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-translate">
                    <a class="navbar-brand" href="/">
                        <div class="logo-image">
                            <img src="{{asset('img/logo/logo-aldea-esmeralda-white.png')}} " class="img-fluid">
                        </div>
                    </a>
                    <button type="button" class="ml-auto navbar-toggler" data-toggle="collapse" data-target="#navigation-example2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navigation-example2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{route('landing')}}" class="nav-link">
                                {{__('messages.inicio')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#amenidades" class="nav-link">
                                {{__('messages.amenidades')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#contactanos" class="nav-link">
                                {{__('messages.contactanos')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://cotizador.landrada.mx/" target="_blank" class="nav-link">
                                {{__('messages.cotizar')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://landrada.mx/pagos" class="nav-link">
                                {{__('messages.pago')}}
                            </a>
                        </li>
                        <li class="button-container nav-item iframe-extern">
                            <a href="{{route('lotes')}}" class="btn  btn-primary   btn-round btn-block">{{__('messages.verlotes')}}
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('img/') }}/{{Config::get('languages')[App::getLocale()]['img']}}" alt="">

                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="right: 0!important;">

                                @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                <a class="dropdown-item mr-1" href="{{ route('lang.switch', $lang) }}">
                                    <img class="ml-2" src="{{ asset('img/') }}/{{$language['img']}}" alt="Idioma">
                                    <span class="mr-2"></span>
                                    {{__('messages.es')}}
                                </a>
                                @endif
                                @endforeach

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            @else
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-translate">
                    <a class="navbar-brand" href="/">
                        <div class="logo-image">
                            <img src="{{asset('img/logo/logo-aldea-esmeralda-white.png')}} " class="img-fluid logo-aldea">
                        </div>
                    </a>
                    <button type="button" class="ml-auto navbar-toggler" data-toggle="collapse" data-target="#navigation-example2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navigation-example2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{route('landing')}}" class="nav-link">
                                {{__('messages.inicio')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#amenidades" class="nav-link">
                                {{__('messages.amenidades')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#contactanos" class="nav-link">
                                {{__('messages.contactanos')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://cotizador.landrada.mx/" target="_blank" class="nav-link">
                                {{__('messages.cotizar')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://landrada.mx/pagos" class="nav-link">
                                {{__('messages.pago')}}
                            </a>
                        </li>
                        <li class="button-container nav-item iframe-extern">
                            <a href="{{route('lotes')}}" class="btn  btn-primary   btn-round btn-block">{{__('messages.verlotes')}}
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('img/') }}/{{Config::get('languages')[App::getLocale()]['img']}}" alt="">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                <a class="dropdown-item mr-1" href="{{ route('lang.switch', $lang) }}">
                                    
                                    <img src="{{ asset('img/') }}/{{$language['img']}}" alt="Idioma">
                                    <span class="mr-2"></span>
                                    {{__('messages.en')}}
                                </a>
                                @endif
                                @endforeach

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            @endif

        </nav>
        
        <div class="page-header header-filter" style="background-image: url('img/aldea-esmeralda.jpg');">
            <div class="container">
                <div class="row">

                    @include('includes.form-slider')
                    @if(session('status'))
                    <span class="alert alert-success w-50 text-center mx-auto" role="alert">
                        <strong>{{ session('status') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </span>
                    @endif
                    @if(session('errors'))
                        @error('isAlready')
                        <span class="alert alert-danger w-50 text-center mx-auto" role="alert">
                            <strong>{{ session('errors')->first('isAlready') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </span>
                        @enderror
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cd-section" id="features">
    <div class="container">
        <!--     *********     FEATURES 1      *********      -->
        <div class="features-1">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="title">{{__('messages.titulo')}}</h2>
                    <h5 class="description">{{__('messages.descripcion')}}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="info">
                        <div class="icon icon-info">
                            <img class="img-fluid" src="{{asset('img/iconos/inversion-segura.svg')}}" alt="logo-amaia" width="120px">
                        </div>
                        <h4 class="info-title">{{__('messages.infotitulo')}}</h4>
                        <p>{{__('messages.infosubtitulo')}}</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info">
                        <div class="icon icon-info">
                            <img class="img-fluid" src="{{asset('img/iconos/entrada-distintiva.svg')}}" alt="logo-amaia" width="120px">
                        </div>
                        <h4 class="info-title">{{__('messages.infotitulo2')}}</h4>
                        <p>{{__('messages.infosubtitulo2')}}</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info">
                        <div class="icon icon-info">
                            <img class="img-fluid" src="{{asset('img/iconos/uso-de-suelo-residencial.svg')}}" alt="logo-amaia" width="120px">
                        </div>
                        <h4 class="info-title">{{__('messages.infotitulo3')}}</h4>
                        <p>{{__('messages.infosubtitulo3')}}</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info">
                        <div class="icon icon-info">
                            <img class="img-fluid" src="{{asset('img/iconos/mediano-plazo.svg')}}" alt="logo-amaia" width="120px">
                        </div>
                        <h4 class="info-title">{{__('messages.infotitulo4')}}</h4>
                        <p>{{__('messages.infosubtitulo4')}}</p>
                    </div>
                </div>
            </div>
        </div>
        <!--     *********    END FEATURES 1      *********      -->
    </div>
    <!-- -------- START HEADER 5 w/ text and illustration ------- -->
    <div class="cd-section pt-4 pb-4">
        <div class="container">
            <div class="row center-section">
                <div class="col-lg-4 my-auto">
                    <h2 class="title mb-4">{{__('messages.conocenos')}}</h2>
                    <p class="lead">{{__('messages.conocenossub')}}</p>
                    <div class="buttons">
                        @if(Config::get('languages')[App::getLocale()]['display'] == "English")
                        <a href="{{asset('docs/BROCHURE_BY_LANDRADA_INGLES.pdf')}}" download target="_blank" class="btn btn-primary mt-4">{{__('messages.verbrochure')}}</a>
                        @else
                        <a href="{{asset('docs/BROCHURE_BY_LANDRADA_ES.pdf')}}" download target="_blank" class="btn btn-primary mt-4">{{__('messages.verbrochure')}}</a>
                        @endif
                    </div>
                </div>
                <div class="col-md-8 ml-auto">
                    <div class="card">
                        <div class="iframe-container">
                            <iframe height="390" width="100%" src="https://www.youtube.com/embed/a2bGfV3lBxw" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -------- END HEADER 5 w/ text and illustration ------- -->

    <!--     *********     FEATURES 5      *********      -->
    <div class="features-5" style="background-image: url('img/amenidades-aldea-esmeralda.jpg')" id="amenidades">
        <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">{{__('messages.amenidades')}}</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 wrapper-amenities">
                    <!-- <div class="row d-flex justify-content-center d-lg-none sm-multiversidad">
                        <div class="col-sm-4">
                            <div class="info">
                                <div class="icon">
                                    <img class="img-fluid" src="{{asset('img/amenidades/canal-de-nado.svg')}}" alt="logo-amaia" width="120px">
                                </div>
                                <h4 class="info-title">{{__('messages.icontitulo')}}</h4>
                                <p>{{__('messages.iconsubtitulo')}}</p>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="info">
                                <div class="icon">
                                    <img class="img-fluid" src="{{asset('img/amenidades/parque.svg')}}" alt="logo-amaia" width="120px">
                                </div>
                                <h4 class="info-title">{{__('messages.icontitulo2')}}</h4>
                                <p>{{__('messages.iconsubtitulo2')}}</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="info">
                                <div class="icon">
                                    <img class="img-fluid" src="{{asset('img/amenidades/terraza-casa-club.svg')}}" alt="logo-amaia" width="120px">
                                </div>
                                <h4 class="info-title">{{__('messages.icontitulo3')}}</h4>
                                <p>{{__('messages.iconsubtitulo3')}}</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="info">
                                <div class="icon">
                                    <img class="img-fluid" src="{{asset('img/amenidades/caseta-de-seguridad.svg')}}" alt="logo-amaia" width="120px">
                                </div>
                                <h4 class="info-title">{{__('messages.icontitulo4')}}</h4>
                                <p>{{__('messages.iconsubtitulo4')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="info">
                                <div class="icon">
                                    <img class="img-fluid" src="{{asset('img/amenidades/estacionamiento.svg')}}" alt="logo-amaia" width="120px">
                                </div>
                                <h4 class="info-title">{{__('messages.icontitulo5')}}</h4>
                                <p>{{__('messages.iconsubtitulo5')}}</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="info">
                                <div class="icon">
                                    <img class="img-fluid" src="{{asset('img/amenidades/areas-multiples.svg')}}" alt="logo-amaia" width="120px">
                                </div>
                                <h4 class="info-title">{{__('messages.icontitulo6')}}</h4>
                                <p>{{__('messages.iconsubtitulo6')}}</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="info">
                            <div class="icon">
                            <img class="img-fluid" src="{{asset('img/amenidades/canal-de-nado.svg')}}" alt="logo-amaia" width="120px">
                        </div>
                        <h4 class="info-title">{{__('messages.icontitulo')}}</h4>
                        <p>{{__('messages.iconsubtitulo')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-12 col-lg-3 d-none d-lg-block d-lg-flex icon-multiversidad">
                    <div class="info">
                        <div class="icon">
                            <img class="img-fluid" src="{{asset('img/amenidades/parque.svg')}}" alt="logo-amaia" width="120px">
                        </div>
                        <h4 class="info-title">{{__('messages.icontitulo')}}</h4>
                        <p>{{__('messages.iconsubtitulo')}}</p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!--     *********    END FEATURES 5      *********      -->
</div>

<div class="cd-section pt-4 pb-4">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col">
                <h2 class="title simulador">{{__('messages.simulador')}}</h2>
            </div>
        </div>
        <div class="row center-section">

            <div class="col-md-6 my-auto ">
                <div class="card">
                    <!-- <div class="card-header p-0 bg-primary">
                                <h3 class="title text-center">Simulador de inversión</h3>
                            </div> -->

                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-12 text-center">
                                <h5 class="">{{__('messages.preciodes')}}</h5>
                                <input class="" type="radio" name="locationProperty" id="locationProperty1" value="425000" checked hidden />
                                <h2 class="" style="color: #34504b; font-size: 30px" id="price">
                                    Seleccione Ubicación
                                </h2>
                                <input type="number" id="total-price" hidden />
                            </div>
                        </div>
                        <div class="row rq-enganche">
                            <div class="col-6 d-flex flex-row">
                                <h3 class=" enganche" style="color: #34504b;">
                                    {{__('messages.enganche')}}
                                </h3>
                                <h3 class="enganche procentaje" style="color: #34504b;" id="percentTitle">
                                    20%
                                </h3>
                            </div>
                            <div class="col-6">
                                <h3 class="enganche" style="color: #34504b;" id="priceEngageTitle"> </h3>
                                <input class="enganche" type="text" name="valuepercentTitle" id="valuepercentTitle" hidden />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 rq-text-start rq-mb-1">
                                <label class="ml-5 mr-5 rq-subtitle" style="color: gray; font-size: 15px;" for="formControlRange">{{__('messages.porcentajeneganche')}}</label>
                            </div>
                            <div class="col-12 rq-p-1">
                                <input class="slider" type="range" class="rq-form-control-range mr-5 ml-5" id="percentageControlRange" min="20" max="90" value="20" step="1" />
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-12">
                                <ul class="rq-pill-options">
                                    <li class="rq-option">
                                        <input type="radio" name="type-pay" id="type-pay-1" value="12" checked /><label for="type-pay-1" class="option-label">12</label>
                                    </li>
                                    <li class="rq-option">
                                        <input type="radio" name="type-pay" id="type-pay-2" value="18" /><label for="type-pay-2" class="option-label">18</label>
                                    </li>
                                    <li class="rq-option">
                                        <input type="radio" name="type-pay" id="type-pay-3" value="24" /><label for="type-pay-3" class="option-label">24</label>
                                    </li>
                                    <li class="rq-option">
                                        <input type="radio" name="type-pay" id="type-pay-4" value="36" /><label for="type-pay-4" class="option-label">36</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col col-md-6">
                                <h3 class="mensualidad rq-ml-1">{{__('messages.mensualidad')}}</h3>
                            </div>
                            <div class="col col-md-6">
                                <h3 class="rq-ml-1" style="color: #92300E; font-size: 25px" id="monthlyPay"> </h3>
                            </div>
                            <input type="text" name="valuemonthlyPay" id="valuemonthlyPay" hidden />
                        </div>
                        <div class="row de-flex justify-content-center flex-column mt-1">
                            <div class="rq-mt-2 ">
                                <ul class="rq-pill-options">
                                    <li class="rq-option">
                                        <input type="radio" name="loan-type" id="loan-type-1" value="total" />
                                        <label for="loan-type-1" class="option-label btn-secundary">{{__('messages.contado')}}</label>
                                    </li>
                                    <li class="rq-option">
                                        <input type="radio" name="loan-type" id="loan-type-2" value="months" />
                                        <label for="loan-type-2" class="option-label btn-secundary">{{__('messages.msi')}}</label>
                                    </li>
                                </ul>

                            </div>
                            <div class="mt-1">
                                <p class="text-center mb-0">{{__('messages.ejemplo')}}</p>
                            </div>
                            <!-- <div class=" rq-d-flex rq-justify-content-center ">
                                    <button type="button" class="rq-btn rq-btn-primary border-radius rq-mt-2">Me interesa</button>
                                </div> -->
                            <div class="card rq-mt-2" id="pricesCard" style="background-color: rgba(229, 197, 173, 0.8); display: none; z-index: 999;">
                                <div class="col-12 ">
                                    <button type="button" id="buttonClose" class="btn btn-danger btn-small border-radius text-white rq-ml-2 rq-mt-1" style="font-size: 18px;">X</button>
                                </div>
                                <div class="card-body text-center">
                                    <h4 class="text-center" style="color: #fff; font-size: 18px">
                                        Inversión inicial
                                    </h4>

                                    <h4 class="text-center" id="initialPay" style="color: #34504b; font-size: 30px"></h4>

                                    <span class="text-center" style="font-size: 12px; font-weight: 800; color: #fff">Apertura</span>

                                    <h4 class="text-center" id="apartedTitle" style="color: #34504b; font-size: 30px">
                                        + $ 8,900.00 MXN *
                                    </h4>

                                    <span class="text-center" style="font-size: 15px; font-weight: 800; color: #fff">TOTAL</span>

                                    <h4 class="text-center pb-2" id="totalTitle" style="color: #34504b; font-size: 30px"></h4>

                                    <h4 class="text-center" style="color: #fff; font-size: 18px" strong id="numberOFmonths"></h4>

                                    <h4 class="text-center pb-3" id="totalMonthlyBill" style="color: #34504b; font-size: 30px"></h4>

                                    <div class="rq-d-flex rq-justify-content-center ">
                                        <a href="https://landrada.mx/cotizador/" class="btn btn-primary border-radius rq-mt-2" id="buttonToInterest_old" style="color: white;  font-size: 25px;border-radius: 3rem;" s>Me interesa</a>
                                    </div>

                                    <p class="text-center rq-pt-1 rq-mb-1 rq-pl-1 rq-pr-1 rq-subtitle-top" style="font-size: 12px">
                                        * Los calculos son una simulación de mensualidades con cifras
                                        aproximadas
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ml-auto">
                <div class="card">
                    <div class="iframe-container">
                        <img class="img-fluid card-img-bottom" src="{{asset('img/amenidades-aldea-esmeralda.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="py-6 bg-gradient-dark position-relative overflow-hidden">
    <img style="color: #B9806A;" src="{{ asset('img/pattern-lines.svg') }} " class="position-absolute top-0 d-lg-block d-none opacity-6 w-100 h-100" alt="pattern">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 mx-auto text-center">
                <h2 class="title">{{__('messages.rodeado')}}</h2>
                <!-- <p class="lead text-white">The time is now for it to be okay to be great. People in this world should.</p> -->
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-lg mt-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <a class="d-block blur-shadow-image">
                            <img class="img-fluid" src="{{asset('img/anclas/playas-yucatecas.jpg')}}">
                        </a>
                    </div>
                    <div class="card-body">
                        <h4>{{__('messages.nearbyPlaceTitle1')}}</h4>
                        <p>
                            {{__('messages.nearbyPlaceSubTitle1')}}
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-lg mt-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <a class="d-block blur-shadow-image">
                            <img class="img-fluid" src="{{asset('img/anclas/merida.jpg')}}">
                        </a>
                    </div>
                    <div class="card-body">
                        <h4>{{__('messages.nearbyPlaceTitle2')}}</h4>
                        <p>
                            {{__('messages.nearbyPlaceSubTitle2')}}
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-lg mt-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <a class="d-block blur-shadow-image">
                            <img class="img-fluid" src="{{asset('img/anclas/ecoturismo.jpg')}}">
                        </a>
                    </div>
                    <div class="card-body">
                        <h4>{{__('messages.nearbyPlaceTitle3')}}</h4>
                        <p>
                            {{__('messages.nearbyPlaceSubTitle3')}}
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-lg mt-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <a class="d-block blur-shadow-image">
                            <img class="img-fluid" src="{{asset('img/anclas/mina-de-oro.jpg')}}">
                        </a>
                    </div>
                    <div class="card-body">
                        <h4>{{__('messages.nearbyPlaceTitle4')}}</h4>
                        <p>
                            {{__('messages.nearbyPlaceSubTitle4')}}
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-lg mt-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <a class="d-block blur-shadow-image">
                            <img class="img-fluid" src="{{asset('img/anclas/gastronomia.jpg')}}">
                        </a>
                    </div>
                    <div class="card-body">
                        <h4>{{__('messages.nearbyPlaceTitle5')}}</h4>
                        <p>
                            {{__('messages.nearbyPlaceSubTitle5')}}
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-lg mt-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <a class="d-block blur-shadow-image">
                            <img class="img-fluid" src="{{asset('img/anclas/reserva-dzilam-bravo.jpg')}}">
                        </a>
                    </div>
                    <div class="card-body">
                        <h4>{{__('messages.nearbyPlaceTitle6')}}</h4>
                        <p>
                            {{__('messages.nearbyPlaceSubTitle6')}}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- -------- START PRE-FOOTER 8 w/ TEXT, BG IMAGE AND 2 BUTTONS ------- -->
<section class="my-10 py-5 bg-gradient-white position-relative" style="">
    <span class="mask bg-gradient-dark opacity-8"></span>
    <div class="container position-relative z-index-2">
        <div class="row justify-content-between">
            <div class="col-12 col-md-9 m-auto">
                <h3 class="text-black mb-lg-0 mb-5">
                    {{__('messages.ctaLegend')}}
                </h3>
            </div>
            <div class="col-12 col-md-3 m-auto d-flex justify-content-center">
                <div class="row text-center">
                    <div class="ps-sm-0 ms-auto">
                        <a href="https://api.whatsapp.com/send?phone=5219984011444&text=Quiero conocer más sobre las oportunidades de inversión🌱" class="btn btn-secondary btn-round mb-0 ms-lg-3 ms-sm-2 mb-sm-0 mb-2 me-auto w-100 d-block">{{__('messages.contasesor')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- -------- END PRE-FOOTER 8 w/ TEXT, BG IMAGE AND 2 BUTTONS ------- -->

<div class="cd-section" id="contactanos">
    <!--     *********    CONTACT US 1     *********      -->
    <div class="contactus-1 section-image" style="background-image: url('img/footer-aldea-esmeralda.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2 class="title">{{__('messages.contactanos')}}</h2>
                    <h5 class="description">{{__('messages.footerdesc')}}</h5>
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">pin_drop</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">{{__('messages.sede')}}</h4>
                            <p> SM15 M2 L8 Farallon, Av. Tulum Y Acanceh,
                                <br> {{__('messages.zip')}} 77505, Cancún,
                                <br> Quintana Roo , México.
                            </p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">phone</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">{{__('messages.llamanos')}}</h4>
                            <p> info@landrada.mx
                                <br> +52 1 998 401 1444
                                <br> {{__('messages.horario')}}, 9:00-18:00 h
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 ml-auto">
                    <div class="card card-contact">
                        <form method="post" role="form" action="{{ route('leadtel') }}">
                            @csrf
                            <div class="card-header card-header-raised card-header-primary text-center">
                                <h4 class="card-title">{{__('messages.contactanos')}}</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating is-empty">
                                            <label class="bmd-label-floating">{{__('messages.nombre')}}</label>
                                            <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror">
                                            <span class="material-input"></span>
                                            @error('name')
                                            <span class="alert alert-danger alert-dismissible fade show invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating is-empty">
                                            <label class="bmd-label-floating">{{__('messages.apellido')}}</label>
                                            <input type="text" name="lastname" value="{{old('lastname')}}" class="form-control @error('lastname') is-invalid @enderror">
                                            <span class="material-input"></span>
                                            @error('lastname')
                                            <span class="alert alert-danger alert-dismissible fade show invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group label-floating is-empty">
                                    <label class="bmd-label-floating">{{__('messages.correo')}}</label>
                                    <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror">
                                    <span class="material-input"></span>
                                    @error('email')
                                    <span class="alert alert-danger alert-dismissible fade show invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group label-floating is-empty">
                                    <label for="exampleMessage1" class="bmd-label-floating">{{__('messages.phone')}}</label>
                                    <input type="tel" name="phone" value="{{old('phone')}}" class="form-control @error('phone') is-invalid @enderror">
                                    <span class="material-input"></span>
                                    @error('phone')
                                    <span class="alert alert-danger alert-dismissible fade show invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="card-footer justify-content-center">

                                <input type="submit" class="btn btn-primary pull-right" value="{{__('messages.contactar')}}">
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            @if(session('statusContact'))
                                <span class="alert alert-success" role="alert">
                                    <strong>{{ session('statusContact') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </span>
                            @endif
                            @if(session('errors'))
                                @error('errorContact')
                                <div class="w100">
                                    <span class="alert alert-danger" role="alert">
                                        <strong>{{ session('errors')->first('errorContact') }}</strong>
                                        <button type="button" class="close text-black" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </span>
                                </div>
                                @enderror
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--     *********    END CONTACT US 1      *********      -->
</div>

@endsection