@extends('admin.layout')
@section('title', Auth::user()->name.' | Panel de Administación SinSis')
@section('body')
  <!-- start overline icon section -->
  <section class="wow fadeIn main-admin-container">
    <header class="main-admin-header position-fixed">
        <a href={{  route('create-proposals',$project->id) }} class="">+ Creat una nueva Propuesta</a> Propuestas encontradas: {{ count($proposals) }}
     </header>    
        <div class="container projects-container">           
                @if (@$proposals != null)                
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
                @foreach ($proposals as $proposal)      
                <!-- start features box item -->
                <tr>
                    <td>{{ $proposal->description }}</td>
                    <td>{{ 'Files '.$project->name.'.zip'}}&nbsp;&nbsp;<strong>{{ '('.count($proposal->files).') Archivos' }}</strong></td>
                    <td><a title="Descargar" href="{{ route('create-zip-proposal',[$project->id,$proposal->id,'download'=>'true']) }}" class="btn text-center btn-primary rounded"><i class="fas fa-download"></i></a>&nbsp;<a title="Eliminar" href="" class="btn text-center btn-danger rounded"><i class="fas fa-trash-alt"></i></a></td>
                    <td class="text-center">{{ date_format($proposal->created_at,'d-m-Y') }}</td>
                </tr>
                <!-- end features box item -->
                @endforeach
            </table>
            @else
            <h2>Hoy no fio mañana sí</h2>
            @endif
        </div>
    </section>
<!-- end overline icon section -->
@endsection