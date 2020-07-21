@extends('layout')
@section('title', 'Inicio | SinSis')
@section('body')
 <!-- start form style 02 section -->
 <section class="wow fadeIn bg-extra-dark-gray" id="obbo">
            <div class="container" >
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                        <div class="position-relative overflow-hidden w-100"><br><br><br>
                            <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase" id="sp1">formulario de contacto</span><br><br>
                                <div id="divu" >
                                    <span class="alt-fon">Cualquier duda o aclaración puede comunicarse con nosotros mediante este formulario. En la brevedad responderemos su mensaje.
                                    </span>
                                </div>
                        </div>
                    </div>
                </div>
                
                <form id="contact-form-2" action="javascript:void(0)" method="post" >
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 wow fadeIn text-center">
                            <div id="success-contact-form-2" class="mx-0"></div>
                            <input type="text" name="name" id="name" placeholder="Nombre*" class="input-border-bottom">
                            <input type="text" name="email" id="email" placeholder="Correo*" class="input-border-bottom">
                            <input type="text" id="subject" name="subject" placeholder="Asunto" class="input-border-bottom">
                            <textarea name="comment" id="comment" placeholder="Descripción" class="input-border-bottom"></textarea>
                            <button id="buron" type="submit" class="btn btn-small btn-deep-pink margin-30px-top sm-margin-three-top">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>     
        </section>
        <!-- end form style 02 section -->
@endsection