@extends('admin.layout')
@section('title', Auth::user()->name.' | Panel de Administación SinSis')
@section('body')
  <!-- start overline icon section -->  
  <section class="wow fadeIn main-admin-container">
    <header class="main-admin-header position-fixed">
        <a href={{  route('create-diagnostics',$project->id) }} class="">+ Creat una nueva Propuesta</a> Propuestas encontradas: {{ count($diagnostics) }}
     </header>    
        <div class="container projects-container">
                @if (count($diagnostics) > 0)                
            <table class="table table-striped">
                <thead class="thead">
                    <th scope="col">
                        Descripcion
                    </th>
                    <th scope="col">
                        Archivos
                    </th>
                    <th scope="col">
                        Acciones
                    </th>
                    <th scope="col">
                        Fecha de creacion
                    </th>
                </thead>
                @foreach ($diagnostics as $diagnostic)      
                <!-- start features box item -->
                <tr>
                    <td>{{ $diagnostic->description }}</td>
                    <td>{{ $diagnostic->pdf_file }}</td>
                    <td><a title="Descargar" href="" class="btn text-center btn-primary rounded"><i class="fas fa-download"></i></a>&nbsp;<a title="Eliminar" href="" class="btn text-center btn-danger rounded"><i class="fas fa-trash-alt"></i></a></td>
                    <td class="text-center">{{ date_format($diagnostic->created_at,'d-m-Y') }}</td>
                </tr>
                <!-- end features box item -->
                @endforeach
            </table>
            @else
            <div class="text-center">
                <h2><i class="far fa-frown"></i></h2>
                <h2>No se han encontrado diagnosticos.</h2>
                <span>Puedes crear uno nuevo haciendo click en el boton de arriba.</span>
            </div>
            @endif
        </div>
    </section>
<!-- end overline icon section -->
@endsection