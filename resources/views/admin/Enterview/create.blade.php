@extends('admin.layout')
@section('title', 'Crear Proyecto | Panel de Administación SinSis')
@section('body')
<section class="wow fadeIn main-admin-container">
    <header class="main-admin-header position-fixed">
       <span>Nueva Entrevista</span>
    </header>
    <div class="container projects-container">        
        <div class="row">
            <div class="col-12 wow fadeIn">
                <form action="{{route('create-enterview')}}" method="post">
                @csrf
                <input type="hidden" name="project" value={{ $project_id }}>
                @foreach($questions as $question)
                @if($question-> id == 6)
                <div id="{{$conta++}}">
                    <label value="{{ $question->id}} ">{{ $question->question}}</label>
                    <div class="box">
                        <input type="checkbox" name="{{ $question->id }}" id="si"><p class="si">Si</p>
                    </div>
                </div>
                @else
                <div class="{{$conta==7 || $conta==8 || $conta==9 ? 'd-none  pregunta-sec':''}}" id="{{$conta++}}">
                    <label value="{{ $question->id}} ">{{ $question->question}}</label>
                    <input type="text" name="{{$question->id}}" id="">
                </div>
                @endif
                @endforeach
                <input type="submit" name="button_1" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</section>
@endsection