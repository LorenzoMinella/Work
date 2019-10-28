<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'Alarmas de seguridad | FDI Protect seguridad | Alarmalia',
            'description' => 'FDI PROTECT, se afianza en el sector como empresa de seguridad, especializada en todo tipo de sistemas, cubriendo así las necesidades existentes en el mercado y minimizando al 90% las acciones vandálicas a las que hoy en día tanto particulares como empresas están expuestos día a día. Gracias a un equipo altamente cualificado, nuestro cliente recibe asesoramiento de estado de puntos débiles a tener en cuenta y facilitamos la mejor solución para cada uno de ellos, empleando medidas tanto físicas como tecnológicas para garantizar la mejor seguridad de nuestros clientes. FDI PROTECT, garantizamos la seguridad de nuestras instalaciones a prueba de inhibidores y acciones neutralizadoras.',
            'link_image' => 'imagenes/companies/fdi.jpg',
            'phone' => '935 00 12 40',
            'nivel_seguridad' => 'Aquí ira un bello texto sobre el nivel de seguridad que ofrece esta empresa y alguna otra información adecuada para poner en este sitio y que la gente se informe.',
            'tecnologia' => 'Aquí ira un bello texto sobre la tecnología disponible y mayormente utilizada en esta compañía para que el cliente sepa qué servicio está comprando.',
            'diferencia' => 'Aquí ira un bello texto sobre la diferencia de esta compañía por sobre las otras para facilitarle la elección al cliente.',
            'precio' => 'Aquí ira un bello texto sobre la diferencia de esta compañía por sobre las otras para facilitarle la elección al cliente.',
            'contratar' => 'Aquí ira un bello texto sobre las condiciones de contratación para este servicio con esta empresa que le interesa al cliente.',
            'instalacion' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'direccion' => '# Aquí la dirección 001 de la oficina, Barcelona, España // Tel: 012 345 678',
            'permanencia' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'baja' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'facturacion' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'url_web' => 'http://fdiprotect.com/'
        ]);


        Company::create([
            'name' => 'Alarmas de seguridad | Instalaciones Pérez Serrano alarmas | Alarmalia',
            'description' => 'En sus 40 años de experiencia segur24 ha realizado más de 30.000 instalaciones de seguridad. Su CRA se encuentra en un entorno de máxima seguridad física y electrónica e integra todos los sistemas de control de acceso, intrusión CCTV y contraincendios de todos los clientes.',
            'link_image' => 'imagenes/companies/perez.png',
            'phone' => '93 490 51 13',
            'nivel_seguridad' => 'Aquí ira un bello texto sobre el nivel de seguridad que ofrece esta empresa y alguna otra información adecuada para poner en este sitio y que la gente se informe.',
            'tecnologia' => 'Aquí ira un bello texto sobre la tecnología disponible y mayormente utilizada en esta compañía para que el cliente sepa qué servicio está comprando.',
            'diferencia' => 'Aquí ira un bello texto sobre la diferencia de esta compañía por sobre las otras para facilitarle la elección al cliente.',
            'precio' => 'Aquí ira un bello texto sobre la diferencia de esta compañía por sobre las otras para facilitarle la elección al cliente.',
            'contratar' => 'Aquí ira un bello texto sobre las condiciones de contratación para este servicio con esta empresa que le interesa al cliente.',
            'instalacion' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'direccion' => '# Aquí la dirección 001 de la oficina, Barcelona, España // Tel: 012 345 678',
            'permanencia' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'baja' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'facturacion' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'url_web' => 'http://fdiprotect.com/'
        ]);


        Company::create([
            'name' => 'Alarmas de seguridad | Sector Alarm alarmas | Alarmalia',
            'description' => 'Sector Alarm es una empresa noruega considerada una de las más importantes y con mayor número de clientes en Europa. Sus dos décadas de experiencia y sus más de 500.000 clientes, la avalan como referente en el ámbito de la seguridad y las alarmas para casas y negocios. Sector Alarm cuenta con un año de experiencia en España, durante el cual ha cosechado buena fama nacional y casi 15.000 clientes. En este artículo te contamos todo lo que necesitas saber sobre la empresa y la mejor forma de contratar sus alarmas y kits de seguridad.',
            'link_image' => 'imagenes/companies/logo.svg',
            'phone' => '902 23 2000',
            'nivel_seguridad' => 'Aquí ira un bello texto sobre el nivel de seguridad que ofrece esta empresa y alguna otra información adecuada para poner en este sitio y que la gente se informe.',
            'tecnologia' => 'Aquí ira un bello texto sobre la tecnología disponible y mayormente utilizada en esta compañía para que el cliente sepa qué servicio está comprando.',
            'diferencia' => 'Aquí ira un bello texto sobre la diferencia de esta compañía por sobre las otras para facilitarle la elección al cliente.',
            'precio' => 'Aquí ira un bello texto sobre la diferencia de esta compañía por sobre las otras para facilitarle la elección al cliente.',
            'contratar' => 'Aquí ira un bello texto sobre las condiciones de contratación para este servicio con esta empresa que le interesa al cliente.',
            'instalacion' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'direccion' => '# Aquí la dirección 001 de la oficina, Barcelona, España // Tel: 012 345 678',
            'permanencia' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'baja' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'facturacion' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'url_web' => 'http://fdiprotect.com/'
        ]);

        Company::create([
            'name' => 'Alarmas hogar y negocio | Trablisa alarmas | Alarmalia',
            'description' => 'Trasportes Blindados SA comenzó como una empresa de vigilancia y transporte de valores que ha evolucionado sus servicios para ofrecer, además de un tratamiento integral de efectivo, servicios de vigilancia y protección y sistemas de alarma.',
            'link_image' => 'imagenes/companies/trablisa.jpg',
            'phone' => ' ',
            'nivel_seguridad' => 'Aquí ira un bello texto sobre el nivel de seguridad que ofrece esta empresa y alguna otra información adecuada para poner en este sitio y que la gente se informe.',
            'tecnologia' => 'Aquí ira un bello texto sobre la tecnología disponible y mayormente utilizada en esta compañía para que el cliente sepa qué servicio está comprando.',
            'diferencia' => 'Aquí ira un bello texto sobre la diferencia de esta compañía por sobre las otras para facilitarle la elección al cliente.',
            'precio' => 'Aquí ira un bello texto sobre la diferencia de esta compañía por sobre las otras para facilitarle la elección al cliente.',
            'contratar' => 'Aquí ira un bello texto sobre las condiciones de contratación para este servicio con esta empresa que le interesa al cliente.',
            'instalacion' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'direccion' => '# Aquí la dirección 001 de la oficina, Barcelona, España // Tel: 012 345 678',
            'permanencia' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'baja' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'facturacion' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'url_web' => 'http://fdiprotect.com/'
        ]);

        Company::create([
            'name' => 'Alarmas hogar y negocios | Visegur alarmas | Alarmalia',
            'description' => 'Visegur ofrece servicios de vigilancia tradicionales como las rondas y patrullas, vigilancia mediante CCTV, vigilancia en centros comerciales o polígonos industriales… Además, ofrece servicios de domótica, sistemas anti-intrusión, instalación de alarmas... Cuenta con una Central Receptora de Alarmas de cobertura nacional y un sistema de videovigilancia conectada a una app móvil.',
            'link_image' => 'imagenes/companies/visegur.png',
            'phone' => '902 902 031',
            'nivel_seguridad' => 'Aquí ira un bello texto sobre el nivel de seguridad que ofrece esta empresa y alguna otra información adecuada para poner en este sitio y que la gente se informe.',
            'tecnologia' => 'Aquí ira un bello texto sobre la tecnología disponible y mayormente utilizada en esta compañía para que el cliente sepa qué servicio está comprando.',
            'diferencia' => 'Aquí ira un bello texto sobre la diferencia de esta compañía por sobre las otras para facilitarle la elección al cliente.',
            'precio' => 'Aquí ira un bello texto sobre la diferencia de esta compañía por sobre las otras para facilitarle la elección al cliente.',
            'contratar' => 'Aquí ira un bello texto sobre las condiciones de contratación para este servicio con esta empresa que le interesa al cliente.',
            'instalacion' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'direccion' => '# Aquí la dirección 001 de la oficina, Barcelona, España // Tel: 012 345 678',
            'permanencia' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'baja' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'facturacion' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'url_web' => 'http://fdiprotect.com/'
        ]);

        Company::create([
            'name' => 'Alarmas para casa y hogar | Alarmas Tyco | Alarmalia',
            'description' => 'Tyco, empresa de seguridad y protección contra el fuego, fue fundada en 1960 y aunque proviene de estados unidos tiene su sede actual en Suiza. Actualmente cuenta con más de 57.000 empleados y más de 1.000 centros por todo el mundo.',
            'link_image' => 'imagenes/companies/tyco.jpg',
            'phone' => '902 44 44 40',
            'nivel_seguridad' => 'Aquí ira un bello texto sobre el nivel de seguridad que ofrece esta empresa y alguna otra información adecuada para poner en este sitio y que la gente se informe.',
            'tecnologia' => 'Aquí ira un bello texto sobre la tecnología disponible y mayormente utilizada en esta compañía para que el cliente sepa qué servicio está comprando.',
            'diferencia' => 'Aquí ira un bello texto sobre la diferencia de esta compañía por sobre las otras para facilitarle la elección al cliente.',
            'precio' => 'Aquí ira un bello texto sobre la diferencia de esta compañía por sobre las otras para facilitarle la elección al cliente.',
            'contratar' => 'Aquí ira un bello texto sobre las condiciones de contratación para este servicio con esta empresa que le interesa al cliente.',
            'instalacion' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'direccion' => '# Aquí la dirección 001 de la oficina, Barcelona, España // Tel: 012 345 678',
            'permanencia' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'baja' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'facturacion' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'url_web' => 'http://fdiprotect.com/'
        ]);

        Company::create([
            'name' => 'Alarmas seguridad y vigilancia | Securitas Direct | Alarmalia',
            'description' => 'Securitas Direct es una empresa de seguridad con sede en Suecia, que opera en 14 países de Europa y América del Sur. En algunos países opera bajo el nombre de su filial, Verisure. Fue fundada por el grupo Securitas AB y cuenta ya con más de 25 años de experiencia. La compañía cuenta con una Central Receptora de alarmas.',
            'link_image' => 'imagenes/companies/securitas.png',
            'phone' => '902 195 195',
            'nivel_seguridad' => 'Aquí ira un bello texto sobre el nivel de seguridad que ofrece esta empresa y alguna otra información adecuada para poner en este sitio y que la gente se informe.',
            'tecnologia' => 'Aquí ira un bello texto sobre la tecnología disponible y mayormente utilizada en esta compañía para que el cliente sepa qué servicio está comprando.',
            'diferencia' => 'Aquí ira un bello texto sobre la diferencia de esta compañía por sobre las otras para facilitarle la elección al cliente.',
            'precio' => 'Aquí ira un bello texto sobre la diferencia de esta compañía por sobre las otras para facilitarle la elección al cliente.',
            'contratar' => 'Aquí ira un bello texto sobre las condiciones de contratación para este servicio con esta empresa que le interesa al cliente.',
            'instalacion' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'direccion' => '# Aquí la dirección 001 de la oficina, Barcelona, España // Tel: 012 345 678',
            'permanencia' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'baja' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'facturacion' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'url_web' => 'http://fdiprotect.com/'
        ]);

        Company::create([
            'name' => 'Comparador de alarmas | Prosegur alarmas | Alarmalia',
            'description' => 'Prosegur, empresa de seguridad privada se constituye en 1976 ofreciendo servicios centrados en logística de valores y la gestión de efectivo. Hoy sus servicios se enmarcan en tres grupos; Prosegur Alarmas, Prosegur Seguridad y Prosegur Cash, ofreciendo así servicios tanto a particulares como a empresas de todos los tamaños.',
            'link_image' => 'imagenes/companies/prosegur.png',
            'phone' => '902 577 999',
            'nivel_seguridad' => 'Aquí ira un bello texto sobre el nivel de seguridad que ofrece esta empresa y alguna otra información adecuada para poner en este sitio y que la gente se informe.',
            'tecnologia' => 'Aquí ira un bello texto sobre la tecnología disponible y mayormente utilizada en esta compañía para que el cliente sepa qué servicio está comprando.',
            'diferencia' => 'Aquí ira un bello texto sobre la diferencia de esta compañía por sobre las otras para facilitarle la elección al cliente.',
            'precio' => 'Aquí ira un bello texto sobre la diferencia de esta compañía por sobre las otras para facilitarle la elección al cliente.',
            'contratar' => 'Aquí ira un bello texto sobre las condiciones de contratación para este servicio con esta empresa que le interesa al cliente.',
            'instalacion' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'direccion' => '# Aquí la dirección 001 de la oficina, Barcelona, España // Tel: 012 345 678',
            'permanencia' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'baja' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'facturacion' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'url_web' => 'http://fdiprotect.com/'
        ]);


        Company::create([
            'name' => 'Comparador de alarmas | Segur24 sistemas de seguridad | Alarmalia',
            'description' => 'En sus 40 años de experiencia segur24 ha realizado más de 30.000 instalaciones de seguridad. Su CRA se encuentra en un entorno de máxima seguridad física y electrónica e integra todos los sistemas de control de acceso, intrusión CCTV y contraincendios de todos los clientes.',
            'link_image' => 'imagenes/companies/segur.jpg',
            'phone' => '902 15 15 20',
            'nivel_seguridad' => 'Aquí ira un bello texto sobre el nivel de seguridad que ofrece esta empresa y alguna otra información adecuada para poner en este sitio y que la gente se informe.',
            'tecnologia' => 'Aquí ira un bello texto sobre la tecnología disponible y mayormente utilizada en esta compañía para que el cliente sepa qué servicio está comprando.',
            'diferencia' => 'Aquí ira un bello texto sobre la diferencia de esta compañía por sobre las otras para facilitarle la elección al cliente.',
            'precio' => 'Aquí ira un bello texto sobre la diferencia de esta compañía por sobre las otras para facilitarle la elección al cliente.',
            'contratar' => 'Aquí ira un bello texto sobre las condiciones de contratación para este servicio con esta empresa que le interesa al cliente.',
            'instalacion' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'direccion' => '# Aquí la dirección 001 de la oficina, Barcelona, España // Tel: 012 345 678',
            'permanencia' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'baja' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'facturacion' => 'Aquí ira un bello texto sobre el método indicado para su instalación y lo que implica para el usuario y cliente.',
            'url_web' => 'http://fdiprotect.com/'
        ]);

    }
}
