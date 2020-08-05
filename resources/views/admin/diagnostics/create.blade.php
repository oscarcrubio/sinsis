@extends('admin.layout')
@section('title', 'Crear Proyecto | Panel de Administación SinSis')
@section('body')
<section class="wow fadeIn main-admin-container">
    <header class="main-admin-header position-fixed">
       <span>Nuevo Diagnostico</span>
    </header>
    <div class="container projects-container">        
        <div class="row">
            <div class="col-12 wow fadeIn">
                <form action="" method="post">
                    <label for="">Descripcion</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    <label for="">PDF</label>
                    <input type="file" name="" id="">
                    <label for="">Fecha</label>
                    <input type="text" name="" id="" placeholder='{{$mytime}}' disabled>
                    <!--<label for="">Descripcion:</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>-->
                    <!--<label for="">Empresa</label>-->
                </form>
                <input type="submit" name="button_1" value="Enviar">
            </div>
        </div>
    </div>
</section>
@endsection