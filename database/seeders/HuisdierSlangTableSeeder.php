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

        foreach($slang_huisdier_array as $slang){
            DB::table("huisdier")->insert([
                'name' => $slang,
                'soort' => "Slang",
                'description' => "Slangen zijn erg leuke huisdieren en zo is $slang echt een beestje wat bij je huis past."
            ]);
        }
    }
}
