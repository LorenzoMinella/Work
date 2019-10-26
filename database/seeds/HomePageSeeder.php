<?php

use Illuminate\Database\Seeder;
use App\HomePage;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomePage::create([
            'description_home' => 'La elección de una alarma para hogar o negocio es una decisión importante, ya que debemos escoger la más adecuada en función de las necesidades de seguridad reales que posean el inmueble y su contenido, o el tipo de negocio o actividad que desempeñe, las prestaciones deseadas o el presupuesto que tengamos. 
                Qué alarma elegir…
                es una de las preguntas más habituales que se hacen las personas que desean instalar un sistema de alarma en su vivienda o negocio ante la diversidad de oferta que hay en el mercado. A continuación se ofrecen una serie de consejos y recomendaciones que ayudan a saber cómo elegir la mejor alarma para negocio u hogar.',
            'select_alarm' => 'A la hora de seleccionar la mejor opción de alarmas para tu casa o negocio es necesario comparar todas las opciones que el mercado ofrece. Esta comparativa debe venir tanto en cuestión de precios como de prestaciones y servicios complementarios. A la hora de seleccionar un sistema de alarmas debemos tener en cuenta aspectos tan importantes como:',
            'desc_one' => '¿Qué pasa ante un salto de alarma? ¿tengo que preocuparme de algo?',
            'desc_two' => '¿Todos los sistemas de alarma me protegen además de ante una posible intrusión, de intentos de sabotaje o inhibición?',
            'desc_three' => '¿Qué servicios adicionales tiene cada sistema de alarma para sentirme completamente seguro?',
            'description_middle' => 'En alarmator comparamos entre todas las opciones disponibles en el mercado tomando como referencia tu caso concreto para ofrecerte las ofertas que mejor se ajustan a tus necesidades al mejor precio.',
            'card_one' => 'Conocemos las necesidades de seguridad en el sector de alarmas. Contamos con experiencia en el sector de alarmas para poder ofrecerte un resultado profesional y 100% real.',
            'card_two' => 'Te daremos una estimación del precio de cada proveedor para que puedas elegir la opción que mejor se ajuste a tu presupuesto.',
            'card_three' => 'Al utilizar nuestro comparador, además de obtener una comparativa real de servicios de alarmas, obtendrás una guía/estudio de seguridad. ¡Todo esto es completamente gratuito!',
            'card_four' => 'Sólo necesitarás 3 minutos para completar nuestro formulario y recibir automáticamente la mejor comparativa entre todas las ofertas que se ajusten a tus necesidades.',
            'card_five' => 'Cada caso es especial, por lo que basamos nuestros resultados en tus respuestas para que puedas comparar entre las ofertas que realmente te convienen.',
            'card_six' => 'Somos completamente independientes y por tanto ofrecemos un resultado objetivo y siempre en base a tus respuestas para que ahorres con la opción más segura.'
        ]);
    }
}
