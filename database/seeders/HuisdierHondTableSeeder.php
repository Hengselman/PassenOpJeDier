<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HuisdierHondTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hond_huisdier_array = ["Tony","Lindsey","Soof"];

        DB::table("huisdier")->insert([
            'name' => 'Dexter',
            'soort' => "Hond",
            'image' => '/img/huisdier_hond_dexter.jpg',
            'description' => "Honden zijn erg leuke huisdieren en zo is Dexter echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Jackie',
            'soort' => "Hond",
            'image' => '/img/huisdier_hond_jackie.jpg',
            'description' => "Honden zijn erg leuke huisdieren en zo is Jackie echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Lindsey',
            'soort' => "Hond",
            'image' => '/img/huisdier_hond_lindsey.jpg',
            'description' => "Honden zijn erg leuke huisdieren en zo is Lindsey echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Tony',
            'soort' => "Hond",
            'image' => '/img/huisdier_hond_tony.jpg',
            'description' => "Honden zijn erg leuke huisdieren en zo is Tony echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Soof',
            'soort' => "Hond",
            'image' => '/img/huisdier_hond_soof.jpg',
            'description' => "Honden zijn erg leuke huisdieren en zo is Soof echt een beestje wat bij je huis past."
        ]);
    }
}
