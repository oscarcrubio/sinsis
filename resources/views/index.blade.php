@extends('layout')
@section('title', 'Inicio | SinSis')
@section('body')
 <!-- start parallax hero section -->
 <section id="main" class="wow fadeIn p-0 parallax sm-background-image-center" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('images/home/office2.jpg') }})">
    <div class="opacity-extra-medium bg-black"></div>
    <div class="container-fluid position-relative full-screen">
        <div class="slider-typography">
            <div class="slider-text-middle-main">
                <div class="slider-text-bottom">
                    <div class="col-12 col-xl-6 col-lg-7 float-right bg-deep-pink-opacity padding-six-lr lg-padding-seven-lr padding-five-tb sm-padding-30px-all last-paragraph-no-margin">
                    <!--<div class="linea box-separator-line width-180px bg-white lg-width-120px md-width-90px d-none d-lg-block"></div>-->
                        <h1 class="first font-weight-600 alt-font text-white-2 width-95 md-width-100">SIN SIS</h1>
                        <p class="first text-large font-weight-300 text-white-2 width-75 lg-width-85 md-width-95 sm-width-100 d-none d-md-block">Somos actualmente una de las mejores empresas enfocadas en la consultoria, nuestros clientes nos avalan, ven y conoce un poco mas</p>
                        <a href="https://1.envato.market/g7jrr" target="_blank" class="btn btn-medium btn-white margin-40px-top text-link-deep-pink sm-margin-10px-top">Nosotros</a>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>
<!-- start section -->
<section class="back wow fadeIn">
    <div class="container"> 
        <div class="row align-items-center">
            <div class="col-12 col-xl-3 col-md-6 text-center sm-margin-15px-bottom wow fadeIn">
                <img src="images/image-1.jpg" alt="" class="w-100">
            </div>
            <div class="col-12 col-xl-3 col-md-6 text-center wow fadeIn" data-wow-delay="0.2s">
                <img src="images/image-2.jpg" alt="" class="w-100">
            </div>
            <div class="col-12 col-xl-6 p-0 lg-margin-five-top text-center text-lg-left sm-no-margin-top wow fadeIn" data-wow-delay="0.4s">
                <div class="padding-twelve-lr lg-padding-15px-lr sm-padding-five-lr sm-padding-ten-top w-100">
                    <h4 class="font-weight-600 alt-font text-extra-dark-gray letter-spacing-minus-1">Calidad y facilidad</h4>
                    <p class="text-extra-large alt-font font-weight-400">¿Por que elegir SIN SIS?</p>
                    <p>Somos la unica empresa que se enfoca en exponer tu talento humano para asi potencializar su desempeño y maximizar el rendimiento de la empresa</p>
                    <a href="about-us-modern.html" class="btn btn-small btn-dark-gray">Contacto</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!--<section class="parallax" data-stellar-background-ratio="0" style="background-image:url('images/parallax-bg6.jpg');">
    <div class="opacity-full bg-extra-dark-gray"></div>
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-9 col-lg-10 text-center wow fadeIn last-paragraph-no-margin">
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=nrJtHemSPW4"><img src="images/icon-play-white.png" class="width-10 sm-width-50px margin-30px-bottom" alt=""/></a>
                <h4 class="alt-font text-white-2">Beautiful and easy to use UI, professional animations and drag & drop feature</h4>
                <p class="width-75 mx-auto text-medium-gray lg-width-90 sm-width-100 sm-margin-30px-bottom">With years of experience in the website design and development industry ThemeZaa pride ourselves on creating unique, creative and quality designs that are developed upon the latest modern coding and developing techniques, which are then built using the most up to date, structured coding framework so that your development team can take it to the next level with ease.</p>
                <a href="about-us-simple.html" class="btn btn-white btn-small text-extra-small border-radius-4 margin-45px-top sm-no-margin-top"><i class="fas fa-play-circle icon-very-small margin-5px-right ml-0" aria-hidden="true"></i> About Company</a>
            </div>
        </div>
    </div>
</section>-->
<!-- end video section -->
<!-- start parallax feature box -->
<section class="p-0 wow fadeIn bg-light-gray">
    <div class="container-fluid">
        <div class="row"> 
            <div class="col-12 col-lg-6 wow fadeInLeft padding-four-all md-padding-eight-all md-padding-15px-lr sm-padding-50px-tb">
                <div class="row m-0">
                    <div class="col-12 col-xl-10 margin-six-bottom lg-margin-six-bottom md-margin-30px-bottom sm-no-margin-bottom">
                        <h4 class="alt-font text-extra-dark-gray font-weight-600 text-center text-lg-left md-width-70 mx-auto mx-lg-0 sm-width-100 sm-margin-30px-bottom">Enfocados en facilitarte la vida</h4>
                    </div>
                    <!-- start feature box item -->
                    <div class="col-12 col-xl-6 col-lg-12 col-md-6 margin-six-bottom md-margin-30px-bottom last-paragraph-no-margin">
                        <div class="feature-box-5 position-relative">
                            <i class="icon-desktop text-medium-gray icon-medium"></i>
                            <div class="feature-content">
                                <div class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600">Tus datos actualizados en todo momento</div>
                                <p class="width-95 sm-width-100">Cada vez que realices una nueva encuesta y si está se repite simplemente se actualizará para ti.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-xl-6 col-lg-12 col-md-6 margin-six-bottom md-margin-30px-bottom last-paragraph-no-margin">
                        <div class="feature-box-5 position-relative">
                            <i class="icon-book-open text-medium-gray icon-medium"></i>
                            <div class="feature-content">
                                <div class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600">Facilidad y comodidad</div>
                                <p class="width-95 sm-width-100">Estamos para servirte y ayudarte por lo que hacemos de este sitio visualmente comodo y facil de usar.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-xl-6 col-lg-12 col-md-6 lg-margin-six-bottom md-no-margin-bottom sm-margin-30px-bottom last-paragraph-no-margin">
                        <div class="feature-box-5 position-relative">
                            <i class="icon-wallet text-medium-gray icon-medium"></i>
                            <div class="feature-content">
                                <div class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600">Economico</div>
                                <p class="width-95 sm-width-100">Logramos brindarte un servicio gratuito para asi ser el sitio preferido de las personas.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-xl-6 col-lg-12 col-md-6 last-paragraph-no-margin">
                        <div class="feature-box-5 position-relative ">
                            <i class="icon-camera text-medium-gray icon-medium"></i>
                            <div class="feature-content">
                                <div class="text-extra-dark-gray margin-10px-bottom alt-font font-weight-600">Sin fotos</div>
                                <p class="width-95 sm-width-100">Todos los registros son seguros puesto que jamas pediremos una fotografia tuya.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->                    
                </div>
            </div> 
            <div class="col-12 col-lg-6 cover-background md-height-400px wow fadeInRight" style="background-image:url({{ asset('images/home/office1.jpg') }});"></div>
        </div>
    </div>
</section>
<!-- end parallax feature box -->   
@endsection