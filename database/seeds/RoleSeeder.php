<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Administrador',
            'display_name' => 'Administrador',
            'description' => 'Control sobre todo el sitio.'
        ]);
        Role::create([
            'name' => 'Editor empresa',
            'display_name' => 'Editor empresa',
            'description' => 'Permiso limitado. Solo puede editar su ficha de productos personal y crear posts del blog pero sin permiso para publicar.'
        ]);
        Role::create([
            'name' => 'Editor blog',
            'display_name' => 'Editor blog',
            'description' => 'Permiso muy limitado. Usuario que solo puede crear posts del blog pero sin permiso para publicar.'
        ]);
        Role::create([
            'name' => 'Administrador de leads',
            'display_name' => 'Administrador de leads',
            'description' => 'Usuario con acceso solo a la gestión de leads.'
        ]);
    }
}
