<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HuisdierKaterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kater_huisdier_array = ["Bammie","Leco","Max","Chucky","Gizmo"];

        DB::table("huisdier")->insert([
            'name' => 'Bammie',
            'soort' => "Kater",
            'image' => '/img/huisdier_kater_bammie.jpg',
            'description' => "Katten of poezen zijn erg leuke huisdieren en zo is Chucky echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Leco',
            'soort' => "Kater",
            'image' => '/img/huisdier_kater_leco.jpg',
            'description' => "Katten of poezen zijn erg leuke huisdieren en zo is Chucky echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Max',
            'soort' => "Kater",
            'image' => '/img/huisdier_kater_max.jpg',
            'description' => "Katten of poezen zijn erg leuke huisdieren en zo is Chucky echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Chucky',
            'soort' => "Kater",
            'image' => '/img/huisdier_kater_chucky.jpg',
            'description' => "Katten of poezen zijn erg leuke huisdieren en zo is Chucky echt een beestje wat bij je huis past."
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Gizmo',
            'soort' => "Kater",
            'image' => '/img/huisdier_kater_gizmo.jpg',
            'description' => "Katten of poezen zijn erg leuke huisdieren en zo is Gizmo echt een beestje wat bij je huis past."
        ]);
    }
}
