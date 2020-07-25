<?php

use Illuminate\Database\Seeder;
use App\Question;


class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =  Faker\Factory::create();
        $question = [
            [
                'question' => 'Nombre completo',

            ],
            [
                'question' => 'Teléfono',

            ],
            [
                'question' => 'Correo electrónico',

            ],
            [
                'question' => 'Puesto',

            ],
            [
                'question' => '¿Según su criterio cuáles son los 2 problemas más relevantes que deberían ser resueltos de manera inmediata?',

            ],
            [
                'question' => '¿Cuenta con documentación que describa la organización de su empresa?',

            ],
            [
                'question' => ' ¿Cuáles documentos son?',

            ],
            [
                'question' => '¿Los empleados conocen estos documentos?',

            ],
            [
                'question' => '¿Los empleados tienen acceso a estos documentos?',

            ],
            [
                'question' => '¿Cada cuando aplican herramientas para evaluar el ambiente de trabajo?',

            ],
            [
                'question' => '¿Cuál es la frecuencia con la que los empleados se capacitan?',

            ],
            [
                'question' => '¿Conoce o se tiene registro de las leyes, reglamentos y normas a las cuales se tiene que alinear la empresa?',

            ],
            [
                'question' => '¿Cuáles son?',

            ],
            [
                'question' => '¿Según su criterio, en cuales no se está cumpliendo la norma/reglamento/ley?',

            ],
            [
                'question' => '¿Conoce el estado financiero actual de la empresa?',

            ],
            [
                'question' => '¿Cada cuando se actualiza la información financiera para poder ser consultada?',

            ],
            [
                'question' => '¿Qué herramientas de software utilizan para gestionar la información financiera?',

            ],
            [
                'question' => 'El software que utiliza la empresa ¿Qué porcentaje cuenta con licencia vigente?',

            ],
            [
                'question' => 'Anotaciones y observaciones del consultor',

            ],


        ];


        foreach ($question as $key => $squestion) {
            $question = new Question();
            $question->question = $squestion['question'];
            $question->status = 1;
            $question->created_at = Carbon\Carbon::now();
            $question->save();
        }
    }
}
