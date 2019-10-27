<?php

use Illuminate\Database\Seeder;
use App\Advantage;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Advantage::create([
            'content' => 'Una de las mejores compañías de Europa.',
            'company_id' => '1',
            'advatage_disadvantage' => '0'
        ]);
        Advantage::create([
            'content' => 'Contrato sencillo sin financiación externa.',
            'company_id' => '1',
            'advatage_disadvantage' => '0'
        ]);
        Advantage::create([
            'content' => 'Atención al cliente permanente 24/365 con personal propio (no externalizado).',
            'company_id' => '1',
            'advatage_disadvantage' => '0'
        ]);
        Advantage::create([
            'content' => 'Servicio acuda, envío de un vigilante si es necesario.',
            'company_id' => '1',
            'advatage_disadvantage' => '0'
        ]);
        Advantage::create([
            'content' => 'Gama completa de productos añadidos.',
            'company_id' => '1',
            'advatage_disadvantage' => '0'
        ]);        
        Advantage::create([
            'content' => 'No es tan conocida en España.',
            'company_id' => '1',
            'advatage_disadvantage' => '1'
        ]); 
        Advantage::create([
            'content' => 'Al estar en proceso de expansión por el territorio nacional, no cubre el 100% de localidades si bien tiene una amplia cobertura que crece cada día.',
            'company_id' => '1',
            'advatage_disadvantage' => '1'
        ]); 
    }
}
