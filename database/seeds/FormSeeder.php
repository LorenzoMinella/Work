<?php

use Illuminate\Database\Seeder;
use App\Form;

class FormTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Form::create([
            'name' => 'Comparador 1',
            'long_short' => 1,
            'status' => 1,
            'have_first_question' => 1,
            'have_last_question' => 1,
        ]);
    }
}
