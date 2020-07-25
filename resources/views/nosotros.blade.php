@extends('layout')
@section('title', 'Nosotros | SinSis')
@section('body')
    <!-- start page title section -->
    <section class="wow fadeIn cover-background background-position-top top-space" style="background-image:url('{{asset('images/nosotros/nosotrosoffice.jpg')}}');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                        <!-- start sub title -->
                        <span class="d-block text-white-2 opacity6 alt-font margin-5px-bottom">Desarrollando estrategias perfectas.</span>
                        <!-- end sub title -->
                        <!-- start page title -->
                        <h1 class="alt-font text-white-2 font-weight-600 mb-0">Nosostros</h1>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section --> 

        <!-- start accordions style 04 section -->
        <section class="wow fadeIn bg-light-gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                        <div class="position-relative overflow-hidden w-100">
                            <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">Quiénes Somos</span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <!-- start accordion -->
                        <div class="panel-group accordion-style2" id="accordion-main">
                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseOne">
                                        <div class="panel-title">
                                            <span class="alt-font font-weight-600 texto-amarillo tab-tag">01</span>
                                            <span class="text-extra-dark-gray sm-width-80 d-inline-block">Mision</span>
                                            <i class="fas fa-angle-up float-right text-extra-dark-gray "></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse show" data-parent="#accordion-main">
                                    <div class="panel-body"><p>Somos una empresa comprometida con nuestros clientes, generadora de ideas y soluciones empresariales de calidad.
                                    Entregamos toda nuestra experiencia y trabajo acorde con los principios de Amabilidad, Responsabilidad, Eficiencia e Innovación.</p>La calidez humana es prioridad en el desarrollo de la actividad diaria con nuestros clientes y aportar valor a sus vidas nos permite crear relaciones duraderas con ellos.</div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseTwo">
                                        <div class="panel-title">
                                            <span class="alt-font font-weight-600 texto-amarillo tab-tag">02</span>
                                            <span class="text-extra-dark-gray sm-width-80 d-inline-block">Vision</span>
                                            <i class="indicator fas fa-angle-down float-right text-extra-dark-gray "></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" data-parent="#accordion-main">
                                    <div class="panel-body">
                                    <p>Sinsis consultora, a través de un mejoramiento continuo de su actividad, se propone ser en el 2022 una empresa líder en servicios de consultoria empresarial.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseThree">
                                        <div class="panel-title">
                                            <span class="alt-font font-weight-600 texto-amarillo tab-tag">03</span>
                                            <span class="text-extra-dark-gray sm-width-80 d-inline-block">Objetivos</span>
                                            <i class="indicator fas fa-angle-down float-right text-extra-dark-gray "></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" data-parent="#accordion-main">
                                    <div class="panel-body">Alcanzar una solidez económica que permita generar una riqueza recíproca entre empresa, empleados y aliados, a través de la prestación de servicios de consultoria de calidad</div>
                                </div>
                            </div>
                            <!-- end tab content -->
                        </div>
                        <!-- end accordion -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end accordions style 04 section -->

        <!-- start information section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 wow fadeIn">
                        <div class="position-relative icon-with-paragraph">
                            <span class="texto-amarillo position-absolute left-0 top-0 alt-font special-char-extra-large d-none d-lg-block">*</span> 
                            <h5 class="font-weight-300 text-extra-dark-gray width-90 padding-nineteen-left lg-padding-twenty-left lg-width-100 md-no-padding-left sm-margin-five-bottom">Sinsis, Una empresa comprometida con brindarte el mejor servicio con la maxima velocidad.</h5>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 col-lg-5 offset-lg-1 offset-xl-0 col-md-6 wow fadeIn last-paragraph-no-margin" data-wow-delay="0.2s">
                        <p class="text-medium font-weight-300 width-70 line-height-26 lg-width-100">Para más información ponte en contacto con nosotros y permítenos ser parte de ese gran proceso de mejoramiento y optimización de tu empresa o negocio.</p>
                        <br>
                        <a href={{ route('contact') }} class="btn btn-small btn-dark-gray">Contactanos</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end information section -->
@endsection