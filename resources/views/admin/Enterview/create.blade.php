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
                    <label value="{{ $question->id }}">{{ $question->question}} for=""></label>
                @endforeach
                    <input type="text" name="" id="">
                    <label for="">2.-Nombre de la empresa</label>
                    <input type="text" name="" id="">
                    <label for="">3.-Fecha</label>
                    <input type="text" name="" id="">
                    <label for="">4.-Direccion</label>
                    <input type="text" name="" id="">
                    <label for="">5.-Nombre completo de la persona entrevistada</label>
                    <input type="text" name="" id="">
                    <label for="">6.-Telefono</label>
                    <input type="text" name="" id="">
                    <label for="">7.-Correo electronico</label>
                    <input type="text" name="" id="">
                    <label for="">8.-Puesto</label>
                    <input type="text" name="" id="">
                    <label for="">9.-¿Según su criterio cuáles son los problemas más revelantes que deberían ser resueltos de manera inmediata?</label>
                    <input type="text" name="" id="">
                    <label for="">10.-¿Cuenta con documentación que describa la organización de la empresa?</label>
                    <input type="text" name="" id="">
                    <label for="">En caso de que su respuesta sea si</label>
                    <!--<label for="">¿Cuales documentos son?</label>
                    <input type="text" name="" id="">
                    <label for="">¿Los empleados conocen estos documentos?</label>
                    <input type="text" name="" id="">
                    <label for="">¿Los empleados tienen acceso a estos documentos?</label>
                    <input type="text" name="" id="">-->
                    <label for="">11.-¿Cada cuánto aplican herramientas para evaluar el ambiente de trabajo?</label>
                    <input type="text" name="" id="">
                    <label for="">12.-¿Cuál es la frecuencia con la que los empleados se capacitan?</label>
                    <input type="text" name="" id="">
                    <label for="">13.-¿Conoce o se tiene registro de las leyes, reglamentos y normas a las cuales se tienen que alinear la empresa?</label>
                    <input type="text" name="" id="">
                    <!--<label for="">En caso de que su respuesta sea si</label>
                    <label for="">A. ¿Cuáles son?</label>
                    <input type="text" name="" id="">
                    <label for="">B. Segun su criterio ¿En cuales no se está cumpliendo la norma/reglamento/ley?</label>
                    <input type="text" name="" id="">-->
                    <label for="">14.-¿Conoce el estado financiero actual de la empresa?</label>
                    <input type="text" name="" id="">
                    <label for="">15.-¿Cada cuanto se actualiza la información financiera para poder ser consultada?</label>
                    <input type="text" name="" id="">
                    <label for="">16.-¿Qué herramientas de software utilizan para la gestión de la información financiera?</label>
                    <input type="text" name="" id="">
                    <label for="">17.-El software que utiliza la empresa ¿Qué porcentaje cuenta con la licencia vigente?</label>
                    <input type="text" name="" id="">
                    <label for="">18.-Anotaciones y observaciones del consultor</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
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