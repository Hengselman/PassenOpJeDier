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

        foreach($cavia_huisdier_array as $cavia){
            DB::table("huisdier")->insert([
                'name' => $cavia,
                'soort' => "Cavia",
                'description' => "Cavia's zijn erg leuke huisdieren en zo is $cavia echt een beestje wat bij je huis past."
            ]);
        }
    }
}
