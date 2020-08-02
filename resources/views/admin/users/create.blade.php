@extends('admin.layout')
@section('title', 'Crear Proyecto | Panel de Administación SinSis')
@section('body')
<section class="wow fadeIn main-admin-container">
    <header class="main-admin-header position-fixed">
       <span>Nuevo Usuario</span>
    </header>
    <div class="container projects-container">        
        <div class="row">
            <div class="col-12 wow fadeIn">
                <form action="{{ route('create-user')}}" method="post" >
                @csrf
                    <label for="">Nombre</label>
                    <input type="text" name="name" id="">
                    <label for="">Correo electronico</label>
                    <input type="email" name="email" id="">
                    <label for="">Nivel de acceso</label>
                    <select name="accslvl">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <label for="">Cargo</label>
                    <input type="text" name="charge" id="">
                    <input type="submit" name="button_1" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</section>
@endsection