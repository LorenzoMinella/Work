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
        Question::create([
            'title' => '¿Qué tipo de alarma quieres comparar?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '1',            
            'last_question' => '0'            
        ]);
        Question::create([
            'title' => '¿Se trata de tu vivienda principal o de una segunda vivienda?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]);
        Question::create([
            'title' => '¿Tienes actualmente o has tenido alguna alarma instalada?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]);
        Question::create([
            'title' => '¿Qué cuota mensual estás pagando actualmente?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]);
        Question::create([
            'title' => '¿Con qué compañía has tenido o tienes alarma?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]);
        Question::create([
            'title' => '¿Cuál dirías que es tu grado de satisfacción con esta alarma?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]);
        Question::create([
            'title' => '¿Qué quieres hacer con el sistema de alarma?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]);
        Question::create([
            'title' => '¿Qué es lo que más te preocupa?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]);
        Question::create([
            'title' => '¿Qué tipo de vivienda es?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]);
        Question::create([
            'title' => '¿Dónde se encuentra la vivienda?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]);
        Question::create([
            'title' => '¿Tu vivienda dispone de cierta vigilancia?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]);
        Question::create([
            'title' => '¿Cuántos metros cuadrados mide tu vivienda aproximadamente?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]);
        Question::create([
            'title' => '¿Qué tipo de negocio quieres proteger?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]);
        Question::create([
            'title' => '¿Cuántos bares y restaurantes tienes?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]);
        Question::create([
            'title' => '¿Cuántos empleados tienes?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]);
        Question::create([
            'title' => '¿Tienes actualmente o has tenido alguna alarma instalada?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]);
        Question::create([
            'title' => '¿Dónde se encuentra tu oficina?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]);
        Question::create([
            'title' => '¿Cuántos locales quieres proteger?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]);        
  
        Question::create([
            'title' => '¿Qué horario tiene tu negocio?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]); 
        Question::create([
            'title' => '¿Qué es lo que más te preocupa de tu negocio?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]);
        Question::create([
            'title' => '¿Cuál es tu código postal?',
            'form_id' => '1',
            'asigned' => '0',
            'first_question' => '0',            
            'last_question' => '0'            
        ]);
    }
}
