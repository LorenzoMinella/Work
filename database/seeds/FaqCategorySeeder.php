<?php

use Illuminate\Database\Seeder;
use App\FaqCategory;

class FaqCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FaqCategory::create([
            'category_name' => 'Alarmas',
            'category_icon' => 'imagenes/iconos/siren.png'
        ]);
        FaqCategory::create([
            'category_name' => 'Seguridad',
            'category_icon' => 'imagenes/iconos/somosindependientes.png'
        ]);
        FaqCategory::create([
            'category_name' => 'Problemas',
            'category_icon' => 'imagenes/iconos/problems.png'
        ]);
        FaqCategory::create([
            'category_name' => 'Componentes',
            'category_icon' => 'imagenes/iconos/components.png'
        ]);

    }
}

                                    