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

        foreach($papegaai_huisdier_array as $papegaai){
            DB::table("huisdier")->insert([
                'name' => $papegaai,
                'soort' => "Papegaai",
                'description' => "Papegaaien zijn erg leuke huisdieren en zo is $papegaai echt een beestje wat bij je huis past."
            ]);
        }
    }
}
