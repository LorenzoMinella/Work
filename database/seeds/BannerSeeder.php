<?php

use Illuminate\Database\Seeder;
use App\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()   
    {
        Banner::create([
            'title' => 'Tu comparador de alarmas de casa y negocio',
            'banner_url' => 'img/features/banner.png',
            'link_url' => 'http://www.twitter.com'
        ]);
    }
}
