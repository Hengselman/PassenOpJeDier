<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HuisdierPapegaaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $papegaai_huisdier_array = ["Coco","Jinx","Eevee","Croky","Google"];

        DB::table("huisdier")->insert([
            'name' => 'Coco',
            'soort' => "Papegaai",
            'image' => '/img/huisdier_papegaai_coco.jpg',
            'description' => "Papegaaien zijn erg leuke huisdieren en zo is Coco echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Jinx',
            'soort' => "Papegaai",
            'image' => '/img/huisdier_papegaai_jinx.jpg',
            'description' => "Papegaaien zijn erg leuke huisdieren en zo is Jinx echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Eevee',
            'soort' => "Papegaai",
            'image' => '/img/huisdier_papegaai_eevee.jpg',
            'description' => "Papegaaien zijn erg leuke huisdieren en zo is Eevee echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Croky',
            'soort' => "Papegaai",
            'image' => '/img/huisdier_papegaai_croky.jpg',
            'description' => "Papegaaien zijn erg leuke huisdieren en zo is Croky echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Google',
            'soort' => "Papegaai",
            'image' => '/img/huisdier_papegaai_google.jpg',
            'description' => "Papegaaien zijn erg leuke huisdieren en zo is Google echt een beestje wat bij je huis past."
        ]);
    }
}
