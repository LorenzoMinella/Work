<?php

use Illuminate\Database\Seeder;
use App\Answer;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()   
    {
        Answer::create([
            'content' => 'Para una vivienda',
            'question_id' => '1',
            'next_question' => '2'
        ]);
        Answer::create([
            'content' => 'Para un negocio o local',
            'question_id' => '1',
            'next_question' => '13'
        ]);
        Answer::create([
            'content' => 'Vivienda Habitual',
            'question_id' => '2',
            'next_question' => '3'
        ]);
        Answer::create([
            'content' => 'Segunda Vivienda',
            'question_id' => '2',
            'next_question' => '3'
        ]);
        Answer::create([
            'content' => 'Sí, en la vivienda para la que consulto ahora',
            'question_id' => '3',
            'next_question' => '4'
        ]);
        Answer::create([
            'content' => 'Sí, en otra vivienda',
            'question_id' => '3',
            'next_question' => '5'
        ]);
        Answer::create([
            'content' => 'Sí, en un negocio o local',
            'question_id' => '3',
            'next_question' => '5'
        ]);
        Answer::create([
            'content' => 'No, nunca he tenido alarma',
            'question_id' => '3',
            'next_question' => '7'
        ]);
        Answer::create([
            'content' => 'Menos de 30€ al mes',
            'question_id' => '4',
            'next_question' => '5'
        ]);
        Answer::create([
            'content' => 'Entre 30 y 40€ al mes',
            'question_id' => '4',
            'next_question' => '5'
        ]);
        Answer::create([
            'content' => 'Entre 40 y 50€ al mes',
            'question_id' => '4',
            'next_question' => '5'
        ]);
        Answer::create([
            'content' => 'Más de 50€ al mes',
            'question_id' => '4',
            'next_question' => '5'
        ]);
        Answer::create([
            'content' => 'No tengo cuota mensual',
            'question_id' => '4',
            'next_question' => '5'
        ]);
        Answer::create([
            'content' => 'Securitas Direct',
            'question_id' => '5',
            'next_question' => '6'
        ]);
        Answer::create([
            'content' => 'Prosegur',
            'question_id' => '5',
            'next_question' => '6'
        ]);
        Answer::create([
            'content' => 'Tyco',
            'question_id' => '5',
            'next_question' => '6'
        ]);
        Answer::create([
            'content' => 'Alarma no conectada',
            'question_id' => '5',
            'next_question' => '6'
        ]);
         Answer::create([
            'content' => 'Otro',
            'question_id' => '5',
            'next_question' => '6'
        ]);
         Answer::create([
            'content' => 'Muy satisfecho',
            'question_id' => '6',
            'next_question' => '7'
        ]);
         Answer::create([
            'content' => 'Satisfecho, pero no me importaría cambiar',
            'question_id' => '6',
            'next_question' => '7'
        ]);
         Answer::create([
            'content' => 'Algo descontento',
            'question_id' => '6',
            'next_question' => '7'
        ]);
         Answer::create([
            'content' => 'Muy descontento',
            'question_id' => '6',
            'next_question' => '7'
        ]);
         Answer::create([
            'content' => 'Prevenir la intrusión de algún ladrón',
            'question_id' => '7',
            'next_question' => '8'
        ]);
         Answer::create([
            'content' => 'Poder vigilar lo que ocurre en mi casa',
            'question_id' => '7',
            'next_question' => '8'
        ]);
         Answer::create([
            'content' => 'Las dos cosas',
            'question_id' => '7',
            'next_question' => '8'
        ]);
         Answer::create([
            'content' => 'Que entren en mi casa cuando estoy dentro',
            'question_id' => '8',
            'next_question' => '9'
        ]);
         Answer::create([
            'content' => 'Que entren en mi casa cuando están mis hijos pero yo no',
            'question_id' => '8',
            'next_question' => '9'
        ]);
         Answer::create([
            'content' => 'Que entren en mi casa para robar cuando no estoy',
            'question_id' => '8',
            'next_question' => '9'
        ]);
         Answer::create([
            'content' => 'Que me ocupen o me destrocen la casa',
            'question_id' => '8',
            'next_question' => '9'
        ]);
         Answer::create([
            'content' => 'Poder vigilar a mis mascotas cuando no estoy',
            'question_id' => '8',
            'next_question' => '9'
        ]);
         Answer::create([
            'content' => 'Poder vigilar al personal domestico cuando no estoy',
            'question_id' => '8',
            'next_question' => '9'
        ]);
         Answer::create([
            'content' => 'Chalet o adosado',
            'question_id' => '9',
            'next_question' => '10'
        ]);
         Answer::create([
            'content' => 'Piso bajo o ático',
            'question_id' => '9',
            'next_question' => '10'
        ]);
         Answer::create([
            'content' => 'Piso de altura intermedia',
            'question_id' => '9',
            'next_question' => '10'
        ]);
         Answer::create([
            'content' => 'En una zona habitada',
            'question_id' => '10',
            'next_question' => '11'
        ]);
         Answer::create([
            'content' => 'En una zona aislada',
            'question_id' => '10',
            'next_question' => '11'
        ]);
         Answer::create([
            'content' => 'Sí, tiene portero o vigilante las 24h',
            'question_id' => '11',
            'next_question' => '12'
        ]);
         Answer::create([
            'content' => 'Sí, tiene portero o vigilante durante parte del día',
            'question_id' => '11',
            'next_question' => '12'
        ]);
         Answer::create([
            'content' => 'No, no está vigilada',
            'question_id' => '11',
            'next_question' => '12'
        ]);
         Answer::create([
            'content' => 'Oficina',
            'question_id' => '13',
            'next_question' => '17'
        ]);
         Answer::create([
            'content' => 'Bar o restaurante',
            'question_id' => '13',
            'next_question' => '14'
        ]);
         Answer::create([
            'content' => 'Joyería, Farmacia, Estanco o Gasolinera',
            'question_id' => '13',
            'next_question' => '18'
        ]);
         Answer::create([
            'content' => 'Nave o Taller',
            'question_id' => '13',
            'next_question' => '18'
        ]);
         Answer::create([
            'content' => 'Otro tipo de comercio',
            'question_id' => '13',
            'next_question' => '18'
        ]);
         Answer::create([
            'content' => 'Sólo 1',
            'question_id' => '14',
            'next_question' => '19'
        ]);
         Answer::create([
            'content' => 'Entre 2 y 5',
            'question_id' => '14',
            'next_question' => '19'
        ]);
         Answer::create([
            'content' => 'Más de 5',
            'question_id' => '14',
            'next_question' => '19'
        ]);
         Answer::create([
            'content' => 'Estoy yo solo',
            'question_id' => '15',
            'next_question' => '16  '
        ]);
         Answer::create([
            'content' => 'De 2 a 10 empleados',
            'question_id' => '15',
            'next_question' => '16  '
        ]);
         Answer::create([
            'content' => 'Más de 10 empleados',
            'question_id' => '15',
            'next_question' => '16  '
        ]);
         Answer::create([
            'content' => 'Sí, en el negocio para el que consulto ahora',
            'question_id' => '16',
            'next_question' => '4'
        ]);
         Answer::create([
            'content' => 'Sí, en una vivienda',
            'question_id' => '16',
            'next_question' => '5'
        ]);
         Answer::create([
            'content' => 'Sí, en otro negocio',
            'question_id' => '16',
            'next_question' => '5'
        ]);
         Answer::create([
            'content' => 'No, nunca he tenido alarma',
            'question_id' => '16',
            'next_question' => '7'
        ]);
         Answer::create([
            'content' => 'En edificio empresarial con vigilancia 24h',
            'question_id' => '17',
            'next_question' => '19'
        ]);
         Answer::create([
            'content' => 'En edificio empresarial con vigilancia durante parte del día',
            'question_id' => '17',
            'next_question' => '19'
        ]);
         Answer::create([
            'content' => 'En edificio empresarial sin vigilancia',
            'question_id' => '17',
            'next_question' => '19'
        ]);
         Answer::create([
            'content' => 'En edificio de vivienda con vigilancia 24h',
            'question_id' => '17',
            'next_question' => '19'
        ]);
         Answer::create([
            'content' => 'En edificio de vivienda con vigilancia durante parte del día',
            'question_id' => '17',
            'next_question' => '19'
        ]);
         Answer::create([
            'content' => 'En edificio de vivienda sin vigilancia',
            'question_id' => '17',
            'next_question' => '19'
        ]);
         Answer::create([
            'content' => 'Sólo 1',
            'question_id' => '18',
            'next_question' => '19'
        ]);
         Answer::create([
            'content' => 'Entre 2 y 5',
            'question_id' => '18',
            'next_question' => '19'
        ]);
        Answer::create([
            'content' => 'Más de 5',
            'question_id' => '18',
            'next_question' => '19'
        ]);
         Answer::create([
            'content' => 'Sólo abre de día',
            'question_id' => '19',
            'next_question' => '15'
        ]);
        Answer::create([
            'content' => 'Sólo abre de noche',
            'question_id' => '19',
            'next_question' => '15'
        ]);
        Answer::create([
            'content' => '24 horas',
            'question_id' => '19',
            'next_question' => '15'
        ]);
        Answer::create([
            'content' => 'Que entren en mi negocio para robar cuando está abierto',
            'question_id' => '20',
            'next_question' => '21'
        ]);
        Answer::create([
            'content' => 'Que entren en mi negocio para robar cuando está cerrado',
            'question_id' => '20',
            'next_question' => '21'
        ]);
         Answer::create([
            'content' => 'Vigilar posibles robos de mis empleados',
            'question_id' => '20',
            'next_question' => '21'
        ]);
        Answer::create([
            'content' => 'Que me ocupen o me destrocen el negocio',
            'question_id' => '20',
            'next_question' => '21'
        ]);
        Answer::create([
            'content' => 'Controlar lo que hacen mis empleados',
            'question_id' => '20',
            'next_question' => '21'
        ]);
    }
}
