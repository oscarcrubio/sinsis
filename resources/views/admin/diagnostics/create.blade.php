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
                <form action={{route( 'store-diagnostics' )}} method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <label for="">Descripcion</label>
                    <textarea name="texto" id="" cols="30" rows="10"></textarea>
                    <label for="">PDF</label>
                    <input type="file" name="file" id="">
                    <input type="hidden" name="project_id" value={{$project}}>
                    <input type="submit" name="button_1" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</section>
@endsection