<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images_array = ['huisdier_default.jpg', 'huisdier_hond_dexter.jpg', 'huisdier_hond_jackie.jpg', 'huisdier_hond_lindsey.jpg', 'huisdier_hond_soof.jpg', 'huisdier_hond_tony.jpg', 'huisdier_kater_bammie.jpg', 'huisdier_kater_chucky.jpg', 'huisdier_kater_gizmo.jpg', 'huisdier_kater_leco.jpg', 'huisdier_kater_max.jpg'];
        foreach($images_array as $image){
            DB::table('images')->insert([
                'image' => '/img/' . $image
            ]);
        }
    }
}
