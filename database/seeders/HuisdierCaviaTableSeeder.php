<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HuisdierCaviaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cavia_huisdier_array = ["Babbel","Knabbel","Kikki","Snufje","Valentino"];

        DB::table("huisdier")->insert([
            'name' => 'Babbel',
            'soort' => "Cavia",
            'image' => '/img/huisdier_cavia_babbel.jpg',
            'description' => "Cavia's zijn erg leuke huisdieren en zo is Babbel echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Knabbel',
            'soort' => "Cavia",
            'image' => '/img/huisdier_cavia_knabbel.jpg',
            'description' => "Cavia's zijn erg leuke huisdieren en zo is Knabbel echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Kikki',
            'soort' => "Cavia",
            'image' => '/img/huisdier_cavia_kikki.jpg',
            'description' => "Cavia's zijn erg leuke huisdieren en zo is Kikki echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Snufje',
            'soort' => "Cavia",
            'image' => '/img/huisdier_cavia_snufje.jpg',
            'description' => "Cavia's zijn erg leuke huisdieren en zo is Snufje echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Valentino',
            'soort' => "Cavia",
            'image' => '/img/huisdier_cavia_valentino.jpg',
            'description' => "Cavia's zijn erg leuke huisdieren en zo is Valentino echt een beestje wat bij je huis past."
        ]);
    }
}
