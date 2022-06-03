<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HuisdierSlangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slang_huisdier_array = ["Salmari","Calypso","Pluto","Norbert","Tak"];

        DB::table("huisdier")->insert([
            'name' => 'Salmari',
            'soort' => "Slang",
            'image' => '/img/huisdier_slang_salmari.jpg',
            'description' => "Slangen zijn erg leuke huisdieren en zo is Salmari echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Calypso',
            'soort' => "Slang",
            'image' => '/img/huisdier_slang_calypso.jpg',
            'description' => "Slangen zijn erg leuke huisdieren en zo is Calypso echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Pluto',
            'soort' => "Slang",
            'image' => '/img/huisdier_slang_pluto.jpg',
            'description' => "Slangen zijn erg leuke huisdieren en zo is Pluto echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Norbert',
            'soort' => "Slang",
            'image' => '/img/huisdier_slang_norbert.jpg',
            'description' => "Slangen zijn erg leuke huisdieren en zo is Norbert echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Tak',
            'soort' => "Slang",
            'image' => '/img/huisdier_slang_tak.jpg',
            'description' => "Slangen zijn erg leuke huisdieren en zo is Tak echt een beestje wat bij je huis past."
        ]);
    }
}
