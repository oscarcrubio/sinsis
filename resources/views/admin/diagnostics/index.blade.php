@extends('admin.layout')
@section('title', Auth::user()->name.' | Panel de Administación SinSis')
@section('body')
  <!-- start overline icon section -->
  <section class="wow big-section fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                        <header class="main-admin-header position-fixed">
                            <a href={{ route('create-diagnostics') }} class="">+ Crear Diagnostico</a> 
                        </header>
                        <div class="position-relative overflow-hidden w-100">
                            <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">Diagnosticos</span>
                        </div>
                    </div>
                </div>
                    @if (@$diagnostics != null)
                <div class="row">
                    @foreach ($diagnostics as $diagnostics)      
                    <!-- start features box item -->
                    <div class="col-12 col-lg-3 col-md-6 md-margin-four-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                        <a href="youjizz.com">
                        <div class="bg-white border-color-extra-medium-gray border-all overline-icon-box overline-medium-gray text-center padding-eighteen-tb position-relative">
                        <div class="d-inline-block margin-20px-bottom"><i class="ti-bar-chart icon-large text-deep-pink"></i></div>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">{{$diagnostics++}}</div>
                            <p class="width-75 mx-auto">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                        </div>
                        </a>
                    </div>
                    
                    <!-- end features box item -->
                    @endforeach
                </div>
                @else
                <h2>Hoy no fio mañana sí</h2>
               @endif
            </div>
        </section>
        <!-- end overline icon section -->