@extends('admin.layout')
@section('title', 'Crear Proyecto | Panel de Administación SinSis')
@section('body')
<!-- start list style 05 section -->

<section class="enterview wow fadeIn bg-extra-dark-gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                        <div class="position-relative overflow-hidden w-100">
                            <span class="titles text-small text-outside-line-full alt-font font-weight-600 text-uppercase">Entrevistas</span>
                            <header class="main-admin-header position-fixed">
                                <a href={{ route('create-enterview') }} class="">+ Crear Nueva Entrevista</a>
                            </header>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-md-10">
                    @if(@$enterview != null)
                        <ul class="list-style-9 margin-twelve-left">
                            @foreach($enterview as $enterview)
                            <li class="text-uppercase"><span class="titles d-block text-extra-small text-white-2">Entrevista </span><a class="ver" href="index.html">Ver más</a></li>
                            @endforeach  
                        </ul>
                        @else
                        <h2>TU PUTA MADRE</h2>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- end list style 05 section -->