@extends('admin.layout')
@section('title', 'Crear Proyecto | Panel de Administación SinSis')
@section('body')
<section class="wow fadeIn main-admin-container">
    <header class="main-admin-header position-fixed">
       <span>Nueva Propuesta</span>
    </header>
    <div class="container projects-container">        
        <div class="row">
            <div class="col-12 wow fadeIn">
                <form method="post" id="">
                    @csrf
                    <input type="hidden" name="project-id" value="{{ $project_id }}">
                    <label for="">Descripcion</label>
                    <textarea name="" cols="30" rows="10" id="proposal-description"></textarea>
                </form>
                    <div class="container-fluid">
                            <br />
                        <h3></h3>
                            <br /> 
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <h3 class="panel-title">Select Image</h3>
                            </div>
                            <div class="panel-body">
                            <form id="dropzoneForm" method="post"  class="dropzone" action="{{ route('create-upload') }}">
                                @csrf
                            </form><br>
                                <div>
                                    <button type="submit" id="button" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </div>
                            <br />
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection