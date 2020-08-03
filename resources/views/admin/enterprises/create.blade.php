@extends('admin.layout')
@section('title', 'Crear Proyecto | Panel de Administación SinSis')
@section('body')
<section class="wow fadeIn main-admin-container">
    <header class="main-admin-header position-fixed">
       <span>Nueva Empresa</span>
    </header>
    <div class="container projects-container">        
        <div class="row">
            <div class="col-12 wow fadeIn">
                <form action="{{ route('create-enterprise')}}" method="post" >
                @csrf
                    <label for="">Nombre de la empresa</label>
                    <input type="text" name="name" id="">
                    <label for="">Nombre corporativo</label>
                    <input type="text" name="business_name" id="">
                    <label for="">Dirección</label>
                    <input type="text" name="location" id="">
                    <label for="">encargado</label>
                   {{-- <select name="manager">
                    @foreach ($side_enterprises as $side_enterprise)
                        <option value="volvo">Volvo</option>
                    </select> --}}
                    <input type="text" name="manager" id="">
                    <input type="submit" name="button_1" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</section>
@endsection