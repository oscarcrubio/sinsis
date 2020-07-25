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
                <form action=".database.seeds.QuestionSeeder" method="post">
                @foreach($questions as $question)
                @if($question-> id == 6)
                <div id="{{$conta++}}">
                    <label value="{{ $question->id}} ">{{ $question->question}}</label>
                    <div>
                        <input data-id="" type="checkbox" name="" id="si" value="Si">Si
                    </div>
                </div>
                @else
                <div id="{{$conta++}}">
                    <label value="{{ $question->id}} ">{{ $question->question}}</label>
                    <input type="text" name="" id="">
                </div>
                @endif
                @endforeach
                </form>
                <input type="submit" name="button_1" value="Enviar">
            </div>
        </div>
    </div>
</section>
@endsection