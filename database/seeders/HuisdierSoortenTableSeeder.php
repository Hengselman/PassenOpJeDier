<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HuisdierSoortenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $huisdier_soorten_array = ["Kater","Hond","Cavia","Papegaai","Slang"];

        foreach($huisdier_soorten_array as $huisdier_soort){
            DB::table("huisdier_soorten")->insert([
                'soort' => $huisdier_soort
            ]);
        }
    }
}
