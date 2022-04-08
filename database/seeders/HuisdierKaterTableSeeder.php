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

        foreach($kater_huisdier_array as $kater){
            DB::table("huisdier")->insert([
                'name' => $kater,
                'soort' => "Kater",
                'description' => "Katten of poezen zijn erg leuke huisdieren en zo is $kater echt een beestje wat bij je huis past."
            ]);
        }
    }
}
