<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesión | SinSis</title>
    @include('maincss')
</head>
<body style="overflow-Y: hidden;">
<section class="p-0 bg-extra-light-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 full-screen p-0 cover-background d-none d-lg-block" style="background-image:url('https://via.placeholder.com/1000');"></div>
            <div class="col-12 col-lg-6 full-screen bg-black p-0">
                <div class="position-relative full-screen">
                    <div class="slider-typography text-center sm-overflow-auto">
                        <div class="slider-text-middle-main">
                            <div class="slider-text-middle padding-three-all sm-padding-15px-all">
                                <div class="margin-nine-bottom md-margin-50px-bottom sm-margin-15px-bottom"><a href={{ route('home') }}><img src="images/logo-white.png" data-rjs="images/logo-white@2x.png" alt="Logo" /></a></div>
                                {{-- <h6 class="font-weight-300 text-white-2 margin-40px-bottom sm-margin-35px-bottom">We’re getting ready to launch</h6> --}}                                
                                <div class="bg-extra-dark-gray padding-eight-all border-radius-6 width-70 lg-width-80 sm-width-100 mx-auto sm-padding-30px-all">
                                    <h6 class="font-weight-300 text-white-2 margin-20px-bottom sm-margin-15px-bottom">Iniciar Sesion</h6>                                    
                                    <form id="login-form" action="{{ route('login') }}" method="POST" class="search-box2">                                        
                                        <div class="input-group add-on width-75 mx-auto md-width-100">
                                            <input name="email" id="email" class="" placeholder="Enter your email address" type="text">
                                            <input name="password" id="pass" class="" placeholder="Enter your password" type="password">                                            
                                        </div>
                                        <input type="submit" value="Ingresar" class="btn btn-primary">
                                        @csrf
                                    </form>
                                    <p class="text-medium width-70 mx-auto margin-40px-top sm-width-100 sm-margin-15px-top"><a href=""> ¿Olvidaste tu contraseña?</a></p>
                                    <p class="text-medium width-70 mx-auto sm-width-100 sm-margin-10px-top">¿No tienes cuenta? <a href="">Ponte en contacto con nosotros</a></p>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end countdown section -->
@extends('mainjs')
</body>
</html>